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

    <div>
      <? require '_splash-sec.php'?> 
      <? require '_menu.php' ?>
    </div>


    <iframe id="wufooFormz7x3x5" height="659" allowtransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none" src="http://csweek.wufoo.com/embed/z7x3x5/def/embedKey=z7x3x5694340&amp;referrer=http%3Awuslashwuslashcrowdsourcingweek.comwuslash">&lt;a href="http://csweek.wufoo.com/forms/z7x3x5/" title="html form"&gt;Fill out my Wufoo form!&lt;/a&gt;</iframe>

    <? require '_sponsors.php'?> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?= path("bootstrap/js/bootstrap.js") ?>"></script>
    <script src="<?= path("js/lines.js") ?>"></script>
  </body>
</html>