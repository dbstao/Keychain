<?php
class Custom_Updater {
    private $file;
    private $plugin_data;
    private $slug;
    private $version;
    private $update_url;

    public function __construct($file) {
        $this->file = $file;
        add_action('admin_init', array($this, 'set_plugin_properties'));
        return $this;
    }

    public function set_plugin_properties() {
        $this->slug = plugin_basename($this->file);
        $this->plugin_data = get_plugin_data($this->file);
        $this->version = $this->plugin_data['Version'];
    }

    public function set_update_url($url) {
        $this->update_url = $url;
    }

    public function initialize() {
        add_filter('pre_set_site_transient_update_plugins', array($this, 'check_for_update'), 10, 1);
        add_filter('plugins_api', array($this, 'plugin_popup'), 10, 3);
        add_filter('upgrader_post_install', array($this, 'after_install'), 10, 3);
    }

    public function check_for_update($transient) {
        if (!property_exists($transient, 'checked')) {
            return $transient;
        }

        $response = wp_remote_get($this->update_url);
        if (is_wp_error($response)) {
            return $transient;
        }

        $update_data = json_decode(wp_remote_retrieve_body($response), true);
        if (version_compare($this->version, $update_data['new_version'], '<')) {
            $obj = new stdClass();
            $obj->slug = $this->slug;
            $obj->new_version = $update_data['new_version'];
            $obj->url = $this->plugin_data['PluginURI'];
            $obj->package = $update_data['package_url'];
            $transient->response[$this->slug] = $obj;
        }

        return $transient;
    }

    public function plugin_popup($result, $action, $args) {
        if (!empty($args->slug) && $args->slug == $this->slug) {
            $response = wp_remote_get($this->update_url);
            if (is_wp_error($response)) {
                return $result;
            }

            $update_data = json_decode(wp_remote_retrieve_body($response), true);
            $plugin = array(
                'name' => $this->plugin_data['Name'],
                'slug' => $this->slug,
                'version' => $update_data['new_version'],
                'author' => $this->plugin_data['AuthorName'],
                'author_profile' => $this->plugin_data['AuthorURI'],
                'last_updated' => $update_data['last_updated'],
                'homepage' => $this->plugin_data['PluginURI'],
                'short_description' => $this->plugin_data['Description'],
                'sections' => array(
                    'description' => $this->plugin_data['Description'],
                    'changelog' => $update_data['changelog'],
                ),
                'download_link' => $update_data['package_url'],
            );

            return (object)$plugin;
        }

        return $result;
    }

    public function after_install($response, $hook_extra, $result) {
        global $wp_filesystem;

        $install_directory = plugin_dir_path($this->file);
        $wp_filesystem->move($result['destination'], $install_directory);
        $result['destination'] = $install_directory;

        return $result;
    }
}
?>
