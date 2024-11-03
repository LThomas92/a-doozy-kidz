<?php get_header(); ?>

<div class="content">

<div class="c-saturday-hangouts-content">
  <?php $title = get_field('title'); 
        $image = get_field('image');
        $content = get_field('content');
  ?>

<h1 class="c-saturday-hangouts-content__title"><?php echo $title;?></h1>

   <figure class="c-saturday-hangouts-content__image">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
      </figure>

      <div class="c-saturday-hangouts-content__main">
      <?php echo $content; ?>

      <div>
        <?php echo the_content(); ?>
      </div>
      </div>

</div>


</div>

<?php get_footer(); ?>