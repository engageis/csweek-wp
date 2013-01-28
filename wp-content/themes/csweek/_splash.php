<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <img class="map" src="<?php bloginfo('template_url');?>/images/map.png" />

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
    <a href="<?php echo get_settings('home'); ?>">
      <img src="<?php bloginfo('template_url');?>/images/logo.png" />
    </a>

<!--     <div style="width: 250px; float: right; background: transparent;" class="fb-like" data-href="http://crowdsourcingweek.com/" data-send="false" data-width="250" data-show-faces="true" data-colorscheme="dark"></div> -->
    <!--div style="width: 250px; float: right;" class="fb-like-box" data-href="http://www.crowdsourcingweek.com" data-width="250" data-show-faces="true" data-stream="false" data-header="true"></div>-->
    <!-- <div class="fb-like" data-href="http://crowdsourcingweek.com/" data-send="false" data-width="450" data-show-faces="true" ></div> -->

    <div class="row">
      <div class="lettering span8">
        <div class="row-fluid">
          <div class="span12">
            <h1>
              <span class="days">03-07</span>
              <span class="month">JUNE</span>
            </h1>
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12">
            <h1>
              <span class="year">2013</span>
              <span class="where">SINGAPORE</span>
            </h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="save-the-date span8">
        <a href="<?= get_permalink_by_name("contact"); ?>">
          <button class="btn btn-warning btn-save-the-date">PRE-REGISTER NOW</button>
      </a>
        <!--? require '_cal.php' ?-->
      </div>
    </div>
    
  </div>
</header>

