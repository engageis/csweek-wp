<?php
/**
 * Template Name: Team
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
      <?php $my_query = new WP_Query('showposts=-1&post_type=team'); ?>  
      <?php if($my_query->have_posts()) : ?><?php while($my_query->have_posts()) : $my_query->the_post(); ?>
      <div class="team-profile">
        <?php the_post_thumbnail('team-thumb');?>
        <?php $linkedin = get_post_meta($post->ID, 'linked_in', true);?>
        <?php if($linkedin):?>
        <a href="<?= $linkedin ?>"><img src="/wp-content/themes/csweek/images/linkedin-profile.png" alt="" /></a>
        <?php endif;?>
      </div>
      
      <h5><?php the_title();?></h5>
      <?php endwhile; endif; wp_reset_query(); ?> 
    </article>
    <?php $extra_content = get_post_meta($post->ID, 'extra_content', true);?>
    <?php if($extra_content):?>
      <aside id="extra_content"><?php echo $extra_content;?></aside>
    <?php endif;?>
  </div>
</div>
<?php endwhile;?>
<?php get_footer(); ?>
