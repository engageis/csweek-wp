<?php
function path($p){
  return "/wp-content/themes/csweek/$p";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Crowdsourcing Week Conference 2013</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" media="all" href="<?= path("style.css") ?>" />

<!--     <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
 -->  
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

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
                <a href="./index.html">
                  <img src="<?= path("images/blog.png") ?>" /> Blog</a>
              </li>
              <li class="">
                <a href="./getting-started.html">
                  <img src="<?= path("images/facebook.png") ?>" />
                  Facebook</a>
              </li>
              <li class="active">
                <a href="./scaffolding.html">
                  <img src="<?= path("images/twitter.png") ?>" />
                  Twitter</a>
              </li>
              <li class="">
                <a href="./base-css.html">
                  <img src="<?= path("images/linkedin.png") ?>" />
                  LinkedIn</a>
              </li>
              <li class="">
                <a href="./components.html">
                <img src="<?= path("images/plus.png") ?>" />
                Google</a>
              </li>
              <li class="">
                <a href="./javascript.html">
                  <img src="<?= path("images/youtube.png") ?>" />
                  Youtube</a>
              </li>
              <li class="">
                <a href="./customize.html">
                  <img src="<?= path("images/contact.png") ?>" />
                  Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<!-- Subhead
================================================== -->
<!-- canvas#nodes[width="1200px" height="600px"]
button#circle YAY -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <? require 'splash.php' ?>
  </div>
</header>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    


    <script src="<?= path("bootstrap/js/bootstrap.js") ?>"></script>
    



    <script src="<?= path("js/lines.js") ?>"></script>



  </body>
</html>