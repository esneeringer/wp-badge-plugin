<?php
/*
 *	Plugin Name: Hallow Post Auto Load
 *	Plugin URI: 
 *	Description: Plugin to auto load new posts to Mongo instance
 *	Version: 1.0
 *	Author: Elliot Sneeringer
 *	Author URI: 
 *	License: GPL2
 *
*/


function on_post_publish( $ID, $post ) {
    // A function to perform actions when a post is published.
    //error_log( print_r( $post, true ) );

    $postArray = (array) $post;

    $title = $postArray["post_title"];
    $body = $postArray["post_content"];
    $author = $postArray["post_author"];

    $testArray = json_encode(array(
        "title" => $title,
        "body" => $body,
        "author" => $author
    ));

    $args = array(
        'body' => $testArray,
        'timeout' => '5',
        'redirection' => '5',
        'httpversion' => '1.0',
        'blocking' => true,
        'headers' => array(),
        'cookies' => array()
    );
    
    try{
        wp_remote_post( 'https://da0beed8.ngrok.io/post', $args );
    }catch(Exception $e){
        error_log("error");
    }
}

add_action(  'publish_post',  'on_post_publish', 10, 2 );

?>