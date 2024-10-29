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
define( 'DB_NAME', 'keychain' );

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
define( 'AUTH_KEY',         'g7va,t_m2sTMu%ypA;i:+!>cYP{:3)}J$[NZ]70)vKZKJ]%ms6 d&eX3oe^Ku@`;' );
define( 'SECURE_AUTH_KEY',  '{Vd0FqQpYB}(>Q$w rHC3iiL[=#/s6<Y0WEHit{dPx~;#Or69cgjxA28Vw(R(0d`' );
define( 'LOGGED_IN_KEY',    '#YsuOa}T7@V0!oUg74L @Cp#$;(WCw{!{NxnjC EfbIeB?TL[1L.,d(ksdZ~E&~O' );
define( 'NONCE_KEY',        'NDr-iXb4-~F6 YPQW,Yh?6)E-/ sHT%B%96O*~l1;$:-3J)?P-+5h-/TSdBBY 0p' );
define( 'AUTH_SALT',        'UKzY1h?=f6+L1C-FVOvt AmdDXHbYjRHFHW,3{fO{pt%4BM,4V2=C>4,tDw>Jxy<' );
define( 'SECURE_AUTH_SALT', 'x,?%|3O.`CQU@__>rU8-PDtji-Sp%;kNI[Zoy`wgi].ouxst1BB.O~S(tBP|0LKZ' );
define( 'LOGGED_IN_SALT',   '%04yRo$BNAX,[ZvW@|5,>K1jue_P=F.]}N02/,dCeKx;dUdIFZF[5$QB>QYVzsON' );
define( 'NONCE_SALT',       'l-xGU~BP,*&K+@t yQjnRxP>0VZQEp(o{ :# .XfGu~]WbNj< t{iEC3`phz^7ed' );

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
