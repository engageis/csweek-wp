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
    <div class='blog-container'>
      <h2> Blog </h2>
      <article>
        <header>
          <?php $page_quoted_title = get_post_meta($post->ID, 'page_quoted_title', true);?>
          <h2><?php if($page_quoted_title){echo nl2br($page_quoted_title);} else {the_title();} ?></h2>
          <div class='post-info'><?php the_time('l, F j, Y');?></div>
          <?php $category_list = get_the_category_list( ', ' ); ?>
          <?php if ( $category_list ): ?>
             <p>Categories: <?=$category_list;?></p>
          <?php endif; ?>
        </header>
        <div class="the-content">

          <?php the_content();?>
          <? require '_add-this.php' ?>
          <section class="tags">
            <?php $tags_list = get_the_tag_list( '', ', ' ); ?>
            <?php if ( $tags_list ): ?>
               <p>Tags: <?=$tags_list;?></p>
            <?php endif; ?>
          </section>
          <footer class="authbio">
            <?php echo get_avatar( get_the_author_email(), '80' ); ?>
            <h4><?php the_author_posts_link();?></h4>
            <p><?php echo nl2br(get_the_author_meta('description')); ?></p>
            <div class="author-social">
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
            </div>
          </footer>
        </div>
      </article>

    <?php
    global $withcomments;
    $withcomments = 1; // force comments form and comments to show on front page
    comments_template();
    ?>
    <!-- <div class="fb-recommendations-bar" data-href="<?php the_permalink();?>" data-read-time="10"></div> -->
    <?php endwhile;?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
