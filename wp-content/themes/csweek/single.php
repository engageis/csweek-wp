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
    <article class="span10">
      <header>
        <?php $page_quoted_title = get_post_meta($post->ID, 'page_quoted_title', true);?>
        <h2><?php if($page_quoted_title){echo nl2br($page_quoted_title);} else {the_title();} ?></h2>
        <div class='post-info'><?php the_time(get_option('date_format')); ?></div>
      </header>
      
      <?
        if ( get_the_author_meta('description') ) :
          echo "<aside class='wrapper_malandrao'>";
          echo get_the_author_meta('description');
          echo "</aside>";
      endif;
      ?>
      <?php the_content();?>
    </article>
    <? require '_add-this.php' ?>
    <?php $extra_content = get_post_meta($post->ID, 'extra_content', true);?>
    <?php if($extra_content):?>
    <aside id="extra_content"><?php echo $extra_content;?></aside>
    <?php endif;?>

    <?php
    global $withcomments;
    $withcomments = 1; // force comments form and comments to show on front page
    comments_template();
    ?>
    <?php endwhile;?>
  </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
