<?php
/*
 Plugin Name: Tony Foundation Custom Post Types
 Plugin URI: http://magnesite.tech
 Description: Adds custom post types for about pages, resources, and more.
 Author: Hailey Pate
 Version: 0.1
 Author URI: http://magnesite.tech
 Text Domain: posttype
 */

function my_custom_posttypes() {
  $labels = array(
		'name'               => ( 'Custom Pages' ),
		'singular_name'      => ( 'Custom Page' ),
		'menu_name'          => ( 'Custom Pages' ),
		'edit_item'          => ( 'Edit Custom Page' ),
		'view_item'          => ( 'View Custom Page' ),
		'all_items'          => ( 'View all Custom Pages' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => ( 'Temporary description' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'query_var'          => '{query_var_string}={post_slug}',
    'query_var'          => false,
    'capability_type'    => 'page',
		'hierarchical'       => false,
		'menu_position'      => 24,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'show_in_rest'       => true,
    'show_in_nav_menus'  => true
	);

  register_post_type('custompage', $args );

}

add_action( 'init', 'my_custom_posttypes' );


//format the page slug for a prettier URL
function custompage_remove_slug( $post_link, $post, $leavename ) {

    if ( 'custompage' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'custompage_remove_slug', 10, 3 );

/* formatting the slug as above removes some of the query info that wp needs to
 * engage the right template. so the function below is used to prepare the right
 * query */
 function custompage_parse_request( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'custompage') );
    }
}
add_action( 'pre_get_posts', 'custompage_parse_request' );

// this function updates all permalinks using the new rules when the plugin is registered
function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry,
    // when you add a post of this CPT.
    my_custom_posttypes();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );
