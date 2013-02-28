<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php wp_title( '', true);?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="engage.is">
  <meta property="og:title" content="Crowdsourcing Week" />
  <meta property="og:type" content="activity" />
  <meta property="og:url" content="http://crowdsourcingweek.com" />
  <meta property="og:image" content="http://crowdsourcingweek.com/wp-content/themes/csweek/images/logo.png" />
  <meta property="og:site_name" content="Crowdsourcing Week" />
  <meta property="fb:admins" content="100002101958809" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".bs-docs-sidebar">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=387300048014375";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Navbar
================================================== -->
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <div class="nav-collapse collapse">
        <ul class="nav">
          <li>
            <em>FIND US HERE <span class="red-arrow"> >></span></em>
          </li>
          <li class="">
            <a target="_blank" href="http://www.facebook.com/CrowdsourcingWeek">
              <img src="<?php bloginfo('template_url');?>/images/facebook.png" />
              Facebook
            </a>
          </li>
          <li>
            <a target="_blank" href="http://www.twitter.com/CrowdWeek">
              <img src="<?php bloginfo('template_url');?>/images/twitter.png" />
              Twitter
            </a>
          </li>
          <li class="">
            <a target="_blank" href="http://www.linkedin.com/groups/CROWDSOURCING-WEEK-4335947?gid=4335947&trk=hb_side_g">
              <img src="<?php bloginfo('template_url');?>/images/linkedin.png" />
              LinkedIn
            </a>
          </li>
          <li class="">
            <a target="_blank" href="http://plus.google.com/116414871015404417703">
              <img src="<?php bloginfo('template_url');?>/images/plus.png" />
              Google
            </a>
          </li>
          <li class="">
            <a target="_blank" href="http://www.youtube.com/crowdsourcingweek">
              <img src="<?php bloginfo('template_url');?>/images/youtube.png" />
              Youtube
            </a>
          </li>
          <li class="">
            <a href="<?= get_permalink_by_name("contact"); ?>">
              <img src="<?php bloginfo('template_url');?>/images/contact.png" />
              Contact
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php if(is_front_page()): ?>
<? require '_splash.php' ?>
<?php else: ?>
<? require '_splash-sec.php' ?>
<?php endif;?>
<div class='menu-container'>
  <div class='container'>
    <?php wp_nav_menu( array( 'menu_class' => 'pager', 'menu_id' => 'menu', 'theme_location' => 'top_menu', 'container' => 'ul') ); ?>
  </div>
</div>