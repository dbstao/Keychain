<?php

if (!class_exists('BuckyDrop_AbstractAdminBaseController'))
{
    class BuckyDrop_AbstractAdminBaseController
    {
        private $page_title;
        private $menu_title;
        private $capability;
        private $menu_slug;
        private $menu_type;

        public function __construct($page_title = '', $menu_title = '', $capability = '', $menu_slug = '', $priority = 10, $menu_type=0)
        {
            if (is_admin()) {
                $this->init($page_title, $menu_title, $capability, $menu_slug, $priority, $menu_type);

                add_action('wp_loaded', array($this, 'before_render_action'));
            }
        }

        protected function init($page_title, $menu_title, $capability, $menu_slug, $priority = 10, $menu_type = 0)
        {
            if (is_admin()) {
                $this->page_title = $page_title;
                $this->menu_title = $menu_title;
                $this->capability = $capability;
                $this->menu_slug = $menu_slug;
                $this->menu_type = $menu_type;
                add_action('buckydrop_init_admin_menu', array($this, 'add_submenu_page'), $priority);
            }
        }

        public function add_submenu_page($parent_slug)
        {
            if ($this->menu_type == 1) {
                $page_id = add_submenu_page($parent_slug, $this->page_title, $this->menu_title, $this->capability, $this->menu_slug);
            } else if($this->menu_type == 2) {
                $page_id = add_submenu_page(null, $this->page_title, $this->menu_title, $this->capability, $this->menu_slug, array($this, 'render'));
            } else {
                $page_id = add_submenu_page($parent_slug, $this->page_title, $this->menu_title, $this->capability, $this->menu_slug, array($this, 'render'));
            }

            add_action('admin_enqueue_scripts', array($this, 'before_admin_render'));
            add_action("load-$page_id", array($this, 'configure_screen_options'));
        }

        public function before_render_action()
        {
            if ($this->is_current_page()) {
                $this->before_admin_render();
            }
        }

        public function before_admin_render()
        {

        }

        public function configure_screen_options()
        {
        }

        protected function render($params = array())
        {

        }

        protected function is_current_page()
        {
            return is_admin() && isset($_REQUEST['page']) && $_REQUEST['page'] && $this->menu_slug == $_REQUEST['page'];
        }

    }

}
