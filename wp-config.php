<?php
/**
 * WordPress 基础配置文件
 *
 * 这个文件被安装程序用于自动生成 wp-config.php 配置文件
 * 您不必使用网站，可以将这个文件复制到「wp-config.php」并填写这些值。
 *
 * 本文件包含以下配置选项：
 *
 * * 数据库设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** 数据库设置 - 您可以从您的主机获取这些信息 ** //
/** WordPress 数据库名称 */
define( 'DB_NAME', 'keyChain' );

/** 数据库用户名 */
define( 'DB_USER', 'root' );

/** 数据库密码 */
define( 'DB_PASSWORD', '135231' );

/** 数据库主机 */
define( 'DB_HOST', 'localhost' );

/** 创建表时使用的数据库字符集。 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库排序规则类型。如不确定，请勿更改。 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份验证唯一密钥与盐。
 *
 * 将这些更改为任意独一无二的字符串！您可以使用
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org 密钥服务}
 * 生成这些。
 *
 * 您可以随时更改这些内容以使所有现有 cookies 失效。
 * 这将强制所有用户必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CB|n-$ X(;DxLB&>$lXm_x82g=zL&1P`VrxDjIGs7+ERvx@&PB]YKk05YEDYJF-~' );
define( 'SECURE_AUTH_KEY',  '1@pv@S 5Typxa0eOG4d1Imxf&|r+-{UlsD6?8B_yx} uQ[F|HrMYN`0j`x,EAJb2' );
define( 'LOGGED_IN_KEY',    '1!1PuS#wHF[0/b`a~qj]FcQQCrsdt_t1bv7p]y;7`Ek3S:mmv`#ASVZm<[NKt-1=' );
define( 'NONCE_KEY',        '2;WzN+ogaDx{;D05`tnS[s >_+pVk(`LG()dpi_:6y/o3*MiP/wcsd<!UVLdMh}F' );
define( 'AUTH_SALT',        '4e4DCs=IE4MIr7qo3rUwN>d6hPmfiL$:Ro`ilRjun<!2$HIcB]Mgx6JggG7fA#bt' );
define( 'SECURE_AUTH_SALT', 'ZX>MmsFx!&zgi=B|u-^},~k| e]bk!CPQ4LpP%~%)L,=]DyNve]H}E?JHw(/-Nzb' );
define( 'LOGGED_IN_SALT',   'kr[_*2u]_Ua~ps`4_f;R,na(H|gQOmDX4]{?7cn?HL,h3c]]UD,;1bhM#O*s# .a' );
define( 'NONCE_SALT',       '+MATFJ:cy^P?Q<;+Hd*..4WiqnHgJ4?GMPND:;%bBV9_!wXv*Jt BKq+LuwsMY2+' );

/**#@-*/

/**
 * WordPress 数据表前缀。
 *
 * 如果您为每个安装分配一个唯一前缀，您可以在一个数据库中拥有多个安装。
 * 请只使用数字、字母和下划线！
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress 调试模式。
 *
 * 将此值更改为 true 以启用开发过程中的通知显示。
 * 强烈建议插件和主题开发人员在其开发环境中使用 WP_DEBUG。
 *
 * 有关可用于调试的其他常量的信息，请访问文档。
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/**
 * 简体中文专属：ICP 备案号显示
 *
 * 在设置 → 常规中设置你的 ICP 备案号。
 * 可调用简码 [cn_icp] 或函数 cn_icp() 显示。
 *
 * @since 6.5.0
 * @link https://cn.wordpress.org/support/i10n-features/
 */
define( 'CN_ICP', true );

/**
 * 简体中文专属：公安备案号显示
 *
 * 在设置 → 常规中设置你的公安备案号。
 * 可调用简码 [cn_ga] 或函数 cn_ga() 显示。
 *
 * @since 6.5.0
 * @link https://cn.wordpress.org/support/i10n-features/
 */
define( 'CN_GA', true );

/* 在这行和「停止编辑」行之间添加任何自定义值。 */



/* 就这样，停止编辑！祝您使用愉快。 */

/** WordPress 目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** 设置 WordPress 变量和包含的文件。 */
require_once ABSPATH . 'wp-settings.php';
