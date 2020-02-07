<?php

/**
 * Registers the `hero_slider` post type.
 */
function hero_slider_init() {
	register_post_type( 'hero_slider', array(
		'labels'                => array(
			'name'                  => __( 'Hero sliders', 'cl' ),
			'singular_name'         => __( 'Hero slider', 'cl' ),
			'all_items'             => __( 'All Hero sliders', 'cl' ),
			'archives'              => __( 'Hero slider Archives', 'cl' ),
			'attributes'            => __( 'Hero slider Attributes', 'cl' ),
			'insert_into_item'      => __( 'Insert into hero slider', 'cl' ),
			'uploaded_to_this_item' => __( 'Uploaded to this hero slider', 'cl' ),
			'featured_image'        => _x( 'Featured Image', 'hero_slider', 'cl' ),
			'set_featured_image'    => _x( 'Set featured image', 'hero_slider', 'cl' ),
			'remove_featured_image' => _x( 'Remove featured image', 'hero_slider', 'cl' ),
			'use_featured_image'    => _x( 'Use as featured image', 'hero_slider', 'cl' ),
			'filter_items_list'     => __( 'Filter hero sliders list', 'cl' ),
			'items_list_navigation' => __( 'Hero sliders list navigation', 'cl' ),
			'items_list'            => __( 'Hero sliders list', 'cl' ),
			'new_item'              => __( 'New Hero slider', 'cl' ),
			'add_new'               => __( 'Add New', 'cl' ),
			'add_new_item'          => __( 'Add New Hero slider', 'cl' ),
			'edit_item'             => __( 'Edit Hero slider', 'cl' ),
			'view_item'             => __( 'View Hero slider', 'cl' ),
			'view_items'            => __( 'View Hero sliders', 'cl' ),
			'search_items'          => __( 'Search hero sliders', 'cl' ),
			'not_found'             => __( 'No hero sliders found', 'cl' ),
			'not_found_in_trash'    => __( 'No hero sliders found in trash', 'cl' ),
			'parent_item_colon'     => __( 'Parent Hero slider:', 'cl' ),
			'menu_name'             => __( 'Hero sliders', 'cl' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_rest'          => true,
		'rest_base'             => 'hero_slider',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'hero_slider_init' );

/**
 * Sets the post updated messages for the `hero_slider` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `hero_slider` post type.
 */
function hero_slider_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['hero_slider'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Hero slider updated. <a target="_blank" href="%s">View hero slider</a>', 'cl' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'cl' ),
		3  => __( 'Custom field deleted.', 'cl' ),
		4  => __( 'Hero slider updated.', 'cl' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Hero slider restored to revision from %s', 'cl' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Hero slider published. <a href="%s">View hero slider</a>', 'cl' ), esc_url( $permalink ) ),
		7  => __( 'Hero slider saved.', 'cl' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Hero slider submitted. <a target="_blank" href="%s">Preview hero slider</a>', 'cl' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Hero slider scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview hero slider</a>', 'cl' ),
		date_i18n( __( 'M j, Y @ G:i', 'cl' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Hero slider draft updated. <a target="_blank" href="%s">Preview hero slider</a>', 'cl' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'hero_slider_updated_messages' );
