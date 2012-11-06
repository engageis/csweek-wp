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
    <img src="<?= path("images/logo.png") ?>" />

    <div class="row">
      <div class="lettering span9 offset3">
        <? require 'lettering.php' ?>
      </div>
    </div>
    <div class="row">
      <div class="save-the-date span8 offset4">
        <? require 'save-the-date.php' ?>
      </div>
    </div>
    
  </div>
</header>
