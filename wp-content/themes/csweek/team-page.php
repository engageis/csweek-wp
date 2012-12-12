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
        <h5><?php the_title();?></h5>
        <?php $linkedin = get_post_meta($post->ID, 'linked_in', true);?>
        <?php $twitter = get_post_meta($post->ID, 'twitter', true);?>
        <?php if($linkedin):?>
          <a id="linkedin" href="<?= $linkedin ?>">Linkedin</a>
        <?php endif;?>
        <?php if($twitter):?>
          <a id="twitter" href="<?= $twitter ?>"> | Twitter</a>
        <?php endif;?>
      </div>
      
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
