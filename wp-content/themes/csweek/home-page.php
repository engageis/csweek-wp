<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage CSWeek
 * @since Maiz Lulkin 2013
 */

get_header(); ?>

<div id="welcome">
  <div class="container">
    <div class="row">
      <div class="span8"> 
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      </div>
      <div class="offset1 span3">
        <!-- <div class="fb-like" data-href="http://www.facebook.com/CrowdsourcingWeek?fref=ts" data-send="false" data-width="250" data-show-faces="true"></div> -->
        <div id="open-registration">
          <div class="pad">
            <div class="inner">
              <h2>
                <span>save the</span>
                <span class="open">date</span>
                <div class="my-cal">
                  <? require '_cal.php' ?>
                </div>
              </h2>
            </div>
          </div>
        </div>

        /div<?php endwhile;?>
      </div>
    </div>
  </div>
</div>

<div id="support">
  <div class="container">
    <div class="row">
      <div class="offset4 span8">
        <h2>Supported by</h2>
        <img src="wp-content/themes/csweek/images/secb.png" id="secb-logo"/>
      </div>
    </div>
  </div>
</div>

<div id="daily-topics">
  <div class="container">
    <div class="row">
      <div class="span12">
        <h3>Crowdsourcing Week Asia 2013 to Bring Innovators to Center Stage</h3>
        <h4>Crowdsourcing Week Asia (CSWA) 2013 will bring together the best and brightest minds in the field across disciplines. The 5-day curated event will highlight new directions in crowdsourcing in:</h4>
        <br />
        <ul class="span3">
          <li>Science/Tech</li>
          <li>Enterprise</li>
          <li>Government/NGO</li>
          <li>Urban Planning</li>
          <li>Tourism</li>
        </ul>
        <ul class="span3">
          <li>Crowdfunding & Start-ups</li>
          <li>Advertising</li>
          <li>Marketing</li>
          <li>Citizen Journalism</li>
        </ul>
        <ul class="span3">
          <li>Design & Fashion</li>
          <li>Film</li>
          <li>Photography</li>
          <li>Open Source... and more.</li>
        </ul>

    <div class="span12">
      <div class="row">
        <h3>Who Will Benefit the Most at Crowdsourcing Week?</h3>
        <ul class="span3">
          <li>CEO</li>
          <li>CMO</li>
          <li>COO</li>
          <li>CFO</li>
        </ul>
        <ul class="span3">
          <li>CCO</li>
          <li>CIO</li>
          <li>Presidents</li>
          <li>Vice-Presidents</li>
        </ul>
        <ul class="span3">
          <li>Directors</li>
          <li>Managers</li>
          <li>Partners</li>
        </ul>
      </div>
    </div>

        <h4>This interactive and engaging global event will be complete with successful crowdsourcing practitioners:</h4>
        <ul class="list">
          <li>Government and NGO's officials</li>
          <li>Scientists</li>
          <li>Venture Capitalists</li>
          <li>Angel Investors</li>
        </ul>
        <ul class="list">
          <li>Architects</li>
          <li>Engineers</li>
          <li>Academics</li>
          <li>Healthcare providers</li>
        </ul>
        <ul class="list">
          <li>Agencies</li>
          <li>Brand Managers</li>
          <li>Designers</li>
        </ul>
        <br />
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
<?php get_footer(); ?>
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
        <h2 id="contact-info">Contact Info</h2>
        <h3> Do you want to <a class="" href="https://twitter.com/href">get in touch with us</a> ?</h3>
      </div>
      <div class="span4">
        <h2>Share it</h2>
        <? require '_add-this.php' ?>
      </div>
      <div class="span3" id="ludvk">
        <img src="wp-content/themes/csweek/images/logo_ludvk.jpg"/>
        <p>©2012 Crowdsourcing Week</p>
      </div>
      </div>
    </div>
  </div>
</div>
