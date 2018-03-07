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

  /* configure the Custom Page post type (tfcustompage) */

  $labels_custompage = array(
		'name'               => ( 'Custom Pages' ),
		'singular_name'      => ( 'Custom Page' ),
		'menu_name'          => ( 'Custom Pages' ),
		'edit_item'          => ( 'Edit Custom Page' ),
		'view_item'          => ( 'View Custom Page' ),
		'all_items'          => ( 'View all Custom Pages' )
	);

	$args_custompage = array(
		'labels'             => $labels_custompage,
    'description'        => ( 'Temporary description' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'query_var'          => false,
    'capability_type'    => 'page',
		'hierarchical'       => false,
		'menu_position'      => 24,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'revisions' ),
    'show_in_rest'       => true,
    'show_in_nav_menus'  => true
	);

  register_post_type('tfcustompage', $args_custompage );

  /* configure the person post type (tfpeople) */

  $labels_tfpeople = array(
		'name'               => ( 'People' ),
		'singular_name'      => ( 'Person' ),
		'menu_name'          => ( 'People' ),
		'edit_item'          => ( 'Edit Person' ),
		'view_item'          => ( 'View Person' ),
		'all_items'          => ( 'View all People' )
	);

	$args_tfpeople = array(
		'labels'             => $labels_tfpeople,
    'description'        => ( 'Temporary description' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'query_var'          => 'person',
    'capability_type'    => 'post',
    'has_archive'        => 'true',
		'hierarchical'       => false,
		'menu_position'      => 25,
		'supports'           => array( 'title', 'editor', 'excerpt', 'revisions', 'thumbnail', 'custom-fields' ),
    'show_in_rest'       => true,
    'show_in_nav_menus'  => true,
    'rewrite'            => array( 'slug'=>'people', 'with_front'=>'false' )
	);

  register_post_type('tfpeople', $args_tfpeople );

}

add_action( 'init', 'my_custom_posttypes' );

/*
format the tfcustompage slug for a prettier URL
*/

function tfcustompage_remove_slug( $post_link, $post, $leavename ) {

    if ( 'tfcustompage' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'tfcustompage_remove_slug', 10, 3 );
/* formatting the slug as above removes some of the query info that wp needs to
 * engage the right template. so the function below is used to prepare the right
 * query */
 function tfcustompage_parse_request( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'tfcustompage') );
    }
}
add_action( 'pre_get_posts', 'tfcustompage_parse_request' );



/*
format the tfpeople slug for a prettier URL
*/
function tfpeople_remove_slug( $post_link, $post, $leavename ) {

    if ( 'tfpeople' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'tfpeople_remove_slug', 10, 3 );







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
