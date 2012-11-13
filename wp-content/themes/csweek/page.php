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
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article>
          <header>
            <?php $page_quoted_title = get_post_meta($post->ID, 'page_quoted_title', true);?>
            <h2><?php if($page_quoted_title){echo nl2br($page_quoted_title);} else {the_title();} ?></h2>
          </header>
          <?php the_content();?>
        </article>
        <?php $extra_content = get_post_meta($post->ID, 'extra_content', true);?>
        <?php if($extra_content):?>
        <aside id="extra_content"><?php echo $extra_content;?></aside>
        <?php endif;?>
      <?php endwhile;?>
    </div>

    <? require '_footer.php' ?>    
    <? require '_sponsors.php'?> 

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?= path("bootstrap/js/bootstrap.js") ?>"></script>
    <script src="<?= path("js/lines.js") ?>"></script>
  </body>
</html>
