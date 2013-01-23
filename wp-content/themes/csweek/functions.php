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
  add_image_size('team-thumb', 100, 100, true);
  add_image_size('sponsors-thumb', 200, 100, true);
}
endif;

function add_contactmethods( $contactmethods ) {
  // Add Twitter
  unset($contactmethods['aim']);
  unset($contactmethods['yim']);
  unset($contactmethods['jabber']);
  // $contactmethods['facebook'] = 'Facebook';
  $contactmethods['twitter'] = 'Twitter';
  $contactmethods['linkedin'] = 'LinkedIn';
  
  return $contactmethods;
}
add_filter('user_contactmethods','add_contactmethods',10,1);

function roots_widgets_init() {
  // Register widgetized areas
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar-primary',
    'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="widget-inner">',
    'after_widget' => '</div></section>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'roots_widgets_init');

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

/* CUSTOM POST TYPES */
add_action('init', 'my_cpt_init');
function my_cpt_init() 
{
/* CUSTOM POST TYPE: WORKSHOPS */
  $labelsWorkshops = array(
    'name' => 'Workshops',
    'singular_name' => 'Workshop',
    'add_new' => 'New Workshop',
    'add_new_item' => 'Add new Workshop',
    'edit_item' => 'Edit Workshop',
    'new_item' => 'New Workshop',
    'view_item' => 'View Workshop',
    'search_items' => 'Search Workshops',
    'menu_name' => 'Workshops'

  );
  $argsWorkshops = array(
    'labels' => $labelsWorkshops,
    'public' => true,
    'publicly_queryable' => false,
    'show_ui' => true,
    'exclude_from_search' => true,
    'menu_position' => 4,
    // Dá pra usar um icone aqui
    // 'menu_icon' => get_bloginfo('template_url') . '/images/icons/workshop.png',
    'show_in_menu' => true, 
    'query_var' => false,
    // 'rewrite' => array('slug' => 'workshop'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'supports' => array('title','editor','thumbnail')
  );

 /* CUSTOM POST TYPE: TEAM */
  $labelsTeam = array(
    'name' => 'Team',
    'singular_name' => 'Team',
    'add_new' => 'New Member',
    'add_new_item' => 'Add Member',
    'edit_item' => 'Edit Member',
    'new_item' => 'New Member',
    'view_item' => 'View Member',
    'search_items' => 'Search Members',
    'menu_name' => 'Team'

  );
  $argsTeam = array(
    'labels' => $labelsTeam,
    'public' => true,
    'publicly_queryable' => false,
    'show_ui' => true,
    'exclude_from_search' => true,
    'menu_position' => 4,
    // Dá pra usar um icone aqui
    // 'menu_icon' => get_bloginfo('template_url') . '/images/icons/workshop.png',
    'show_in_menu' => true, 
    'query_var' => false,
    // 'rewrite' => array('slug' => 'workshop'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'supports' => array('title','thumbnail')
  );
  
  /* CUSTOM POST TYPE: SPEAKERS */
  $labelsSpeakers = array(
    'name' => 'Speakers',
    'singular_name' => 'Speakers',
    'add_new' => 'New Speakers',
    'add_new_item' => 'Add new Speakers',
    'edit_item' => 'Edit Speakers',
    'new_item' => 'New Speakers',
    'view_item' => 'View Speakers',
    'search_items' => 'Search Speakers',
    'menu_name' => 'Speakers'

  );
  $argsSpeakers = array(
    'labels' => $labelsSpeakers,
    'public' => true,
    'publicly_queryable' => false,
    'show_ui' => true,
    'exclude_from_search' => true,
    'menu_position' => 4,
    // Dá pra usar um icone aqui
    // 'menu_icon' => get_bloginfo('template_url') . '/images/icons/workshop.png',
    'show_in_menu' => true, 
    'query_var' => false,
    // 'rewrite' => array('slug' => 'workshop'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'supports' => array('title','editor','thumbnail')
  );

  /* CUSTOM POST TYPE: SPONSORS */
  $labelsSponsors = array(
    'name' => 'Sponsors',
    'singular_name' => 'Sponsors',
    'add_new' => 'New Sponsors',
    'add_new_item' => 'Add new Sponsors',
    'edit_item' => 'Edit Sponsors',
    'new_item' => 'New Sponsors',
    'view_item' => 'View Sponsors',
    'search_items' => 'Search Sponsors',
    'menu_name' => 'Sponsors'

  );
  $argsSponsors = array(
    'labels' => $labelsSponsors,
    'public' => true,
    'publicly_queryable' => false,
    'show_ui' => true,
    'exclude_from_search' => true,
    'menu_position' => 6,
    'show_in_menu' => true, 
    'query_var' => false,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'supports' => array('title','thumbnail')
  );
 
  // Maiz, pode replicar essas funções e adicionar outros custom post types
  register_post_type('workshops', $argsWorkshops);
  register_post_type('speakers', $argsSpeakers);
  register_post_type('sponsors', $argsSponsors);
  register_post_type('team', $argsTeam);

  
}

?>
