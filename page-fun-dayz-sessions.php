<?php get_header(); ?>

<div class="content">

<div class="c-fun-dayz-sessions">

<?php $title = get_field('title');
      $content = get_field('content');
      $image = get_field('main_image');
      $schedule = get_field('schedule');
      $bookingCTA = get_field('booking_cta');
?>

<h1 class="c-fun-dayz-sessions__title"><?php echo $title;?></h1>

<div class="c-fun-dayz-sessions__content">
      <?php echo $content; ?>
</div>

<figure class="c-fun-dayz-sessions__image">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
</figure>

<div class="c-fun-dayz-sessions__schedule">
      <?php echo $schedule; ?>
</div>

<div class="c-fun-dayz-sessions__cta-container">

<a class="c-fun-dayz-sessions__booking-cta" href="<?php echo $bookingCTA['url']; ?>"><?php echo $bookingCTA['title']; ?></a>

</div>




</div>
</div>

<?php get_footer(); ?>