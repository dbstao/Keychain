<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

include_once( dirname( __FILE__ ) . '/buckydrop.php' );
include_once( dirname( __FILE__ ) . '/includes/class-buckydrop-install.php' );

BuckydropInstall::plugin_uninstalled();
