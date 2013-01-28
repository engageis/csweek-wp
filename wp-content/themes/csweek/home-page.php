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
        <? require '_cal.php' ?>
        <a class="twitter-timeline" href="https://twitter.com/CrowdWeek" data-widget-id="293726412903424002">Tweets by @CrowdWeek</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        <?php endwhile;?>
      </div>
    </div>
  </div>
</div>

<div id="support">
  <div class="container">
    <div class="row">
      <div class="offset4 span8">
        <h2>Supported by</h2>
        <a href="http://www.yoursingapore.com/content/mice/en/why-singapore/singapore-exhibition-convention-bureau.html"><img src="<?php bloginfo('template_url');?>/images/secb.png" id="secb-logo"/></a>
      </div>
    </div>
  </div>
</div>

<div id="daily-topics">
  <div class="container">
    <div class="row">
      <div class="span12">
        <h3>Crowdsourcing Week will Bring Innovators to Center Stage</h3>
        <h4>Crowdsourcing Week (CSW) 2013 will bring together the best and brightest minds in the field across disciplines. The 5-day curated event will highlight new directions in crowdsourcing in:</h4>
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
