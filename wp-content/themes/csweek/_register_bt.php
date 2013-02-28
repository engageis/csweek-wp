<?php
  $exp_date = "2013-03-04";
  $todays_date = date("Y-m-d");
  $today = strtotime($todays_date);
  $expiration_date = strtotime($exp_date);
?>
<?php if ($expiration_date > $today): ?>
<a href="<?= get_permalink_by_name("contact"); ?>" class="save-the-date">Pre-register now</a>
<?php else: ?>
<a href="http://crowdsourcingweek.eventbrite.com/" target="_blank" class="save-the-date">Register now</a>
<?php endif;?>