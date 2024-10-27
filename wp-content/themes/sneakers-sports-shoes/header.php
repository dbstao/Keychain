<?php
/**
 * Header file for the Sneakers Sports Shoes WordPress theme.
 * @package Sneakers Sports Shoes
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if( function_exists('wp_body_open') ){
    wp_body_open();
}
$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options(); ?>

<div id="sneakers-sports-shoes-page" class="sneakers-sports-shoes-hfeed sneakers-sports-shoes-site">
<a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e('Skip to the content', 'sneakers-sports-shoes'); ?></a>

<?php
    get_template_part( 'template-parts/header/header', 'layout' );
?>

<div id="content" class="site-content">