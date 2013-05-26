    <div id="sponsors">
      <div class="container">
        <div class="row">
          <div class="span12">
            <a href="<?= get_permalink_by_name("sponsors"); ?>" class="learn-more">(learn more)</a>
            
            <!-- CROWDSOURCING SPONSORS -->
            <h2>CROWDSOURCING SPONSORS</h2>
            <?php $my_query = new WP_Query("showposts=-1&genre=crowd-sponsors&post_type=sponsors");?>
            <?php if($my_query->have_posts()) : ?>
            <section class="sponsor-logos">
              <?php while($my_query->have_posts()) : $my_query->the_post(); ?>
              <a target="_blank" href="<?=get_post_meta($post->ID, 'sponsor_url', true);?>" class="sponsors-item">
                <?php the_post_thumbnail('sponsors-thumb');?>
              </a>
            <?php endwhile; ?>
            </section>
            <?php endif; wp_reset_query(); ?>

            <!-- SUPPORTING ORGANIZATIONS -->
            <h2>SUPPORTING ORGANIZATIONS</h2>
            <?php $my_query = new WP_Query("showposts=-1&genre=supporting-organizations&post_type=sponsors");?>
            <?php if($my_query->have_posts()) : ?>
            <section class="sponsor-logos">
              <?php while($my_query->have_posts()) : $my_query->the_post(); ?>
              <a target="_blank" href="<?=get_post_meta($post->ID, 'sponsor_url', true);?>" class="sponsors-item">
                <?php the_post_thumbnail('sponsors-thumb');?>
              </a>
            <?php endwhile; ?>
            </section>
            <?php endif; wp_reset_query(); ?>

            <!-- TECHNOLOGY & STRATEGIC PARTNERS -->
            <h2>TECHNOLOGY & STRATEGIC PARTNERS</h2>
            <?php $my_query = new WP_Query("showposts=-1&genre=tec-strat-partners&post_type=sponsors");?>
            <?php if($my_query->have_posts()) : ?>
            <section class="sponsor-logos">
              <?php while($my_query->have_posts()) : $my_query->the_post(); ?>
              <a target="_blank" href="<?=get_post_meta($post->ID, 'sponsor_url', true);?>" class="sponsors-item">
                <?php the_post_thumbnail('sponsors-thumb');?>
              </a>
            <?php endwhile; ?>
            </section>
            <?php endif; wp_reset_query(); ?>

            <!-- MEDIA PARTNERS -->
            <h2>MEDIA PARTNERS</h2>
            <?php $my_query = new WP_Query("showposts=-1&genre=media-partners&post_type=sponsors");?>
            <?php if($my_query->have_posts()) : ?>
            <section class="sponsor-logos">
              <?php while($my_query->have_posts()) : $my_query->the_post(); ?>
              <a target="_blank" href="<?=get_post_meta($post->ID, 'sponsor_url', true);?>" class="sponsors-item">
                <?php the_post_thumbnail('sponsors-thumb');?>
              </a>
            <?php endwhile; ?>
            </section>
            <?php endif; wp_reset_query(); ?>

            <section class="sponsor-logos last-sponsor-logos">
              <div class="last-logos">
                <h2>OFFICIAL TICKETING PARTNER</h2>
                <a target="_blank" href="http://www.eventbrite.com/"><img src="<?php bloginfo('template_url');?>/images/eventbride.jpg"/></a>
              </div>
              <div class="last-logos">
                <h2>OFFICIAL LOCAL PR PARTNER</h2>
                <a target="_blank" href="http://sgstory.com/"><img src="<?php bloginfo('template_url');?>/images/sgstory.jpg"/></a>
              </div>
              <div class="last-logos">
                <h2>OFFICIAL AIRLINE NETWORK</h2>
                <a target="_blank" href="http://www.staralliance.com/en/business-solutions/conventions-plus/delegates/"><img src="<?php bloginfo('template_url');?>/images/staralliance.png"/></a>
              </div>
            </section>
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
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
