<div id="blog">
  <div class="container">
    <div class="row">
      <div class="span12">
        <h2>Latest posts</h2>
        <?php
        $args = array( 'numberposts' => 5, 'order'=> 'DESC', 'orderby' => 'id' );
        $postslist = get_posts( $args );
        foreach ($postslist as $post) :  setup_postdata($post); ?> 
          <div class="post">
            <small style="color:#999;margin:0;line-height:0"><?php the_date(); ?></small>
            <br />
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
            <hr />
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>