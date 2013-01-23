
    <div id="sponsors">
      <div class="container">
        <div class="row">
          <div class="offset4 span8">
            <a target="_blank" href="http://www.yoursingapore.com/content/traveller/en/experience.html"><img src="<?php bloginfo('template_url');?>/images/ysing.jpg" class="ysing-logo"/></a>
          </div>
        </div>
        <div class="row"> 
          <div class="span12"u>
            


            <?php $my_query = new WP_Query('showposts=-1&genre=crowd-sponsors&post_type=sponsors');?>
            <?php if($my_query->have_posts()) : ?>
            <h2>Crowdsourcing Sponsors <a href="<?= get_permalink_by_name("sponsors"); ?>" class="learn-more">(learn more)</a></h2>
            <ul class="sponsors-list">
              <?php while($my_query->have_posts()) : $my_query->the_post(); ?>
              <li>
                <a target="_blank" href="<?=get_post_meta($post->ID, 'sponsor_url', true);?>">
                  <?php the_post_thumbnail('sponsors-thumb');?>
                </a>
              </li>
              <?php endwhile;?>
            </ul>
            <?php endif; wp_reset_query(); ?>

            <?php $my_query = new WP_Query('showposts=-1&genre=tec-strat-partners&post_type=sponsors');?>
            <?php if($my_query->have_posts()) : ?>
            <h2>Technology & strategic partners</h2>
            <ul class="sponsors-list">
              <?php while($my_query->have_posts()) : $my_query->the_post(); ?>
              <li>
                <a target="_blank" href="<?=get_post_meta($post->ID, 'sponsor_url', true);?>">
                  <?php the_post_thumbnail('sponsors-thumb');?>
                </a>
              </li>
              <?php endwhile;?>
            </ul>
            <?php endif; wp_reset_query(); ?>

            <?php $my_query = new WP_Query('showposts=-1&genre=media-partners&post_type=sponsors');?>
            <?php if($my_query->have_posts()) : ?>
            <h2>Media Partners</h2>
            <ul class="sponsors-list">
              <?php while($my_query->have_posts()) : $my_query->the_post(); ?>
              <li>
                <a target="_blank" href="<?=get_post_meta($post->ID, 'sponsor_url', true);?>">
                  <?php the_post_thumbnail('sponsors-thumb');?>
                </a>
              </li>
              <?php endwhile;?>
            </ul>
            <?php endif; wp_reset_query(); ?>



            <h2>Crowdsourcing Sponsors <a href="<?= get_permalink_by_name("sponsors"); ?>" class="learn-more">(learn more)</a></h2>
            <ul class="sponsors-list">
              <li>
                <a target="_blank" href='http://www.99designs.com'>
                  <div class="sponsor-logo align-logo">
                    <img src="<?php bloginfo('template_url');?>/images/99design.png">
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href='http://www.razoo.com/'>
                  <div class="sponsor-log align-logo">
                    <img src="<?php bloginfo('template_url');?>/images/razoo.png">
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href='http://www.imagebrief.com/'>
                  <div class="sponsor-logo">
                    <img src="<?php bloginfo('template_url');?>/images/imagebrief.png">
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href='http://www.chaordix.com/'>
                  <div class="sponsor-logo">
                    <img src="<?php bloginfo('template_url');?>/images/chaordix.png">
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href='http://www.zooppa.com'>
                  <div class="sponsor-logo align-logo">
                    <img src="<?php bloginfo('template_url');?>/images/zooppa.png">
                  </div>
                </a>
              </li>
              <li>
                <a target="_blank" href='http://www.localmotors.com/'>
                  <div class="sponsor-logo">
                    <img src="<?php bloginfo('template_url');?>/images/localmotors.png">
                  </div>
                </a>
              </li>
              
              <li>
                <a target="_blank" href='http://en.eyeka.com/'>
                  <div class="sponsor-logo align-logo">
                    <img src="<?php bloginfo('template_url');?>/images/eyeka.png">
                  </div>
                </a>
              </li>
            </ul>
        <div class="row">
          <div class= "span12">
            <ul class="sponsors-list">

              <li>
                <a target="_blank" href='http://www.clozette.co'>
                  <div class="sponsor-logo">
                    <img src="<?php bloginfo('template_url');?>/images/clozette.png">
                  </div>
                </a>
              </li>
              
              <li>
                <a target="_blank" href='http://www.expressinmusic.com/home/default.aspx'>
                  <div class="sponsor-logo">
                    <img src="<?php bloginfo('template_url');?>/images/expressmusic.png">
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href='http://www.growvc.com/main/'>
                  <div class="sponsor-logo">
                    <img src="<?php bloginfo('template_url');?>/images/growvc.png">
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href='http://www.frogdesign.com'>
                  <div class="sponsor-logo invert-align">
                    <img src="<?php bloginfo('template_url');?>/images/frog.png">
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href='http://www.talenthouse.com'>
                  <div class="sponsor-logo make-it-bigger">
                    <img src="<?php bloginfo('template_url');?>/images/talenthouse.jpg">
                  </div>
                </a>
              </li>


            </ul>
          </div>
        </div>


        </div>  
        <div class="span12">
          <h2>Technology & strategic partners</h2>
            <ul class="sponsors-list">
              <li>
                <a target="_blank" href='http://www.powertothecrowd.com/'>
                  <div class="sponsor-logo">
                    <img src="<?php bloginfo('template_url');?>/images/engage.png">
                  </div>
                </a>
              </li>
              <li>
                <a target="_blank" href='http://www.appbackr.com/'>
                  <div class="sponsor-logo align-logo">
                    <img src="<?php bloginfo('template_url');?>/images/appbackr.png">
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href='http://www.bnotions.com/'>
                  <div class="sponsor-logo align-logo">
                    <img src="<?php bloginfo('template_url');?>/images/bnotions.png">
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href='http://www.yoose.com/'>
                  <div class="sponsor-logo align-logo">
                    <img src="<?php bloginfo('template_url');?>/images/yoose.png">
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href='http://www.iminds.be/en'>
                  <div class="sponsor-logo">
                    <img src="<?php bloginfo('template_url');?>/images/iminds.png">
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href='http://www.internetmedialabs.com/'>
                  <div class="sponsor-logo make-it-bigger">
                    <img src="<?php bloginfo('template_url');?>/images/internetmedialabs.png">
                  </div>
                </a>
              </li>


            </ul>
        </div>

        <div class="span12">
          <h2>Media Partners</h2>
          <!--<h3>Global Media Partners</h3>
          <h3>Regional Partners</h3>-->
          <!--h3>Bloggers</h3-->
            <ul class="sponsors-list">
              <li>
                <a target="_blank" href='http://www.techinasia.com/'>
                  <div class="sponsor-logo">
                    <img src="<?php bloginfo('template_url');?>/images/techasia.png">
                  </div>
                </a>
              </li>
              
              <li>
                <a target="_blank" href='http://sgentrepreneurs.com'>
                  <div class="sponsor-logo">
                    <img src="<?php bloginfo('template_url');?>/images/sge.png">
                  </div>
                </a>
              </li>
          
              <li>
                <a target="_blank" href='http://www.e27.sg/'>
                  <div class="sponsor-logo">
                    <img src="<?php bloginfo('template_url');?>/images/e27.png">
                  </div>
                </a>
              </li>

              <li>
                <a target="_blank" href='http://www.crowdsourcingblog.de/'>
                  <div class="sponsor-logo make-it-bigger">
                    <img src="<?php bloginfo('template_url');?>/images/crowdsourcingblog.png">
                  </div>
                </a>
              </li>


            </ul>

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
