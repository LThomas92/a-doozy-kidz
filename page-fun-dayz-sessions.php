<?php get_header(); ?>

<div class="content">

<div class="c-fun-dayz-sessions">

<?php $title = get_field('title');
      $content = get_field('content');
      $smallImage = get_field('small_image');
?>

<h1 class="c-fun-dayz-sessions__title"><?php echo $title;?></h1>

<?php if( have_rows('session_images') ): ?>

<ul class="c-fun-dayz-sessions__images">
<?php while( have_rows('session_images') ) : the_row();

    $sessionImage = get_sub_field('image'); ?>
    <li class="c-fun-dayz-sessions__image">
      <figure>
        <img src="<?php echo $sessionImage['url']; ?>" alt="<?php echo $sessionImage['alt']; ?>">
      </figure>
    </li>


<?php endwhile; ?>
</ul>

<?php 
else :
// Do something...
endif; ?>




<div class="c-fun-dayz-sessions__content">
      <?php echo $content; ?>
</div>

<div class="c-fun-dayz-sessions__booking-section">
  <?php echo the_content(); ?>
</div>

</div>




</div>
</div>

<?php get_footer(); ?>