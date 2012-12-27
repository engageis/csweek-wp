<?php get_header(); ?>
<style type="text/css">
#page .entry-content p{
  color: #ddd;
}
</style>
<div id='page'>
  <div class='container'>
    <?php get_sidebar(); ?>
    <?php if ( ! have_posts() ) : ?>
      <article class="post e404">
        <h2>Ops, you might be in the wrong place.</h2>
        <p>If you need to get in touch with us, send an email to contact@crowdsourcingweek.com. Thanks!</p>
      </article>
    <?php endif; ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="the-content">
        <article style="margin-bottom:30px" <?php post_class(); ?>>
          <header>
            <h2 style="margin:0" class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <span style="color:#999" class="category-show">
              <?php the_time('l, j \d\e F \d\e Y');?>
            </span>
          </header>
          <div class="entry-content">
            <?php if(has_post_thumbnail($post->ID)):?><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('big-thumb');?></a><?php endif;?>
            <?php the_excerpt(); ?>
          </div>
        </article>
      <hr style="border-top: 1px solid rgba(0,0,0,0.2); border-bottom: 1px solid rgba(255,255,255,0.2)" />
      </div>
    <?php endwhile; // End the loop. Whew. ?>
    <aside class="pagination">
      <?php if(get_next_posts_link()):?>
      <div id="prev_post">
        <?php next_posts_link('Antigos');?>
      </div>
      <?php endif;?>
      <?php if(get_previous_posts_link()):?>
      <div id="next_post">
        <?php previous_posts_link('Novos');?>
      </div>
      <?php endif;?>
    </aside>
  </div>
</div>
<?php get_footer(); ?>
