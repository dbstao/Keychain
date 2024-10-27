<?php 

function lifestyle_store_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'lifestyle-store-theme-settings', // Menu slug
        'lifestyle_store_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'lifestyle_store_add_admin_menu' );

function lifestyle_store_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'lifestyle-store' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'lifestyle_store_settings_group' );
            do_settings_sections( 'lifestyle-store-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function lifestyle_store_register_settings() {
    register_setting( 'lifestyle_store_settings_group', 'lifestyle_store_enable_animations' );

    add_settings_section(
        'lifestyle_store_settings_section',
        __( 'Animation Settings', 'lifestyle-store' ),
        null,
        'lifestyle-store-theme-settings'
    );

    add_settings_field(
        'lifestyle_store_enable_animations',
        __( 'Enable Animations', 'lifestyle-store' ),
        'lifestyle_store_enable_animations_callback',
        'lifestyle-store-theme-settings',
        'lifestyle_store_settings_section'
    );
}
add_action( 'admin_init', 'lifestyle_store_register_settings' );

function lifestyle_store_enable_animations_callback() {
    $checked = get_option( 'lifestyle_store_enable_animations', true );
    ?>
    <input type="checkbox" name="lifestyle_store_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

