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
          <h4><a href="<?php echo get_author_posts_url($user->ID); ?>"><?php echo $user->display_name; ?></a></h4>
          <p><?php echo nl2br($user->description); ?></p>
          <div class="author-social">
            <?php $linkedin = get_the_author_meta('linkedin', $user->ID);?>
            <?php $twitter = get_the_author_meta('twitter', $user->ID);?>
            <?php if($linkedin):?>
              <a target="_blank" id="linkedin" href="<?= $linkedin ?>">Linkedin </a>
            <?php endif;?>
            <?php if($twitter && $linkedin):?>
               | 
            <?php endif;?>
            <?php if($twitter):?>
              <a target="_blank" id="twitter" href="<?= $twitter ?>">Twitter</a>
            <?php endif;?>
          </div>
        </div>
        <?php }
      };?> 
      <?php $user_query = new WP_User_Query( array( 'role' => 'Contributor') );?>
      <?php if ( !empty( $user_query->results ) ) {
        foreach ( $user_query->results as $user_data ) { ?>
        <div class="authbio">
          <?php $user = get_userdata($user_data->ID);?>
          <?php echo get_avatar( $user->user_email, '80' ); ?>
          <h4><a href="<?php echo get_author_posts_url($user->ID); ?>"><?php echo $user->display_name; ?></a></h4>
          <p><?php echo nl2br($user->description); ?></p>
          <div class="author-social">
            <?php $linkedin = get_the_author_meta('linkedin', $user->ID);?>
            <?php $twitter = get_the_author_meta('twitter', $user->ID);?>
            <?php if($linkedin):?>
              <a target="_blank" id="linkedin" href="<?= $linkedin ?>">Linkedin </a>
            <?php endif;?>
            <?php if($twitter && $linkedin):?>
               | 
            <?php endif;?>
            <?php if($twitter):?>
              <a target="_blank" id="twitter" href="<?= $twitter ?>">Twitter</a>
            <?php endif;?>
          </div>
        </div>
        <?php }
      };?> 
    </article>
  </div>
</div>
<?php endwhile;?>
<!-- Your Singapore -->
<?php require '_secb.php'; ?>
<?php get_footer(); ?>
