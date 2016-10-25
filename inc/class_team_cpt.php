<?php

class MS_Team_CPT {


	#-----------------------------------------------------------------#
	# Init Team CPT 
	#-----------------------------------------------------------------# 

	public function __construct() {

		add_action( 'init', array( $this, 'team_cpt_register') );

	}


	#-----------------------------------------------------------------#
	# Register Admin Team Section
	#-----------------------------------------------------------------# 

	public function team_cpt_register() {  
	    	 
		$team_labels = array(
			'name' 				 	=> esc_html__( 'Team', 'framework' ),
			'singular_name' 		=> esc_html__( 'Team Member', 'framework' ),
			'add_new' 				=> esc_html__( 'Add New', 'framework' ),
			'add_new_item'			=> esc_html__( 'Add New Member', 'framework' ),
			'edit_item' 			=> esc_html__( 'Edit Member', 'framework' ),
			'new_item' 				=> esc_html__( 'Add New Member', 'framework' ),
			'view_item' 			=> esc_html__( 'View Member', 'framework' ),
			'all_items'        	 	=> esc_html__( 'All Team Members', 'framework' ),
			'search_items' 		 	=> esc_html__( 'Search Team', 'framework' ),
			'not_found' 		 	=> esc_html__( 'No member found', 'framework' ),
			'not_found_in_trash' 	=> esc_html__( 'No member found in trash', 'framework' )
		);

		$args = array(
	    	'labels' 				=> $team_labels,
	    	'public' 				=> true,
	    	'publicly_queryable' 	=> true,
	    	'query_var' 			=> true,
	    	'exclude_from_search'	=> true,
			'supports' 				=> array( 'title', 'editor', 'thumbnail'),
			'capability_type' 		=> 'post',
			'rewrite' 				=> array("slug" => "team"),
			'menu_position' 		=> 20,
			'has_archive' 			=> false,
			'menu_icon'		   		=> 'dashicons-groups',			
		); 
	  
	    register_post_type( 'team' , $args );
  
	}


}