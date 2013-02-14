    <div id="sponsors">
      <div class="container">
        <a target="_blank" href="http://www.yoursingapore.com/content/traveller/en/experience.html"><img src="<?php bloginfo('template_url');?>/images/ysing.jpg" class="ysing-logo"/></a>
        <div class="row">
          <div class="span12">
            <a href="<?= get_permalink_by_name("sponsors"); ?>" class="learn-more">(learn more)</a>
            <?php  $sponsor_genres = get_terms( 'genre', array(
                  'orderby'    => 'count',
                  'hide_empty' => 1,
                  'order'      => 'DESC'
                 ));
            foreach ($sponsor_genres as $term):?>
            <h2><?=$term->name;?></h2>
            <?php $termslug  = $term->slug;?>
            <ul class="sponsors-list">
            <?php $my_query = new WP_Query("showposts=-1&genre=$termslug&post_type=sponsors");?>
            <?php if($my_query->have_posts()) : ?>
              <?php while($my_query->have_posts()) : $my_query->the_post(); ?>
              <li class="sponsors-item">
                <a target="_blank" href="<?=get_post_meta($post->ID, 'sponsor_url', true);?>">
                  <?php the_post_thumbnail('sponsors-thumb');?>
                </a>
              </li>
            <?php endwhile; endif; wp_reset_query(); ?>
            </ul>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php bloginfo('template_url');?>/bootstrap/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/lines.js"></script>
    <?php require '_contact.php'; ?>
    <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-29337904-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
