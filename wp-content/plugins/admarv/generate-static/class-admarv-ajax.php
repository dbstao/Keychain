<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Admarv_Generator_Ajax {
    private $log_file;

    public function __construct() {
        $unique_id = md5(ABSPATH); // 使用每个WordPress实例唯一的ID
        $this->log_file = ABSPATH . 'wp-content/uploads/static_site_logs/static_site_generator_' . $unique_id . '.log';
        add_action('wp_ajax_stop_static_site_generation', array($this, 'stop_static_site_generation'));
        add_action('wp_ajax_get_static_site_generation_status', array($this, 'get_static_site_generation_status'));
    }

    private function set_flag($value) {
        // 将标志状态保存到本地文件
        $file = ABSPATH . 'admarv_flag.txt';
        file_put_contents($file, $value);
    }

    public function stop_static_site_generation() {
        check_ajax_referer('stop_static_site_generation');
        // set_transient('admarv_flag', '1'); // 设置标志为true以停止生成
        // update_option('admarv_flag', 1);
        // $flag_value = get_option('admarv_flag');
        // 设置标志状态为 1，表示任务已停止
        $this->set_flag(1);
        update_option('static_site_generator_status', 'stopped');
        $this->save_record('手动终止');
        $this->log_message('收到停止生成静态站点请求');

        wp_send_json_success('生成已停止');

    }

    public function get_static_site_generation_status() {
        check_ajax_referer('get_static_site_generation_status');
        $file_counts = get_option('static_site_generator_file_counts', array());
        $total_files = array_sum($file_counts);
        $progress = ($total_files > 0) ? round($total_files / $total_files * 100) : 0;
        $time_taken = microtime(true) - get_option('static_site_generator_start_time');
        $minutes = floor($time_taken / 60);
        $seconds = round($time_taken % 60);
        $time_display = $minutes . ' 分 ' . round($seconds, 2) . ' 秒';
    
        $file_count_strings = array();
        foreach ($file_counts as $extension => $count) {
            if ($count > 0) { // 只显示数量大于0的文件类型
                $file_count_strings[] = $count . ' 个 ' . strtoupper($extension) . ' 文件';
            }
        }
    
        if (empty($file_count_strings)) {
            $file_count_display = '无文件生成。';
        } else {
            $file_count_display = implode('，', $file_count_strings);
        }
    
        $status = sprintf(
            '已生成 %s。<br>耗时: %s',
            $file_count_display,
            $time_display
        );

        $admarv_flag_file = ABSPATH . 'admarv_flag.txt';
        $admarv_flag = 0;

        // 读取文件中的 admarv_flag 值
        if (file_exists($admarv_flag_file)) {
            $admarv_flag = intval(file_get_contents($admarv_flag_file));
        }

        // 获取生成器状态
        $generator_status = get_option('static_site_generator_status');
        $complete = $admarv_flag || $generator_status != 'running';
        wp_send_json_success(array('progress' => $progress, 'status' => $status, 'complete' => $complete));
    }
    

  
    private function save_record($status) {
        $end_time = microtime(true);
        $time_taken = $end_time - get_option('static_site_generator_start_time');
        $minutes = floor($time_taken / 60);
        $seconds = $time_taken % 60;
        $time_display = $minutes . ' 分 ' . round($seconds, 2) . ' 秒';

        $size = $this->get_directory_size(ABSPATH . 'static/') / 1048576; // Convert bytes to MB
        $file_counts = get_option('static_site_generator_file_counts', array());
        $total_files = array_sum($file_counts);

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
    }

    private function get_directory_size($dir) {
        $size = 0;
        foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir)) as $file) {
            $size += $file->getSize();
        }
        return round($size); // 四舍五入返回整数
    }
    private function log_message($message)
    {
        $timestamp = date("Y-m-d H:i:s");
        file_put_contents($this->log_file, "[$timestamp] $message\n", FILE_APPEND);
    }
}
