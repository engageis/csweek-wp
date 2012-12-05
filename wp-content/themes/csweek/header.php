<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title( '', true);?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="engage.is">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!--     <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
 -->  
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
            <em>FIND US HERE</em>
          </li>
          <li class="">
            <a target="_blank" href="http://www.facebook.com/CrowdsourcingWeek">
              <img src="<?php bloginfo('template_url');?>/images/facebook.png" />
              Facebook</a>
          </li>
          <li>
            <a target="_blank" href="http://www.twitter.com/CrowdWeek">
              <img src="<?php bloginfo('template_url');?>/images/twitter.png" />
              Twitter</a>
          </li>
          <li class="">
            <a target="_blank" href="https://www.linkedin.com/company/crowdsourcing-week">
              <img src="<?php bloginfo('template_url');?>/images/linkedin.png" />
              LinkedIn</a>
          </li>
          <li class="">
            <a target="_blank" href="http://plus.google.com/116414871015404417703">
            <img src="<?php bloginfo('template_url');?>/images/plus.png" />
            Google</a>
          </li>
          <li class="">
            <a target="_blank" href="http://www.youtube.com/crowdsourcingweek">
              <img src="<?php bloginfo('template_url');?>/images/youtube.png" />
              Youtube</a>
          </li>
          <li class="">
            <a href="contact.php">
              <img src="<?php bloginfo('template_url');?>/images/contact.png" />
              Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php if is_front_page(): ?>
<? require '_splash.php' ?>
<?php else: ?>
<? require '_splash-sec.php' ?>
<?php endif;?>      
<!-- <hr class="menu-bar" /> -->
<ul id="menu" class="pager">
  <li>
    <a href="index.php?page_id=4">
      <div class="icon about"></div>
      <div>About</div>
    </a>
  </li>
  <li>
    <a href="index.php?page_id=24">
      <div class="icon speakers"></div>
      <div>Speakers</div>
    </a>
  </li>
  <li>
    <a href="index.php?page_id=17">
      <div class="icon schedule"></div>
      <div>Schedule</div>
    </a>
  </li>
  <li>
    <a href="index.php?page_id=9">
      <div class="icon startup-competition"></div>
      <div>Startup Competition</div>
    </a>
  </li>
  <li>
    <a href="index.php?page_id=58">
      <div class="icon how-to-get-involved"></div>
      <div>Board of advisors</div>
    </a>
  </li>
  <li>
    <a href="index.php?page_id=60">
      <div class="icon the-team"></div>
      <div>How to get involved</div>
    </a>
  </li>
  <li>
    <a href="index.php?page_id=62">
      <div class="icon board-of-advisors "></div>
      <div>The team</div>
    </a>
  </li>
  <li>
    <a href="index.php?page_id=64">
      <div class="icon csw-global"></div>
      <div>1-day global summit</div>
    </a>
  </li>
  <li>
    <a href="blog.php">
      <div class="icon the-blog"></div>
      <div>Blog</div>
    </a>
</ul>