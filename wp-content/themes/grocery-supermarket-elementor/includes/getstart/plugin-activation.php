<?php
if ( ! class_exists( 'Grocery_Supermarket_Elementor_Plugin_Activation_WPElemento_Importer' ) ) {
    /**
     * Grocery_Supermarket_Elementor_Plugin_Activation_WPElemento_Importer initial setup
     *
     * @since 1.6.2
     */

    class Grocery_Supermarket_Elementor_Plugin_Activation_WPElemento_Importer {

        private static $grocery_supermarket_elementor_instance;
        public $grocery_supermarket_elementor_action_count;
        public $grocery_supermarket_elementor_recommended_actions;

        /** Initiator **/
        public static function get_instance() {
          if ( ! isset( self::$grocery_supermarket_elementor_instance) ) {
            self::$grocery_supermarket_elementor_instance = new self();
          }
          return self::$grocery_supermarket_elementor_instance;
        }

        /*  Constructor */
        public function __construct() {

            add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

            // ---------- wpelementoimpoter Plugin Activation -------
            add_filter( 'grocery_supermarket_elementor_recommended_plugins', array($this, 'grocery_supermarket_elementor_recommended_elemento_importer_plugins_array') );

            $grocery_supermarket_elementor_actions                   = $this->grocery_supermarket_elementor_get_recommended_actions();
            $this->grocery_supermarket_elementor_action_count        = $grocery_supermarket_elementor_actions['count'];
            $this->grocery_supermarket_elementor_recommended_actions = $grocery_supermarket_elementor_actions['actions'];

            add_action( 'wp_ajax_create_pattern_setup_builder', array( $this, 'create_pattern_setup_builder' ) );
        }

        public function grocery_supermarket_elementor_recommended_elemento_importer_plugins_array($grocery_supermarket_elementor_plugins){
            $grocery_supermarket_elementor_plugins[] = array(
                    'name'     => esc_html__('WPElemento Importer', 'grocery-supermarket-elementor'),
                    'slug'     =>  'wpelemento-importer',
                    'function' => 'WPElemento_Importer_ThemeWhizzie',
                    'desc'     => esc_html__('We highly recommend installing the WPElemento Importer plugin for importing the demo content with Elementor.', 'grocery-supermarket-elementor'),               
            );
            return $grocery_supermarket_elementor_plugins;
        }

        public function enqueue_scripts() {
            wp_enqueue_script('updates');      
            wp_register_script( 'grocery-supermarket-elementor-plugin-activation-script', esc_url(get_template_directory_uri()) . '/includes/getstart/js/plugin-activation.js', array('jquery') );
            wp_localize_script('grocery-supermarket-elementor-plugin-activation-script', 'grocery_supermarket_elementor_plugin_activate_plugin',
                array(
                    'installing' => esc_html__('Installing', 'grocery-supermarket-elementor'),
                    'activating' => esc_html__('Activating', 'grocery-supermarket-elementor'),
                    'error' => esc_html__('Error', 'grocery-supermarket-elementor'),
                    'ajax_url' => esc_url(admin_url('admin-ajax.php')),
                    'wpelementoimpoter_admin_url' => esc_url(admin_url('admin.php?page=wpelemento-importer-tgmpa-install-plugins')),
                    'addon_admin_url' => esc_url(admin_url('admin.php?page=wpelementoimporter-wizard'))
                )
            );
            wp_enqueue_script( 'grocery-supermarket-elementor-plugin-activation-script' );

        }

        // --------- Plugin Actions ---------
        public function grocery_supermarket_elementor_get_recommended_actions() {

            $grocery_supermarket_elementor_act_count  = 0;
            $grocery_supermarket_elementor_actions_todo = get_option( 'recommending_actions', array());

            $grocery_supermarket_elementor_plugins = $this->grocery_supermarket_elementor_get_recommended_plugins();

            if ($grocery_supermarket_elementor_plugins) {
                foreach ($grocery_supermarket_elementor_plugins as $grocery_supermarket_elementor_key => $grocery_supermarket_elementor_plugin) {
                    $grocery_supermarket_elementor_action = array();
                    if (!isset($grocery_supermarket_elementor_plugin['slug'])) {
                        continue;
                    }

                    $grocery_supermarket_elementor_action['id']   = 'install_' . $grocery_supermarket_elementor_plugin['slug'];
                    $grocery_supermarket_elementor_action['desc'] = '';
                    if (isset($grocery_supermarket_elementor_plugin['desc'])) {
                        $grocery_supermarket_elementor_action['desc'] = $grocery_supermarket_elementor_plugin['desc'];
                    }

                    $grocery_supermarket_elementor_action['name'] = '';
                    if (isset($grocery_supermarket_elementor_plugin['name'])) {
                        $grocery_supermarket_elementor_action['title'] = $grocery_supermarket_elementor_plugin['name'];
                    }

                    $grocery_supermarket_elementor_link_and_is_done  = $this->grocery_supermarket_elementor_get_plugin_buttion($grocery_supermarket_elementor_plugin['slug'], $grocery_supermarket_elementor_plugin['name'], $grocery_supermarket_elementor_plugin['function']);
                    $grocery_supermarket_elementor_action['link']    = $grocery_supermarket_elementor_link_and_is_done['button'];
                    $grocery_supermarket_elementor_action['is_done'] = $grocery_supermarket_elementor_link_and_is_done['done'];
                    if (!$grocery_supermarket_elementor_action['is_done'] && (!isset($grocery_supermarket_elementor_actions_todo[$grocery_supermarket_elementor_action['id']]) || !$grocery_supermarket_elementor_actions_todo[$grocery_supermarket_elementor_action['id']])) {
                        $grocery_supermarket_elementor_act_count++;
                    }
                    $grocery_supermarket_elementor_recommended_actions[] = $grocery_supermarket_elementor_action;
                    $grocery_supermarket_elementor_actions_todo[]        = array('id' => $grocery_supermarket_elementor_action['id'], 'watch' => true);
                }
                return array('count' => $grocery_supermarket_elementor_act_count, 'actions' => $grocery_supermarket_elementor_recommended_actions);
            }

        }

        public function grocery_supermarket_elementor_get_recommended_plugins() {

            $grocery_supermarket_elementor_plugins = apply_filters('grocery_supermarket_elementor_recommended_plugins', array());
            return $grocery_supermarket_elementor_plugins;
        }

        public function grocery_supermarket_elementor_get_plugin_buttion($slug, $name, $function) {
                $grocery_supermarket_elementor_is_done      = false;
                $grocery_supermarket_elementor_button_html  = '';
                $grocery_supermarket_elementor_is_installed = $this->is_plugin_installed($slug);
                $grocery_supermarket_elementor_plugin_path  = $this->get_plugin_basename_from_slug($slug);
                $grocery_supermarket_elementor_is_activeted = (class_exists($function)) ? true : false;
                if (!$grocery_supermarket_elementor_is_installed) {
                    $grocery_supermarket_elementor_plugin_install_url = add_query_arg(
                        array(
                            'action' => 'install-plugin',
                            'plugin' => $slug,
                        ),
                        self_admin_url('update.php')
                    );
                    $grocery_supermarket_elementor_plugin_install_url = wp_nonce_url($grocery_supermarket_elementor_plugin_install_url, 'install-plugin_' . esc_attr($slug));
                    $grocery_supermarket_elementor_button_html        = sprintf('<a class="grocery-supermarket-elementor-plugin-install install-now button-secondary button" data-slug="%1$s" href="%2$s" aria-label="%3$s" data-name="%4$s">%5$s</a>',
                        esc_attr($slug),
                        esc_url($grocery_supermarket_elementor_plugin_install_url),
                        sprintf(esc_html__('Install %s Now', 'grocery-supermarket-elementor'), esc_html($name)),
                        esc_html($name),
                        esc_html__('Install & Activate', 'grocery-supermarket-elementor')
                    );
                } elseif ($grocery_supermarket_elementor_is_installed && !$grocery_supermarket_elementor_is_activeted) {

                    $grocery_supermarket_elementor_plugin_activate_link = add_query_arg(
                        array(
                            'action'        => 'activate',
                            'plugin'        => rawurlencode($grocery_supermarket_elementor_plugin_path),
                            'plugin_status' => 'all',
                            'paged'         => '1',
                            '_wpnonce'      => wp_create_nonce('activate-plugin_' . $grocery_supermarket_elementor_plugin_path),
                        ), self_admin_url('plugins.php')
                    );

                    $grocery_supermarket_elementor_button_html = sprintf('<a class="grocery-supermarket-elementor-plugin-activate activate-now button-primary button" data-slug="%1$s" href="%2$s" aria-label="%3$s" data-name="%4$s">%5$s</a>',
                        esc_attr($slug),
                        esc_url($grocery_supermarket_elementor_plugin_activate_link),
                        sprintf(esc_html__('Activate %s Now', 'grocery-supermarket-elementor'), esc_html($name)),
                        esc_html($name),
                        esc_html__('Activate', 'grocery-supermarket-elementor')
                    );
                } elseif ($grocery_supermarket_elementor_is_activeted) {
                    $grocery_supermarket_elementor_button_html = sprintf('<div class="action-link button disabled"><span class="dashicons dashicons-yes"></span> %s</div>', esc_html__('Active', 'grocery-supermarket-elementor'));
                    $grocery_supermarket_elementor_is_done     = true;
                }

                return array('done' => $grocery_supermarket_elementor_is_done, 'button' => $grocery_supermarket_elementor_button_html);
            }
        public function is_plugin_installed($slug) {
            $grocery_supermarket_elementor_installed_plugins = $this->get_installed_plugins(); // Retrieve a list of all installed plugins (WP cached).
            $grocery_supermarket_elementor_file_path         = $this->get_plugin_basename_from_slug($slug);
            return (!empty($grocery_supermarket_elementor_installed_plugins[$grocery_supermarket_elementor_file_path]));
        }
        public function get_plugin_basename_from_slug($slug) {
            $grocery_supermarket_elementor_keys = array_keys($this->get_installed_plugins());
            foreach ($grocery_supermarket_elementor_keys as $grocery_supermarket_elementor_key) {
                if (preg_match('|^' . $slug . '/|', $grocery_supermarket_elementor_key)) {
                    return $grocery_supermarket_elementor_key;
                }
            }
            return $slug;
        }

        public function get_installed_plugins() {

            if (!function_exists('get_plugins')) {
                require_once ABSPATH . 'wp-admin/includes/plugin.php';
            }

            return get_plugins();
        }
        public function create_pattern_setup_builder() {

            $edit_page = admin_url().'post-new.php?post_type=page&create_pattern=true';
            echo json_encode(['page_id'=>'','edit_page_url'=> $edit_page ]);

            exit;
        }

    }
}
/**
 * Kicking this off by calling 'get_instance()' method
 */
Grocery_Supermarket_Elementor_Plugin_Activation_WPElemento_Importer::get_instance();