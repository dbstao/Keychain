<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Admarv_Generator_Admin {
    private $hook_suffix;

    public function __construct() {
        $unique_id = md5(ABSPATH); // 使用每个WordPress实例唯一的ID
        $this->hook_suffix = 'static_site_generator_task_' . $unique_id;
        add_action('admin_menu', array($this, 'add_admin_menu'),10);
        add_action('admin_init', array($this, 'handle_form_submission'));
        add_action('wp_ajax_clear_static_cache', array($this, 'clear_static_cache'));
        add_action('wp_ajax_get_static_site_log', array($this, 'get_static_site_log'));
        add_action($this->hook_suffix, array($this, 'generate_static_site'));
    }

    public function add_admin_menu() {
        add_menu_page(
            '站点加速器',
            '站点加速器',
            'manage_options',
            'static-site-generator',
            array($this, 'settings_page')
        );
    }

    public function settings_page() {
        $task_status = get_option('static_site_generator_status');
        $has_cache = $this->check_cache_exists();
        $records = get_option('static_site_generator_records', array());
        ?>
        <div class="wrap">
            <h1>站点加速器</h1>
            <form method="post" action="">
                <?php wp_nonce_field('generate_static_site', 'static_site_generator_nonce'); ?>
                <?php submit_button('开始加速', 'primary', 'generate_static_site_submit'); ?>
                </form>
            <?php if ($task_status == 'running'): ?>
                <button id="stop-button" class="button button-secondary">停止加速</button>
                <div id="progress-bar" style="width: 100%; background-color: #f3f3f3; border: 1px solid #ccc;">
                    <div id="progress" style="width: 0%; height: 30px; background-color: #4caf50;"></div>
                </div>
                <div id="status"></div>
            <?php endif; ?>
            <h2>缓存管理</h2>
            <button id="clear-cache-button" class="button button-secondary" <?php echo $has_cache ? '' : 'disabled'; ?>>清除缓存</button>
            <h2>生成记录</h2>
            <table class="widefat" id="records-table">
                <thead>
                    <tr>
                        <th>日期</th>
                        <th>用时</th>
                        <th>文件数量</th>
                        <th>目录大小 (MB)</th>
                        <th>状态</th>
                    </tr>
                </thead>
                <tbody id="records-body">
                    <?php
                    if (!empty($records)) {
                        foreach (array_reverse($records) as $record) {
                            echo '<tr>';
                            echo '<td>' . esc_html($record['date']) . '</td>';
                            echo '<td>' . esc_html($record['time']) . '</td>';
                            echo '<td>' . esc_html($record['files']) . '</td>';
                            echo '<td>' . esc_html($record['size']) . '</td>';
                            $status = isset($record['status']) ? $record['status'] : '未知';
                            echo '<td>' . esc_html($status) . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="5">暂无记录</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
            <div id="pagination" class="tablenav bottom">
                <div class="tablenav-pages">
                    <span class="pagination-links">
                        <a class="first-page" href="javascript:void(0);" title="前往首页">&laquo;</a>
                        <a class="prev-page" href="javascript:void(0);" title="前往上一页">&lsaquo;</a>
                        <span class="paging-input">
                            <input class="current-page" type="text" size="1" value="1" title="当前页码"> 
                            共 <span class="total-pages"></span> 页
                        </span>
                        <a class="next-page" href="javascript:void(0);" title="前往下一页">&rsaquo;</a>
                        <a class="last-page" href="javascript:void(0);" title="前往末页">&raquo;</a>
                    </span>
                </div>
            </div>
            <h2>当前日志</h2>
            <pre id="log-content" style="height: 500px; overflow-y: auto;"></pre>
        </div>
        <script>
            jQuery(document).ready(function($) {
                $('#stop-button').on('click', function() {
                    $.post(
                        '<?php echo admin_url('admin-ajax.php'); ?>',
                        {
                            action: 'stop_static_site_generation',
                            _ajax_nonce: '<?php echo wp_create_nonce('stop_static_site_generation'); ?>'
                        },
                        function(response) {
                            if (response.success) {
                                $('#status').text('加速站点已停止。');
                                $('#progress-bar').hide();
                                $('#stop-button').hide();
                            } else {
                                $('#status').text('停止生成失败。');
                            }
                        }
                    );
                });

                function updateProgress() {
                  
                    $.post(
                        '<?php echo admin_url('admin-ajax.php'); ?>',
                        {
                            action: 'get_static_site_generation_status',
                            _ajax_nonce: '<?php echo wp_create_nonce('get_static_site_generation_status'); ?>'
                        },
                        function(response) {
                            if (response.success) {
                                console.error('updateProgress',response.data.complete);
                                $('#progress').css('width', response.data.progress + '%');
                                $('#status').html(response.data.status);
                                if (!response.data.complete) {
                                    setTimeout(updateProgress, 1000);
                                } else {
                                    debugger
                                    $('#progress-bar').hide();// 隐藏进度条
                                    $('#stop-button').hide();// 隐藏停止按钮
                                }
                            }
                        }
                    );
                }

                function updateLog() {
                    $.post(
                        '<?php echo admin_url('admin-ajax.php'); ?>',
                        {
                            action: 'get_static_site_log',
                            _ajax_nonce: '<?php echo wp_create_nonce('get_static_site_log'); ?>'
                        },
                        function(response) {
                            if (response.success) {
                                var logContent = response.data.log;
                                var formattedLogContent = '';
                                var logLines = logContent.split('\n');
                                logLines.forEach(function(line) {
                                    if (line.includes('失败') || line.includes('错误')) {
                                        formattedLogContent += '<span style="color: red;">' + line + '</span><br>';
                                    } else {
                                        formattedLogContent += line + '<br>';
                                    }
                                });
                                $('#log-content').html(formattedLogContent);
                            }
                        }
                    );
                }

                if ('<?php echo $task_status; ?>' == 'running') {
                    updateProgress();
                    setInterval(updateLog, 3000); // 每秒更新日志
                } else {
                    updateLog(); // 页面加载时也更新日志
                }

                $('#clear-cache-button').on('click', function() {
                    $.post(
                        '<?php echo admin_url('admin-ajax.php'); ?>',
                        {
                            action: 'clear_static_cache',
                            _ajax_nonce: '<?php echo wp_create_nonce('clear_static_cache'); ?>'
                        },
                        function(response) {
                            if (response.success) {
                                alert('缓存已成功清除。');
                                location.reload(); // 重新加载页面以更新按钮状态
                            } else {
                                alert('缓存清除失败。');
                            }
                        }
                    );
                });

                function paginateTable() {
                    var currentPage = parseInt($('.current-page').val());
                    var totalPages = Math.ceil($('#records-body tr').length / 10);
                    $('.total-pages').text(totalPages);

                    $('#records-body tr').each(function(index) {
                        $(this).hide();
                        if (index >= (currentPage - 1) * 10 && index < currentPage * 10) {
                            $(this).show();
                        }
                    });

                    $('.first-page').on('click', function() {
                        $('.current-page').val(1);
                        paginateTable();
                    });

                    $('.prev-page').on('click', function() {
                        if (currentPage > 1) {
                            $('.current-page').val(currentPage - 1);
                            paginateTable();
                        }
                    });

                    $('.next-page').on('click', function() {
                        if (currentPage < totalPages) {
                            $('.current-page').val(currentPage + 1);
                            paginateTable();
                        }
                    });

                    $('.last-page').on('click', function() {
                        $('.current-page').val(totalPages);
                        paginateTable();
                    });

                    $('.current-page').on('change', function() {
                        var newPage = parseInt($(this).val());
                        if (newPage >= 1 && newPage <= totalPages) {
                            paginateTable();
                        }
                    });
                }

                paginateTable();
            });
        </script>
        <?php
    }

    public function handle_form_submission() {
        if (isset($_POST['generate_static_site_submit']) && check_admin_referer('generate_static_site', 'static_site_generator_nonce')) {
            $this->log_message('提交了生成加速站点的请求');
            $hook_suffix = $this->hook_suffix;

            // 取消当前调度的任务
            if (wp_next_scheduled($hook_suffix)) {
                $this->log_message('取消已有的生成任务');
                wp_clear_scheduled_hook($hook_suffix);
            }

            // 调度新的任务
            if (!wp_next_scheduled($hook_suffix)) {
                wp_schedule_single_event(time(), $hook_suffix);
                $this->log_message('生成任务已调度');
            } else {
                $this->log_message('生成任务已存在');
            }
            // set_transient('admarv_flag', '0', 3600); // 初始化标志为false

            update_option('static_site_generator_status', 'running');
            update_option('static_site_generator_start_time', microtime(true)); // 初始化开始时间
            // update_option('admarv_flag', 0);
            // $aaa = get_option('admarv_flag');
            $this->set_flag(0);

        }
    }
    private function set_flag($value) {
        // 将标志状态保存到本地文件
        $file = ABSPATH . 'admarv_flag.txt';
        file_put_contents($file, $value);
    }

    private function log_message($message) {
        $log_file = ABSPATH . 'wp-content/uploads/static_site_logs/static_site_generator_' . md5(ABSPATH) . '.log';
        $timestamp = date("Y-m-d H:i:s");
        if (!file_exists($log_file)) {
            touch($log_file);
            chmod($log_file, 0666);
        }
        file_put_contents($log_file, "[$timestamp] $message\n", FILE_APPEND);
    }

    public function check_cache_exists() {
        $cache_dir = ABSPATH . 'wp-content/cache/static_site/';
        if (file_exists($cache_dir) && is_dir($cache_dir)) {
            $files = glob($cache_dir . '*');
            return !empty($files);
        }
        return false;
    }

    public function clear_static_cache() {
        check_ajax_referer('clear_static_cache');
        $cache_dir = ABSPATH . 'wp-content/cache/static_site/';
        if (file_exists($cache_dir) && is_dir($cache_dir)) {
            $files = glob($cache_dir . '*'); // 获取缓存目录中的所有文件
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file); // 删除文件
                }
            }
        }
        wp_send_json_success();
    }

    public function get_static_site_log() {
        check_ajax_referer('get_static_site_log');
        $log_file = ABSPATH . 'wp-content/uploads/static_site_logs/static_site_generator_' . md5(ABSPATH) . '.log';
        $log_content = file_exists($log_file) ? file_get_contents($log_file) : '';
        wp_send_json_success(array('log' => $log_content));
    }
}
?>
