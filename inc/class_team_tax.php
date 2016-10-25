<?php

class MS_Team_Taxonomies {


	#-----------------------------------------------------------------#
	# Init Team Taxonomies 
	#-----------------------------------------------------------------# 

	public function __construct() {

		add_action( 'init', array( $this, 'team_category_register') );

	}


	#-----------------------------------------------------------------#
	# Register Team Category Taxonomy 
	#-----------------------------------------------------------------# 

	public function team_category_register() {  

		$taxonomy_labels = array(
			'name' 							=> esc_html__( 'Team Categories', 'framework' ),
			'singular_name' 				=> esc_html__( 'Team Category', 'framework' ),
			'search_items' 					=> esc_html__( 'Search Team Categories', 'framework' ),
			'popular_items'					=> esc_html__( 'Popular Team Categories', 'framework' ),
			'all_items' 					=> esc_html__( 'All Team Categories', 'framework' ),
			'parent_item' 					=> esc_html__( 'Parent Team Category', 'framework' ),
			'parent_item_colon' 			=> esc_html__( 'Parent Team Category:', 'framework' ),
			'edit_item' 					=> esc_html__( 'Edit Team Category', 'framework' ),
			'update_item' 					=> esc_html__( 'Update Team Category', 'framework' ),
			'add_new_item' 					=> esc_html__( 'Add New Team Category', 'framework' ),
			'new_item_name' 				=> esc_html__( 'New Team Category Name', 'framework' ),
			'separate_items_with_commas' 	=> esc_html__( 'Separate team categories with commas', 'framework' ),
			'add_or_remove_items' 			=> esc_html__( 'Add or remove team categories', 'framework' ),
			'choose_from_most_used' 		=> esc_html__( 'Choose from the most used team categories', 'framework' ),
			'menu_name' 					=> esc_html__( 'Categories', 'framework' ),
		);

		$args = array( 
			'labels'						=> $taxonomy_labels,
			'public' 						=> true,
			'show_in_nav_menus' 			=> true,
			'show_ui' 						=> true,
			'show_admin_column' 			=> true,
			'show_tagcloud'					=> false,
			'hierarchical' 					=> true,
			'rewrite' 						=> array( 'slug' => 'team-category' ),
			'query_var' 					=> true
		);

	    register_taxonomy( 'team_category' , 'team', $args );

	}  


}