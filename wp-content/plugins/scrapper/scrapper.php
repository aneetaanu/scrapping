<?php
   /*
   Plugin Name: scrapper
   Plugin URI: http://artifexedge.com/
   description: >-
  a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: Mr. Awesome
   Author URI: http://mrtotallyawesome.com
   License: GPL2
   */
include_once(WP_PLUGIN_DIR.'/scrapper/post-type.php');
require_once __DIR__ . "/includes/vendor/autoload.php";

class scrapp{
    function __construct() {
        add_action( 'admin_menu', array( $this, 'wpa_add_menu' ));
		add_action( 'admin_head', array( $this, 'wpa_styles' ));
		add_action( 'admin_footer', array( $this, 'wpa_script' ));
       register_activation_hook( __FILE__, array( $this, 'wpa_install' ) );
       register_deactivation_hook( __FILE__, array( $this, 'wpa_uninstall' ) );
      }
    /*
      * Actions perform at loading of admin menu
      */
    function wpa_add_menu() {

add_menu_page( 'Beauty Self simple', 'Scrapper ', 'manage_options', 'beautyself-dashboard', array(__CLASS__,'wpa_page_file_path'), plugins_url('images/icon1.png', __FILE__),'2.2.9');
    }
	public function wpa_styles(){}
    public function wpa_script(){}

    /*
     * Actions perform on loading of menu pages
     */
  static function wpa_page_file_path() {

        $screen = get_current_screen();

        if ( strpos( $screen->base, 'beautyself-settings' ) !== false ) {

           // include( dirname(__FILE__) . '/includes/beautyself-settings.php' );
        }
        else {
            include( dirname(__FILE__) . '/includes/beautyself-dashboard.php' );
        }

    }

    /*
     * Actions perform on activation of plugin
     */
    function wpa_install() {


         register_activation_hook( __FILE__, array( 'Scrapper', 'plugin_activation' ) );
    }

    /*
     * Actions perform on de-activation of plugin
     */
    function wpa_uninstall() {

register_deactivation_hook( __FILE__, array( 'Scrapper', 'plugin_deactivation' ) );

    }

}

new scrapp();
