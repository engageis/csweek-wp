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
echo "Hey";
$my_query = new WP_Query('showposts=3&post_type=post');
if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();
  echo '<li>';
  the_title();
  echo '</li>';
endwhile; endif;
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