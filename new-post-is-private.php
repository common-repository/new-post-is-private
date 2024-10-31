<?php
/*
Plugin Name: New Post is Private
Description: New posts will be private by default.
Author: Mohan Sandesh
Version: 0.1
*/

function new_post_is_private( $post_id ){
	$post = get_post( $post_id );
	if( $post->post_modified == $post->post_date ){
		wp_update_post( array(
			'ID' => $post_id,
			'post_status' => 'private'
		) );
	}
}
add_action( 'publish_post', 'new_post_is_private' );