<?php
function path($p){
  return "/csweek/wp-content/themes/csweek/$p";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <? require '_head.php' ?>
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">
    <? require '_navbar.php' ?>

    <div>
      <?php the_content();?>
    </div>

    <? require '_footer.php' ?>    
    <? require '_sponsors.php'?> 

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?= path("bootstrap/js/bootstrap.js") ?>"></script>
    <script src="<?= path("js/lines.js") ?>"></script>
  </body>
</html>
