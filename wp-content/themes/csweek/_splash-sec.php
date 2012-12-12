<!-- Subheader for secondery pages
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <!--canvas id="nodes" height="180px" width="1200px" style="z-index:-1">
    </canvas>
    <script type="text/javascript">
      resize_canvas = function(e){
        var canvas = document.getElementsByTagName('canvas')[0];
        canvas.width  = window.innerWidth - 200;
      }
      window.onresize = resize_canvas
      window.onload = resize_canvas
    </script> -->
    
    <div class="row">
      <a href="<?php bloginfo('url'); ?>">
        <img class="span2" src="<?php bloginfo('template_url');?>/images/logo.png" />
      </a>

      <div class="small-lettering span4 offset2">
        <? require 'lettering.php' ?>
      </div>

      <div class="save-the-date span4">
        <? require 'save-the-date.php' ?>
      </div>
    </div>
    
  </div>
</header>
