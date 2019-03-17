<?php
class Scrapper{

  // Constructor
    function __construct() {

        add_action( 'admin_menu', 'WpScraper::wp_scraper_menu');
	add_action( 'admin_menu', 'wpsf_edit_admin_menus' );
        register_activation_hook( __FILE__, array( $this, 'wpa_install' ) );
        register_deactivation_hook( __FILE__, array( $this, 'wpa_uninstall' ) );
    }

    /*
      * Actions perform at loading of admin menu
      */
    function wpa_add_scrap() {
        add_menu_scrap( 'Analytify simple', 'Analytify', 'manage_options', 'analytify-dashboard', array(
                          __CLASS__,
                         'wpa_page_file_path'
                        ), plugins_url('images/wp-analytics-logo.png', __FILE__),'2.2.9');
        add_submenu_page( 'analytify-dashboard', 'Analytify simple' . ' Dashboard', ' Dashboard', 'manage_options', 'analytify-dashboard', array(
                              __CLASS__,
                             'wpa_page_file_path'
                            ));

        add_submenu_page( 'analytify-dashboard', 'Analytify simple' . ' Settings', '<b style="color:#f9845b">Settings</b>', 'manage_options', 'analytify-settings', array(
                              __CLASS__,
                             'wpa_page_file_path'
                            ));
    }

    /*
     * Actions perform on loading of menu pages
     */
    function wpa_page_file_path() {
    }

    /*
     * Actions perform on activation of plugin
     */
    function wpa_install() {
    }

    /*
     * Actions perform on de-activation of plugin
     */
    function wpa_uninstall() {
    }

}
new Scrapper();
?>
