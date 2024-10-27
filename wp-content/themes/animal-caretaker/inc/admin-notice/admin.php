<?php 
/*******************************************************************************
 *  Get Started Notice
 *******************************************************************************/

add_action( 'wp_ajax_animal_caretaker_dismissed_notice_handler', 'animal_caretaker_ajax_notice_handler' );

/** * AJAX handler to record dismissible notice status. */
function animal_caretaker_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function animal_caretaker_admin_notice_deprecated_hook() {
        $current_screen = get_current_screen();
        if ($current_screen->id !== 'appearance_page_animal-caretaker-guide-page') {
        if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>
            <div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
                <div class="animal-caretaker-getting-started-notice clearfix">
                    <div class="animal-caretaker-theme-notice-content">
                        <h2 class="animal-caretaker-notice-h2">
                            <?php
                            echo esc_html__( 'Let\'s Create Your website With', 'animal-caretaker' ) . ' <strong>' . esc_html( wp_get_theme()->get('Name') ) . '</strong>';
                            ?>
                        </h2>
                        <span class="st-notification-wrapper">
                            <span class="st-notification-column-wrapper">
                                <span class="st-notification-column">
                                    <h2><?php echo esc_html('Feature Rich WordPress Theme','animal-caretaker'); ?></h2>
                                    <ul class="st-notification-column-list">
                                        <li><?php echo esc_html('Live Customize','animal-caretaker'); ?></li>
                                        <li><?php echo esc_html('Detailed theme Options','animal-caretaker'); ?></li>
                                        <li><?php echo esc_html('Cleanly Coded','animal-caretaker'); ?></li>
                                        <li><?php echo esc_html('Search Engine Friendly','animal-caretaker'); ?></li>
                                    </ul>
                                    <a href="<?php echo esc_url( admin_url( 'themes.php?page=animal-caretaker-guide-page' ) ); ?>" target="_blank" class="button-primary button"><?php echo esc_html('Theme Info','animal-caretaker'); ?></a>
                                </span>
                                <span class="st-notification-column">
                                    <h2><?php echo esc_html('Customize Your Website','animal-caretaker'); ?></h2>
                                    <ul>
                                        <li><a href="<?php echo esc_url( admin_url( 'customize.php' ) ) ?>" target="_blank" class="button button-primary"><?php echo esc_html('Customize','animal-caretaker'); ?></a></li>
                                        <li><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ) ?>" class="button button-primary"><?php echo esc_html('Add Widgets','animal-caretaker'); ?></a></li>
                                        <li><a href="<?php echo esc_url( ANIMAL_CARETAKER_SUPPORT_FREE ); ?>" target="_blank" class="button button-primary"><?php echo esc_html('Get Support','animal-caretaker'); ?></a> </li>
                                    </ul>
                                </span>
                                <span class="st-notification-column">
                                    <h2><?php echo esc_html('Get More Options','animal-caretaker'); ?></h2>
                                    <ul>
                                        <li><a href="<?php echo esc_url( ANIMAL_CARETAKER_DEMO_PRO ); ?>" target="_blank" class="button button-primary"><?php echo esc_html('View Live Demo','animal-caretaker'); ?></a></li>
                                        <li><a href="<?php echo esc_url( ANIMAL_CARETAKER_BUY_NOW ); ?>" class="button button-primary"><?php echo esc_html('Purchase Now','animal-caretaker'); ?></a></li>
                                        <li><a href="<?php echo esc_url( ANIMAL_CARETAKER_DOCS_FREE ); ?>" target="_blank" class="button button-primary"><?php echo esc_html('Free Documentation','animal-caretaker'); ?></a> </li>
                                    </ul>
                                </span>
                            </span>
                        </span>

                        <style>
                        </style>
                    </div>
                </div>
            </div>
        <?php }
    }
}

add_action( 'admin_notices', 'animal_caretaker_admin_notice_deprecated_hook' );

function animal_caretaker_switch_theme_function () {
    delete_option('dismissed-get_started', FALSE );
}

add_action('after_switch_theme', 'animal_caretaker_switch_theme_function');