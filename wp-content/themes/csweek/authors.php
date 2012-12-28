<?php
/**
 * Template Name: Authors page
 *
 * @package WordPress
 * @subpackage CSWeek
 * @since Maiz Lulkin 2013
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id='page'>
  <div class='container'>
    <article class="span11">
      <header>
        <?php $page_quoted_title = get_post_meta($post->ID, 'page_quoted_title', true);?>
        <h2><?php if($page_quoted_title){echo nl2br($page_quoted_title);} else {the_title();} ?></h2>
      </header>
      <?php the_content();?>
      <?php $user_query = new WP_User_Query( array( 'role' => 'author') );?>
      <?php if ( !empty( $user_query->results ) ) {
        foreach ( $user_query->results as $user_data ) { ?>
        <div class="authbio">
          <?php $user = get_userdata($user_data->ID);?>
          <?php echo get_avatar( $user->user_email, '80' ); ?>
          <h4><?php echo $user->display_name; ?></h4>
          <p><?php echo $user->description; ?></p>
        </div>
        <?php }
      };?> 
    </article>
  </div>
</div>
<?php endwhile;?>
<div id="support">
  <div class="container">
    <div class="row">
      <div class="offset4 span8">
        <h2>Supported by</h2>
        <a href="http://www.yoursingapore.com/content/mice/en/why-singapore/singapore-exhibition-convention-bureau.html"><img src="<?php bloginfo('template_url');?>/images/secb.png" id="secb-logo"/></a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
