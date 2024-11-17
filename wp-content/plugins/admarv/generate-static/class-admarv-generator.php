<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
class Admarv_Generator
{
    private $crawled_html_files = array(); // 初始化为空数组

    private $crawled_urls = array();
    private $static_dir;
    private $file_counts = array(
        'html' => 0,
        'jpg' => 0,
        'jpeg' => 0,
        'png' => 0,
        'gif' => 0,
        'bmp' => 0,
        'webp' => 0,
        'svg' => 0,
        'mp4' => 0,
        'mov' => 0,
        'wmv' => 0,
        'avi' => 0,
        'flv' => 0,
        'mkv' => 0,
        'pdf' => 0,
        'doc' => 0,
        'docx' => 0,
        'ppt' => 0,
        'pptx' => 0,
        'xls' => 0,
        'xlsx' => 0,
        'other' => 0
    );
    private $start_time;
    private $stop_flag;
    private $task_status_option;
    private $cache_duration = 3600; // 缓存时间，单位为秒
    private $log_file;
    private $hook_suffix;

    public function __construct()
    {

        $unique_id = md5(ABSPATH);
        $this->static_dir = ABSPATH . 'static/';
        $this->stop_flag = 'admarv_flag';
        $this->task_status_option = 'static_site_generator_status_' . $unique_id;
        $this->log_file = ABSPATH . 'wp-content/uploads/static_site_logs/static_site_generator_' . $unique_id . '.log';
        $this->hook_suffix = 'static_site_generator_task_' . $unique_id;
        $this->ensure_log_file();
        add_action($this->hook_suffix, array($this, 'generate_static_site'));
    }

    private function ensure_log_file()
    {
        $log_dir = dirname($this->log_file);
        if (!is_dir($log_dir)) {
            @mkdir($log_dir, 0755, true); // @符号抑制错误
        }
        if (!file_exists($this->log_file)) {
            touch($this->log_file);
            chmod($this->log_file, 0666);
        }
        // $log_dir = dirname($this->log_file);
        // if (!file_exists($log_dir)) {
        //     mkdir($log_dir, 0755, true);
        // }
        // if (!file_exists($this->log_file)) {
        //     touch($this->log_file);
        //     chmod($this->log_file, 0666);
        // }
    }

    public function replace_domain_with_relative_path($html_content)
    {
        // 获取主域名
        $parsed_home_url = parse_url(home_url());
        $domain = $parsed_home_url['host'];
    
        // 构造正则表达式来匹配带有主域名的链接
        // 这里使用非捕获组和选择结构，忽略端口部分
        $pattern = '/(href|src|data-src)=["\'](https?:\/\/' . preg_quote($domain, '/') . '(:\d+)?)(\/[^"\']*)["\']/i';
    
        // 替换为相对路径，不包括协议和域名部分
        $replacement = '$1="$4"';
    
        // 执行替换
        $modified_content = preg_replace($pattern, $replacement, $html_content);
    
        return $modified_content;
    }
    
    private function set_flag($value) {
        // 将标志状态保存到本地文件
        $file = ABSPATH . 'admarv_flag.txt';
        file_put_contents($file, $value);
    }

    public function generate_static_site()
    {
        $this->start_time = microtime(true);
         // 清空上一次的日志文件
        file_put_contents($this->log_file, '');

        try {
            $dynamic_url = home_url('/'); // 确保爬取的是动态网站的 URL
            $this->log_message('开始加速站点哦: ' . $dynamic_url);
            $this->crawled_html_files = array(); // 初始化数组以存储爬取到的HTML文件
            $this->log_message('crawled_html_files: ' . json_encode($this->crawled_html_files));


            $this->crawl_site($dynamic_url);
            $status = '成功';

            // 遍历收集到的所有 HTML 文件
            foreach ($this->crawled_html_files as $file) {
                $content = file_get_contents($file);
                $modified_content = $this->replace_domain_with_relative_path($content);
                file_put_contents($file, $modified_content);
            }
        } catch (Exception $e) {
            $status = '失败';
            $this->log_message('生成失败：' . $e->getMessage());
        }

        $this->show_statistics();
        $this->save_record($status);
        update_option($this->task_status_option, 'complete');
        $this->set_flag(1);
        $this->log_message('加速站点完成');

        // 清除调度的任务
        $this->clear_scheduled_task();
    }

    private function clear_scheduled_task()
    {
        if (wp_next_scheduled($this->hook_suffix)) {
            wp_clear_scheduled_hook($this->hook_suffix);
            $this->log_message('清除调度的任务');
        }
    }

    private function crawl_site($url)
    {
        // if (strpos($url, 'index.php/product') !== false) {
        //     $this->log_message("找到包含 'index.php/product/' 的链接: $url");
        // }
        if ($this->check_stop_flag()) {
            $this->log_message('检测到停止标志，停止抓取');
            return;
        }

        if (in_array($url, $this->crawled_urls)) {
            // $this->log_message('已抓取过: ' . $url);
            return;
        }
        $this->crawled_urls[] = $url;

        try {
            $cache_file = $this->get_cache_file_path($url);
            if ($this->is_cache_valid($cache_file)) {
                $body = file_get_contents($cache_file);
                // $this->log_message("从缓存中读取: $url");
            } else {
                $response = wp_remote_get($url);
                if (is_wp_error($response)) {
                    $this->log_message("抓取 $url 失败: " . $response->get_error_message());
                    return;
                }
                $body = wp_remote_retrieve_body($response);
                $this->save_to_cache($cache_file, $body);
                // $this->log_message("抓取并缓存: $url");
            }

            // 去除路径里的域名
            // $relative_path = str_replace(home_url(), '', $url);
            $home_url_parsed = parse_url(home_url());
            $home_path = isset($home_url_parsed['path']) ? $home_url_parsed['path'] : '';
            $parsed_url = parse_url($url);
            $url_path = isset($parsed_url['path']) ? $parsed_url['path'] : '';

            $relative_path = str_replace($home_path, '', $url_path);
            $relative_path = preg_replace('/^\/+/', '', $relative_path); // 去掉开头的斜杠
            $relative_path = preg_replace('/\?.*/', '', $relative_path); // 去除参数部分
            // 如果路径是目录或没有扩展名，追加index.html
            if (substr($relative_path, -1) == '/' || pathinfo($relative_path, PATHINFO_EXTENSION) == '') {
                $relative_path .= 'index.html';
            }

            $path = $this->static_dir . $relative_path;

            if (!file_exists(dirname($path))) {
                wp_mkdir_p(dirname($path));
            }
            $path = preg_replace('#/+#', '/', $path); // 将多个斜杠替换为一个

            file_put_contents($path, $body);
            // 将文件路径添加到 crawled_html_files 数组
            $this->crawled_html_files[] = $path;
            $this->increment_file_count('html');

            // $this->log_message("成功抓取并保存页面: $url 到 $path");

            $this->parse_and_crawl_links($body);
            $this->download_resources($body);
        } catch (Exception $e) {
            $this->log_message('抓取和处理页面时出错：' . $e->getMessage());
        }
    }

    private function parse_and_crawl_links($html)
    {
        if ($this->check_stop_flag()) {
            return;
        }

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTML($html);
        libxml_clear_errors();
        $links = $dom->getElementsByTagName('a');

        // foreach ($links as $link) {
        //     $href = $link->getAttribute('href');
        //     $this->log_message('abc-'.$href);
        // }

   

        // foreach ($links as $link) {
        //     $href = $link->getAttribute('href');
        //     $this->log_message("0发现- '': $href");

        //     if (strpos($href, home_url()) !== false) {
        //         $this->log_message("a发现- '': $href");
        //         $this->crawl_site($href);
        //     }
        // }

        foreach ($links as $link) {
            $href = $link->getAttribute('href');
            $parsed_href = parse_url($href);
            $href_domain = isset($parsed_href['host']) ? $parsed_href['host'] : '';
            $home_url = parse_url(home_url());
            $home_domain = $home_url['host'];
            if ($href_domain === $home_domain) {
                $this->crawl_site($href);
            }
        }
    }

    private function download_resources($html)
    {
        if ($this->check_stop_flag()) {
            return;
        }

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTML($html);
        libxml_clear_errors();

        $tags = array('img' => 'src', 'link' => 'href', 'script' => 'src');

        foreach ($tags as $tag => $attribute) {
            $elements = $dom->getElementsByTagName($tag);
            foreach ($elements as $element) {
                $url = $element->getAttribute($attribute);
                if (!empty($url)) {
                    // $this->log_message("开始抓取资源: $url");
                    try {
                        $this->download_file($url);
                        $extension = pathinfo($url, PATHINFO_EXTENSION);
                        $this->increment_file_count($extension);
                    } catch (Exception $e) {
                        $this->log_message('下载资源时出错：' . $e->getMessage());
                    }
                }
            }
        }
    }

    private function download_file($url)
    {
        if ($this->check_stop_flag()) {
            return;
        }

          // 解析主域名
        $home_url = home_url();
        $parsed_home_url = parse_url($home_url);
        $home_domain = $parsed_home_url['host'];

        // 解析资源URL
        $parsed_url = parse_url($url);
        $resource_domain = isset($parsed_url['host']) ? $parsed_url['host'] : '';

        // 判断是否为第三方资源
        if ($resource_domain && $resource_domain !== $home_domain) {
            return; // 跳过第三方资源
        }

        try {
            $cache_file = $this->get_cache_file_path($url);
            if ($this->is_cache_valid($cache_file)) {
                $body = file_get_contents($cache_file);
                // $this->log_message("从缓存中读取资源: $url");
            } else {
                $response = wp_remote_get($url);
                if (is_wp_error($response)) {
                    $this->log_message("下载资源 $url 失败: " . $response->get_error_message());
                    return;
                }
                $body = wp_remote_retrieve_body($response);
                $this->save_to_cache($cache_file, $body);
                // $this->log_message("抓取并缓存资源: $url");
            }

            $relative_path = str_replace(parse_url($home_url, PHP_URL_HOST), '', $url);
            $relative_path = str_replace(array('http://', 'https://'), '', $relative_path);
            $relative_path = str_replace($home_domain, '', $relative_path);

            $relative_path = preg_replace('/\?.*/', '', $relative_path); // 去除参数部分

             // 检查相对路径是否是目录，如果是则添加index.html
            if (substr($relative_path, -1) == '/' || pathinfo($relative_path, PATHINFO_EXTENSION) == '') {
                $relative_path .= 'index.html';
            }

            // 构造本地保存路径
            $path = $this->static_dir . $relative_path;
            $path = preg_replace('#/+#', '/', $path); // 将多个斜杠替换为一个

            if (!file_exists(dirname($path))) {
                wp_mkdir_p(dirname($path));
            }

            // 检查路径是否是文件夹，如果是则修正为文件路径
            if (substr($path, -1) === '/') {
                $path = rtrim($path, '/') . '/' . basename($url);
            }

            file_put_contents($path, $body);

            // $this->log_message("成功下载并保存资源: $url 到 $path");
        } catch (Exception $e) {
            $this->log_message('处理资源时出错：' . $e->getMessage());
        }
    }

    private function check_stop_flag()
    {
        $file = ABSPATH . 'admarv_flag.txt';
        if (file_exists($file)) {
            $flag = file_get_contents($file);
            return intval($flag);
        }
        // 默认返回 0，如果文件不存在
        return 0;
    }

    private function get_cache_file_path($url)
    {
        $unique_id = md5(ABSPATH);
        $cache_dir = ABSPATH . 'wp-content/uploads/static_site_cache/static_site_' . $unique_id . '/';
        if (!file_exists($cache_dir)) {
            wp_mkdir_p($cache_dir);
        }
        return $cache_dir . md5($url) . '.cache';
    }

    private function is_cache_valid($cache_file)
    {
        return file_exists($cache_file) && (time() - filemtime($cache_file) < $this->cache_duration);
    }

    private function save_to_cache($cache_file, $body)
    {
        file_put_contents($cache_file, $body);
    }

    private function increment_file_count($extension)
    {
        $extension = strtolower($extension);
        if (isset($this->file_counts[$extension])) {
            $this->file_counts[$extension]++;
        } else {
            $this->file_counts['other']++;
        }
    }

    private function show_statistics()
    {
        $end_time = microtime(true);
        $time_taken = $end_time - get_option('static_site_generator_start_time');
        $minutes = floor($time_taken / 60);
        $seconds = $time_taken % 60;
        $time_display = $minutes . ' 分 ' . round($seconds, 2) . ' 秒';

        $file_count_strings = array();
        foreach ($this->file_counts as $extension => $count) {
            if ($count > 0) {
                $file_count_strings[] = $count . ' 个 ' . strtoupper($extension) . ' 文件';
            }
        }

        if (empty($file_count_strings)) {
            $file_count_display = '无文件生成。';
        } else {
            $file_count_display = implode('，', $file_count_strings);
        }

        $this->log_message("生成统计: {$file_count_display}, 耗时: {$time_display}");

        add_action('admin_notices', function () use ($time_display, $file_count_display) {
?>
            <div class="notice notice-success is-dismissible">
                <p><?php _e('加速站点生成成功!', 'static-site-generator'); ?></p>
                <p><?php _e('生成的文件总数: ', 'static-site-generator'); ?><?php echo $file_count_display; ?></p>
                <p><?php _e('耗时: ', 'static-site-generator'); ?><?php echo $time_display; ?></p>
            </div>
<?php
        });
    }

    private function save_record($status)
    {
        $end_time = microtime(true);
        $time_taken = $end_time - get_option('static_site_generator_start_time');
        $minutes = floor($time_taken / 60);
        $seconds = $time_taken % 60;
        $time_display = $minutes . ' 分 ' . round($seconds, 2) . ' 秒';

        $size = $this->get_directory_size($this->static_dir) / 1048576; // Convert bytes to MB
        $total_files = array_sum($this->file_counts);

        $record = array(
            'date' => current_time('mysql'),
            'time' => $time_display,
            'size' => round($size, 2),
            'files' => $total_files,
            'status' => $status
        );

        $records = get_option('static_site_generator_records', array());
        $records[] = $record;
        update_option('static_site_generator_records', $records);

        update_option('static_site_generator_file_counts', $this->file_counts);
    }

    private function get_directory_size($dir)
    {
        $size = 0;
        foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir)) as $file) {
            $size += $file->getSize();
        }
        return $size;
    }

    private function log_message($message)
    {
        $timestamp = date("Y-m-d H:i:s");
        file_put_contents($this->log_file, "[$timestamp] $message\n", FILE_APPEND);
    }
}
?>