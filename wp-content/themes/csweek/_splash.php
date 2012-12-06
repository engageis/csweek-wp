<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <canvas id="nodes" height="540px" width="1200px" style="z-index:-1">
    </canvas>
    <script type="text/javascript">
      resize_canvas = function(e){
        var canvas = document.getElementsByTagName('canvas')[0];
        canvas.width  = window.innerWidth - 200;
      }
      window.onresize = resize_canvas
      window.onload = resize_canvas
    </script>
    <img src="<?php bloginfo('template_url');?>/images/logo.png" />

    <div style="width: 300px; float: right; background: transparent;" class="fb-like" data-href="http://crowdsourcingweek.com/" data-send="false" data-width="300" data-show-faces="true" data-colorscheme="dark"></div>
    <!-- <div class="fb-like" data-href="http://crowdsourcingweek.com/" data-send="false" data-width="450" data-show-faces="true" ></div> -->

    <div class="row">
      <div class="lettering span8 offset4">
        <? require 'lettering.php' ?>
      </div>
    </div>
    <div class="row">
      <div class="save-the-date span8 offset4">
        <button class="btn btn-warning btn-save-the-date">Reserve your ticket</button>
        <!--? require '_cal.php' ?-->
      </div>
    </div>
    
  </div>
</header>

