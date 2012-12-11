<?php
/**
 * Template Name: Speakers
 *
 * @package WordPress
 * @subpackage CSWeek
 * @since Maiz Lulkin 2013
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<!--div id='page'>
  <div class='container'>
    <article class="span11">
      <header>
        <?php $page_quoted_title = get_post_meta($post->ID, 'page_quoted_title', true);?>
        <h2><?php if($page_quoted_title){echo nl2br($page_quoted_title);} else {the_title();} ?></h2>
      </header>
      <?php the_content();?>
      <?php $my_query = new WP_Query('showposts=-1&post_type=speakers'); ?>  
      <?php if($my_query->have_posts()) : ?><?php while($my_query->have_posts()) : $my_query->the_post(); ?>
      <div class="speaker-profile">
        <?php the_post_thumbnail();?>
        <h2><?php the_title();?></h2>
        <?php the_content(); ?>
        <?php endwhile; endif; wp_reset_query(); ?> 
      </div>
    </article>
    <?php $extra_content = get_post_meta($post->ID, 'extra_content', true);?>
    <?php if($extra_content):?>
      <aside id="extra_content"><?php echo $extra_content;?></aside>
    <?php endif;?>
  </div>
</div-->
<?php endwhile;?>

<div id="speakers">
  <div class="container">
    <div class="row">
      <div class="span12">

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/Stephanie Grosser - Speaker [USAID].png" class="speaker-image" />
          <h4><a href="http://www.linkedin.com/pub/stephanie-grosser/5/428/67">Stephanie Grosser</a></h4>
          <h5>USAID</h5>
        </div>

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/Sean Moffitt - Speaker [Wiki Brands].png" class="speaker-image" />
          <h4><a href="http://ca.linkedin.com/in/moffittsean">Sean Moffitt</a></h4>
          <h5>Wiki Brands</h5>
        </div>

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/Lesley Mansford - Speaker [razoo].png" class="speaker-image" />
          <h4><a href="http://www.linkedin.com/in/lesleymansford">Lesley Mansford</a></h4>
          <h5>Razoo</h5>
        </div>

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/Shelley Kuipers - Speaker [Chaordix].png" class="speaker-image" />
          <h4><a href="http://ca.linkedin.com/in/shelleykuipers">Shelley Kuiper</a></h4>
          <h5>Chaordix</h5>
        </div>

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/Bart Becks - Speaker [iMinds].png" class="speaker-image" />
          <h4><a href="http://www.linkedin.com/in/bbecks">Bart Becks</a></h4>
          <h5>iMinds</h5>
        </div>

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/Jennifer Gustetic - Speaker [NASA].png" class="speaker-image" />
          <h4><a href="http://www.linkedin.com/in/jenngustetic ">Jennifer Gustetic</a></h4>
          <h5>NASA</h5>
        </div>

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/Francois Petavy - Speaker [eYeka].png" class="speaker-image" />
          <h4><a href="http://www.linkedin.com/fpetavy">Francois Petavy</a></h4>
          <h5>eYeka</h5>
        </div>

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/John 'Jay' B. Rogers Jr. - Speaker [Local Motors].png" class="speaker-image" />
          <h4><a href="http://www.linkedin.com/pub/john-b-rogers-jr/2/400/b4b">John 'Jay' B. Rogers Jr</a></h4>
          <h5>Local Motors</h5>
        </div>

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/Roger Yuen - Speaker [clozette].png" class="speaker-image" />
          <h4><a href="http://www.linkedin.com/pub/roger-yuen/0/114/4">Roger Yuen</a></h4>
          <h5>Clozette</h5>
        </div>

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/David Berkowitz - Speaker [360i] .png" class="speaker-image" />
          <h4><a href="http://www.linkedin.com/in/dberkowitz">David Berkowitz</a></h4>
          <h5>360i</h5>
        </div>

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/Ross Dawson - Speaker [Getting Results from Crowds].png" class="speaker-image" />
          <h4><a href="http://www.linkedin.com/in/futuristkeynotespeaker">Ross Dawson</a></h4>
          <h5>Getting Results from Crowds</h5>
        </div>

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/Simon Moss - Speaker [ImageBrief].png" class="speaker-image" />
          <h4><a href="http://www.linkedin.com/in/simonmoss">Simon Moss</a></h4>
          <h5>Image Brief</h5>
        </div>

        <div class="speaker-box"
          <img src="csweek-wp/wp-content/themes/csweek/images/Tim Leberecht - Speaker [frogdesign]" class="speaker-image" />
          <h4><a href="http://www.linkedin.com/in/tleberecht">Tim Leberecht</a></h4>
          <h5>frogdesign</h5>
        </div>

      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
