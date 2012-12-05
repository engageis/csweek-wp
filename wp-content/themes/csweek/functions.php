<?php
/**
 *
 * @package WordPress
 * @subpackage CSWeek
 * @since Maiz Lulkin 2013
*/

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