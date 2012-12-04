<?php
function path($p){
  return "wp-content/themes/csweek/$p";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <? require '_head.php' ?>
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">
    <? require '_navbar.php' ?>
    <? require '_splash.php' ?>
    <? require '_menu.php' ?>
    <? require '_welcome.php' ?>
    <? require '_daily-topics.php' ?>
    
    <? require '_footer.php' ?>    
    
    <? require '_sponsors.php'?> 

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?= path("bootstrap/js/bootstrap.js") ?>"></script>
    <script src="<?= path("js/lines.js") ?>"></script>
  </body>
</html>