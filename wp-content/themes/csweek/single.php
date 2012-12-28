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
    <h2> Blog </h2>
    <article>
      <header>
        <?php $page_quoted_title = get_post_meta($post->ID, 'page_quoted_title', true);?>
        <h2><?php if($page_quoted_title){echo nl2br($page_quoted_title);} else {the_title();} ?></h2>
        <div class='post-info'><?php the_time('l, F j, Y');?></div>
      </header>
      <div class="the-content">

        <?php the_content();?>
        <? require '_add-this.php' ?>
        <footer class="authbio">
          <?php echo get_avatar( get_the_author_email(), '80' ); ?>
          <h4><?php the_author();?></h4>
          <p><?php echo get_the_author_meta('description'); ?></p>
          <?php $linkedin = get_the_author_meta('linkedin', $post->post_author);?>
          <?php $twitter = get_the_author_meta('twitter', $post->post_author);?>
          <?php if($linkedin):?>
            <a target="_blank" id="linkedin" href="<?= $linkedin ?>">Linkedin </a>
          <?php endif;?>
          <?php if($twitter && $linkedin):?>
             | 
          <?php endif;?>
          <?php if($twitter):?>
            <a target="_blank" id="twitter" href="<?= $twitter ?>"> Twitter</a>
          <?php endif;?>
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
