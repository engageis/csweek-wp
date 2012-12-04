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


    <ul>
<?php
// The Query
query_posts();

// The Loop
while ( have_posts() ) : the_post();
  echo '<li>';
  the_title();
  echo '</li>';
endwhile;

// Reset Query
wp_reset_query();
?>
    </ul>

    <? require '_sponsors.php'?> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?= path("bootstrap/js/bootstrap.js") ?>"></script>
    <script src="<?= path("js/lines.js") ?>"></script>
  </body>
</html>