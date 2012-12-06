<?php
/**
 *
 * @package WordPress
 * @subpackage CSWeek
 * @since Maiz Lulkin 2013
*/

add_action( 'after_setup_theme', 'csweek_setup' );

if ( ! function_exists( 'csweek_setup' ) ):

function csweek_setup() {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 200, 200, true );
  //add_image_size('big-thumb', 778, 222, true);
}
endif;


function path($p){
  return "wp-content/themes/csweek/$p";
}

function get_permalink_by_name($page_name)
{
  global $post;
  global $wpdb;
  $pageid_name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
  return get_permalink($pageid_name);
}
?>
