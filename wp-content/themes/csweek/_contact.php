<div id="contact">
  <div class="container">
    <div class="row">
      <!--div class="span7">
        <h2> Blog Feed </h2>
        <style>
          #blog p{color: #ccc;}
        </style>
        <div id="blog">
          <?php $my_query = new WP_Query('showposts=5&post_type=post&order=DESC'); ?>  
          <?php if($my_query->have_posts()) : ?><?php while($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="post">
              <small style="color:#666;margin:0;line-height:0"><?php the_date(); ?></small>
              <br />
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <?php the_excerpt(); ?>
            </div>
          <?php endwhile; endif; wp_reset_query(); ?>
        </div>
      </div-->
      <div class="span5">
        <h2 id="contact-info">Contact us</h2>
        <h3>Send us a <a href="<?= get_permalink_by_name("contact"); ?>">message</a></h3>
        <h3>Or for media contact,<a href="mailto:media@crowdsourcingweek.com"> media@crowdsourcingweek.com</h3>
      </div>
      <div class="span4">
        <h2>Share it</h2>
        <? require '_add-this.php' ?>
      </div>
      <div class="span3" id="ludvk">
        <a target="_blank" href="http://www.ludvikplus.com">
          <img src="<?php bloginfo('template_url');?>/images/logo_ludvk.jpg"/>
        </a>
        <p>©2012 Crowdsourcing Week</p>
      </div>
      </div>
    </div>
  </div>
</div>
