<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage CSWeek
 * @since Maiz Lulkin 2013
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id='page'>
  <div class='container'>
    <article>
      <header>
        <?php $page_quoted_title = get_post_meta($post->ID, 'page_quoted_title', true);?>
        <h2><?php if($page_quoted_title){echo nl2br($page_quoted_title);} else {the_title();} ?></h2>
        <div class='post-info'><?php the_time(get_option('date_format')); ?></div>
      </header>
      
      <!--<?
        if ( get_the_author_meta('description') ) :
          echo "<aside class='wrapper_malandrao'>";
          echo get_the_author_meta('description');
          echo "</aside>";
      endif;?>-->
      <div class="the-content"> 
        <?php the_content();?>
        <footer class="authbio">
          <!-- <img src="<?php bloginfo('template_url'); ?>/images/<?php the_author_firstname(); ?>.jpg" alt="" class="alignleft"/> -->
          <?php echo get_avatar( get_the_author_email(), '80' ); ?>
          <?php the_author_description(); ?>
        </footer>
      </div>
    </article>
    <?php get_sidebar(); ?>

    <?php
    global $withcomments;
    $withcomments = 1; // force comments form and comments to show on front page
    comments_template();
    ?>
    <div class="fb-recommendations-bar" data-href="<?php the_permalink();?>" data-read-time="10"></div>
    <?php endwhile;?>
  </div>
</div>
<?php get_footer(); ?>
