<?php
if (!class_exists('Mantrabrain_Theme_Hooks')) {
    class Mantrabrain_Theme_Hooks
    {

        public function __construct()
        {
            add_action('admin_enqueue_scripts', array($this, 'admin_scripts'));


        }

        public function admin_scripts($hook)
        {


            if (is_admin()) {
                wp_enqueue_style('wp-color-picker');
                wp_enqueue_script('wp-color-picker');
            }
            if ('widgets.php' === $hook) {

                wp_enqueue_script('underscore');

                wp_enqueue_style('mantrabrain-theme-admin-style', get_template_directory_uri() . '/mantrabrain-theme/assets/admin/css/mantrabrain-theme-admin.css', array());

                wp_enqueue_media();

                wp_enqueue_script('mantrabrain-theme-admin-script', get_template_directory_uri() . '/mantrabrain-theme/assets/admin/js/mantrabrain-theme-admin.js', array('jquery'));

            }
        }

    }
}