<?php get_header(); ?>

<div class="content">

  <div class="c-fun-dayz-booking">

  <h1 class="c-fun-dayz-booking__title"><?php the_title(); ?></h1>

    <?php 
      $image = get_field('image');
      $content = get_field('content');
    ?>

  <figure class="c-fun-dayz-booking__image">
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
  </figure>

  <div class="c-fun-dayz-booking__content">
      <?php echo $content; ?>
  </div>


  </div>
</div>

<?php get_footer(); ?>