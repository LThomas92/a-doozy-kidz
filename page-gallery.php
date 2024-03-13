<?php get_header(); ?>

<section class="c-gallery">
    <?php if( have_rows('images') ): ?>

    <ul class="c-gallery__list">
    <?php while( have_rows('images') ) : the_row(); ?>

       <?php $image = get_sub_field('image'); ?>

       <li class="c-gallery__list-image">
            <figure class="c-gallery__image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
            <p class="c-gallery__image-caption"><?php echo $image['caption']; ?></p>
       </li>
        
 <?php 
    endwhile; ?>
    </ul>

<?php 
else :
endif; 
?>
</section>

<?php get_footer(); ?>