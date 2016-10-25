<?php 

/*
Plugin Name: Core Team
Plugin URI: http://mstrends.com/plugins/team-post-type
Description: Creates a Specific CPT + Taxonomy for Team Members.
Version: 1.0
Author: Muhamamd Faisal
Author URI: http://themeforest.net/user/MsTrends
*/



#-----------------------------------------------------------------#
# If this file is called directly, abort.
#-----------------------------------------------------------------# 

    if ( ! defined( 'WPINC' ) ) {
        die;
    }


#-----------------------------------------------------------------#
# Loads the Core Plugin Classes
#-----------------------------------------------------------------# 

    require_once( DIRNAME(__FILE__) . '/inc/class_team_cpt.php' );
    require_once( DIRNAME(__FILE__) . '/inc/class_team_tax.php' );


#-----------------------------------------------------------------#
# Setup Core Plugin (fires on every page load)
#-----------------------------------------------------------------# 

    function ms_setup_team() {

        // initiate classes
        new MS_Team_CPT();
        new MS_Team_Taxonomies();

    }

    ms_setup_team();


#-----------------------------------------------------------------#
# Activation / Deactivation Hooks
#-----------------------------------------------------------------# 

    // On Plugin Activation
    function ms_team_activate() { 

        ms_setup_team();
        flush_rewrite_rules();

    }

    register_activation_hook( __FILE__, 'ms_team_activate' );
     

    // On Plugin Deactivation
    function ms_team_deactivate() {

        flush_rewrite_rules();

    }

    register_deactivation_hook( __FILE__, 'ms_team_deactivate' );