<?php get_header(); ?>
<div id='page'>
  <div class='container'>
    <?php get_sidebar(); ?>
    <?php if ( ! have_posts() ) : ?>
      <article class="post e404">
        <h2>Ops, you might be in the wrong place.</h2>
        <p>If you need to get in touch with us, send an email to contact@crowdsourcingweek.com. Thanks!</p>
      </article>
    <?php endif; ?>
    <?php $first = true;?> 
    <?php while ( have_posts() ) : the_post(); ?>
      <?php if($first):?>
        <header class="authbio">
          <h2>Author archives: <?php the_author();?></h2>
          <?php echo get_avatar( get_the_author_email(), '80' ); ?>
          <p><?php echo nl2br(get_the_author_meta('description')); ?></p>
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
        </header>
      <?php $first = false;?> 
      <?php endif;?> 
      <div class="the-content">
        <article style="margin-bottom:30px" <?php post_class(); ?>>
          <header>
            <h2 style="margin:0" class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <span style="color:#999" class="category-show">
              <?php the_time('l, F j, Y');?>
            </span>
          </header>
          <div class="entry-content">
            <?php if(has_post_thumbnail($post->ID)):?><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('big-thumb');?></a><?php endif;?>
            <?php the_excerpt(); ?>
            <section class="tags">
              <?php $category_list = get_the_category_list( ', ' ); ?>
              <?php if ( $category_list ): ?>
                 <p>Categories: <?=$category_list;?></p>
              <?php endif; ?>
              <?php $tags_list = get_the_tag_list( '', ', ' ); ?>
              <?php if ( $tags_list ): ?>
                 <p>Tags: <?=$tags_list;?></p>
              <?php endif; ?>
            </section>
          </div>
        </article>
      <? require '_add-this.php' ?>
      <hr style="border-top: 1px solid rgba(0,0,0,0.2); border-bottom: 1px solid rgba(255,255,255,0.2)" />
      </div>
    <?php endwhile; // End the loop. Whew. ?>
    <aside class="pagination">
      <?php if(get_next_posts_link()):?>
      <div id="prev_post">
        <?php next_posts_link('Older');?>
      </div>
      <?php endif;?>
      <?php if(get_previous_posts_link()):?>
      <div id="next_post">
        <?php previous_posts_link('Newer');?>
      </div>
      <?php endif;?>
    </aside>
  </div>
</div>
<?php get_footer(); ?>
