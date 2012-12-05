<?php get_header(); ?>
<?php if ( ! have_posts() ) : ?>
  <article class="post e404">
    <h2>Opa, ainda não há conteúdo aqui...</h2>
    <p>Alguma explicação.</p>
  </article>
<?php endif; ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      <span class="category-show">
        <?php the_time('l, j \d\e F \d\e Y');?>
      </span>
    </header>
    <div class="entry-content">
      <?php if(has_post_thumbnail($post->ID)):?><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('big-thumb');?></a><?php endif;?>
      <?php the_excerpt(); ?>
    </div>
  </article>
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
<?php get_footer(); ?>