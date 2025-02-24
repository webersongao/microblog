<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'mbfun_create_liveblog_type');
function mbfun_create_liveblog_type() {

	mbfun_update_microblog_display_module();
	
}


function mbfun_register_liveblog_args() {

	$labels = array(
		'name'               => _x( '直播', 'post type general name', MICROBLOG_DOMAIN ),
		'singular_name'      => _x( '微直播', 'post type singular name', MICROBLOG_DOMAIN ),
		'add_new'            => __( '新直播', MICROBLOG_DOMAIN ),
		'add_new_item'       => __( 'Add New Entry', MICROBLOG_DOMAIN ),
		'edit_item'          => __( '编辑直播', MICROBLOG_DOMAIN ),
		'new_item'           => __( '新直播', MICROBLOG_DOMAIN ),
		'all_items'          => __( '直播', MICROBLOG_DOMAIN ),
		'view_item'          => __( 'View Entry', MICROBLOG_DOMAIN ),
		'search_items'       => __( 'Search Liveblog Entries', MICROBLOG_DOMAIN ),
		'not_found'          => __( 'No Liveblog Entries found', MICROBLOG_DOMAIN ),
		'not_found_in_trash' => __( 'No Liveblog Entries found in Trash', MICROBLOG_DOMAIN ),
		'parent_item_colon'  => '',
		'menu_name'          => __( '直播', MICROBLOG_DOMAIN ),
	);
	$reg_args   = array(
		'labels'          => apply_filters( 'mlb_post_type_labels', $labels ),
		'public'          => false,
		'query_var'       => false,
		'rewrite'         => false,
		'show_ui'         => true,
		'menu_position'   => 7,
		'capability_type' => 'post',
		'map_meta_cap'    => true,
		'can_export'      => true,
		'menu_icon'       => 'dashicons-format-aside',
		'supports'        => array( 'title', 'author', 'editor' ),
		'show_in_rest' 	  => use_block_editor_for_post_type('post'),    
	);

	return $reg_args;

}