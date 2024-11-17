<?php
/*
Plugin Name: Admarv优化
Description: 图片优化，菜单预加载，页面美化
Version: 1.4.0
Author: Admarv
Author URI: https://admarv.com
*/

// 防止直接访问插件文件
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
// // 引入 Composer 的自动加载文件
// require __DIR__ . '/vendor/autoload.php';

require_once plugin_dir_path(__FILE__) . 'generate-static-site.php';
require_once plugin_dir_path(__FILE__) . 'lazyload.php';

// ------------------------imgToWebp------------------------
// 包含 imgToWebp.php 文件
require_once plugin_dir_path(__FILE__) . 'imgToWebp.php';

// 添加钩子以转换上传的图片为 WebP 格式
add_action('wp_handle_upload', 'convert_image_to_webp');

// 注册 MIME 类型
add_filter('mime_types', 'add_webp_mime_type');
add_filter('wp_check_filetype_and_ext', 'check_webp_filetype', 10, 4);

function add_webp_mime_type($mimes) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

function check_webp_filetype($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype($filename, $mimes);
    if (strpos($filename, '.webp') !== false) {
        $data['ext'] = 'webp';
        $data['type'] = 'image/webp';
    }
    return $data;
}
// ------------------------imgToWebp------------------------

// 在插件初始化时设置 Custom Updater
include_once plugin_dir_path(__FILE__) . 'updater.php';

function custom_plugin_updater_init() {
    $updater = new Custom_Updater(__FILE__);
    $updater->set_update_url('https://wp.resource.admarv.com/update/update-info.json');
    $updater->initialize();
}
add_action('init', 'custom_plugin_updater_init');

// 注册自定义配色方案
function admarv_color_scheme()
{
    wp_admin_css_color(
        'admarv_color_scheme', // 配色方案的唯一ID
        __('Admarv'), // 配色方案的名称
        plugin_dir_url(__FILE__) . 'color-scheme.css', // 配色方案的 CSS 文件路径
        array('#F4F6FE', '#000000', '#cccccc', '#2271b1') // 配色方案的主要颜色
    );
}
add_action('admin_init', 'admarv_color_scheme');


// 加载自定义JavaScript文件到页面
function admarv_scheme_js()
{
    $plugin_url = plugin_dir_url(__FILE__);

    if (is_admin()) { // 后台管理页面中运行
        wp_enqueue_script(
            'admarv-admin-scheme-js',
            plugin_dir_url(__FILE__) . 'admin.js',
            array('jquery'),
            null,
            true
        );
         // 将插件URL传递到JavaScript
         wp_localize_script('admarv-admin-scheme-js', 'admarvPlugin', array('url' => $plugin_url));
    } else { // 非后台管理页面中运行
        wp_enqueue_script(
            'admarv-frontend-scheme-js',
            plugin_dir_url(__FILE__) . 'front.js',
            array('jquery'),
            null,
            true
        );
    }
}
add_action('admin_enqueue_scripts', 'admarv_scheme_js'); // 用于后台
add_action('wp_enqueue_scripts', 'admarv_scheme_js'); // 用于前端


// 更改左侧菜单项文字
function custom_admin_menu_text()
{
    global $menu, $submenu;

    // 一级菜单项更改
    foreach ($menu as $key => $value) {
        if ($value[0] == '仪表盘') {
            $menu[$key][0] = '导航';
        }
        // elseif ( $value[0] == '文章' ) {
        //     $menu[$key][0] = '新闻';
        // } 
        elseif ($value[0] == '媒体') {
            $menu[$key][0] = '内容';
        }
    }

    // 二级菜单项更改
    if (isset($submenu['edit.php'])) {
        foreach ($submenu['edit.php'] as $key => $value) {
            if ($value[0] == '所有文章') {
                $submenu['edit.php'][$key][0] = '所有新闻';
            } elseif ($value[0] == '写文章') {
                $submenu['edit.php'][$key][0] = '写新闻';
            }
        }
    }
}
add_action('admin_menu', 'custom_admin_menu_text');


// 修改默认文章类型的名称标签和 "Add New" 标签
function modify_default_post_type_labels($args, $post_type)
{
    if ('post' === $post_type) { // 默认文章类型是 'post'
        $args['labels']['name'] = '新闻'; // 修改名称标签
        $args['labels']['add_new'] = '添加新闻'; // 修改 "Add New" 标签
    }
    return $args;
}
add_filter('register_post_type_args', 'modify_default_post_type_labels', 10, 2);

// 修改媒体库菜单内页的文字变量
function modify_media_library_title($translated_text, $text, $domain)
{
    if (is_admin() && 'Media Library' === $text && 'default' === $domain) {
        $translated_text = '内容';
    }
    return $translated_text;
}
add_filter('gettext', 'modify_media_library_title', 10, 3);




// 在管理后台菜单加载自定义的CSS样式（去除间距）
function custom_admin_menu_css() {
    echo '<style>
        /* 隐藏空的li标签 */
        #adminmenu li:empty {
            display: none;
        }
        
        /* 隐藏只包含空div.separator的li标签 */
        #adminmenu li > div.separator:empty {
            display: none;
        }

        /* 隐藏包含空div.separator的wp-menu-separator类的li标签 */
        #adminmenu li.wp-menu-separator {
            display: none;
        }

        /* 如果需要调整菜单项之间的间距，可以修改下面的代码 */
        #adminmenu li.menu-top {
            margin-bottom: 0 !important; /* 设置菜单项之间的间距 */
        }
    </style>';
}
add_action('admin_head', 'custom_admin_menu_css');


// 添加菜单给编辑角色
function grant_editor_manage_woocommerce() {
    // 获取编辑角色
    $editor_role = get_role('editor');
    
    if ($editor_role) {
        // 添加与产品相关的权限
        $editor_role->add_cap('edit_product'); // 编辑单个产品
        $editor_role->add_cap('read_product'); // 查看单个产品
        $editor_role->add_cap('delete_product'); // 删除单个产品
        $editor_role->add_cap('edit_products'); // 编辑多个产品
        $editor_role->add_cap('edit_others_products'); // 编辑他人产品
        $editor_role->add_cap('publish_products'); // 发布产品
        $editor_role->add_cap('read_private_products'); // 查看私密产品
        $editor_role->add_cap('delete_products'); // 删除多个产品
        $editor_role->add_cap('delete_private_products'); // 删除私密产品
        $editor_role->add_cap('delete_published_products'); // 删除已发布的产品
        $editor_role->add_cap('delete_others_products'); // 删除他人产品
        $editor_role->add_cap('edit_private_products'); // 编辑私密产品
        $editor_role->add_cap('edit_published_products'); // 编辑已发布的产品
        $editor_role->add_cap('manage_product_terms'); // 管理产品分类
    }
}
add_action('admin_init', 'grant_editor_manage_woocommerce');


// 添加评论、个人资料、工具和仪表盘菜单只对管理员可见的功能
function custom_admin_menu_visibility()
{
    // 检查当前用户是否是管理员
    if (current_user_can('administrator')) {
        return; // 如果是管理员，直接返回，保持菜单可见
    }

    // 如果不是管理员，移除评论、个人资料、工具和仪表盘菜单
    remove_menu_page('edit-comments.php');
    remove_menu_page('profile.php');
    remove_menu_page('tools.php');
    remove_menu_page('index.php'); // 仪表盘菜单的标识是 'index.php'
}
add_action('admin_menu', 'custom_admin_menu_visibility');





// 添加外观菜单对编辑角色可见的功能
// function custom_editor_access_to_appearance_menu()
// {
//     // 检查当前用户角色是否是编辑
//     $user = wp_get_current_user();
//     if (in_array('editor', (array) $user->roles)) {
//         // 添加编辑角色对外观菜单的访问权限
//         $capability = 'edit_theme_options'; // 外观菜单的权限要求
//         add_menu_page('Appearance', 'Appearance', $capability, 'themes.php', '', 'dashicons-admin-appearance', 60);
//     }
// }
// add_action('admin_menu', 'custom_editor_access_to_appearance_menu');


// 在管理员初始化时执行
add_action('admin_init', 'wp_custom_plugin_add_theme_caps');

function wp_custom_plugin_add_theme_caps() {
    // 获取编辑角色
    $role = get_role('editor');

    if ($role) {
        // 添加编辑主题的能力
        $role->add_cap('edit_theme_options');
    }
}

// 删除编辑角色的 edit_theme_options 能力，以防插件被停用
register_deactivation_hook(__FILE__, 'wp_custom_plugin_remove_theme_caps');

function wp_custom_plugin_remove_theme_caps() {
    // 获取编辑角色
    $role = get_role('editor');

    if ($role) {
        // 移除编辑主题的能力
        $role->remove_cap('edit_theme_options');
    }
}


// 移除WordPress后台页面标题中的“— WordPress”
function remove_wp_admin_title($admin_title, $title)
{
    if (is_admin()) {
        return $title;
    }
    return $admin_title;
}
add_filter('admin_title', 'remove_wp_admin_title', 10, 2);




// 检测把wp管理后台的所有的页面里，只要是出现wordpress(无论大小写)只要出现，就替换成Admarv。注意是wp管理后台所有页面。
// 如果是https或者http的链接里出现admarv就不要替换了
function replace_wordpress_text($text)
{
    // 使用正则表达式查找并保留包含 http 或 https 链接的部分
    $pattern = '/(https?:\/\/[^\s]+)/i';
    preg_match_all($pattern, $text, $matches);

    // 遍历找到的所有链接并从文本中移除以防止替换
    foreach ($matches[0] as $match) {
        $text = str_replace($match, '{{LINK}}', $text);
    }

    // 替换 "wordpress" 为 "Admarv"
    $text = str_ireplace('wordpress', 'Admarv', $text);

    // 恢复原来的链接
    foreach ($matches[0] as $match) {
        $text = preg_replace('/{{LINK}}/', $match, $text, 1);
    }

    return $text;
}

// Apply the replacement function to the admin pages
function apply_text_replacement_to_admin_pages()
{
    ob_start('replace_wordpress_text');
}

// Hook the function to all admin pages
add_action('admin_init', 'apply_text_replacement_to_admin_pages');




// 给登录页面的body添加一个图片背景
function custom_login_background()
{
    $plugin_url = plugin_dir_url(__FILE__);
?>
    <style type="text/css">
        body.login {
            background-image: url('<?php echo content_url('uploads/login/logo-bg.jpeg'); ?>');
            background-size: cover;
            background-position: center;
        }

        body.login #login {
            position: absolute;
            top: 39%;
            right: 10%;
            transform: translateY(-50%);
        }

        h1 {
            display: flex;
            justify-content: center;
        }

        body.login #login h1 a {
            width: 184px;
            margin: 0;
            background-size: 100%;
        }

        body.login input[type="text"],
        body.login input[type="password"] {
            padding-left: 18px;
            border-radius: 20px;
        }

        body.login input[type="text"]:focus {
            border:none;
            /* border-color: red; */
            outline: red;
            outline-color: red;
        }

        body.login input[type="submit"] {
            background-color: #1677ff;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        body.login input[type="submit"]:hover {
            background-color: #125bbb;
        }
        p#nav,
        #language-switcher,
        #backtoblog
        {
            display: none;
        }
        .login form#loginform {
            border: none;
            border-radius: 15px;
        }
        .login h1 a{
            background-image: url('<?php echo $plugin_url . 'images/admarv.png'; ?>') !important;
        }

        @media (max-width: 768px) {
            body.login #login {
                right: 5%;
            }
        }
    </style>
<?php
}
add_action('login_enqueue_scripts', 'custom_login_background');



