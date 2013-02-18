<header class="jumbotron subhead home" id="overview">
  <div class="container">
    <img class="map" src="<?php bloginfo('template_url');?>/images/map.png" />

    <canvas id="nodes" height="540px" width="1200px" style="z-index:-1">
    </canvas>
    <script type="text/javascript">
      resize_canvas = function(e){
        var canvas = document.getElementsByTagName('canvas')[0];
        if(window.innerWidth <= 720){
          canvas.style.display = 'none';
        }
        else {
          canvas.width  = window.innerWidth;
          canvas.style.display = 'block';
        }
      }
      window.onresize = resize_canvas
      window.onload = resize_canvas
    </script>
    <a href="<?php echo get_settings('home'); ?>">
      <img class="site_logo" src="<?php bloginfo('template_url');?>/images/logo.png" />
    </a>
    <div class="lettering">
      <h1>
        <span class="days">03-07</span>
        <span class="month">JUNE</span>
      </h1>
      <h1>
        <span class="year">2013</span>
        <span class="where">SINGAPORE</span>
      </h1>
    </div>
    <a href="<?= get_permalink_by_name("contact"); ?>" class="save-the-date">Pre-register now</a>
  </div>
</header>