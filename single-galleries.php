<?php get_header(); ?>

<section class="c-single-gallery">
    <h1 class="c-single-gallery__title"><?php the_title(); ?></h1>
    <div class="c-single-gallery__desc">
        <?php echo get_the_content(); ?>
    </div>

    <div class="c-single-gallery__section">
    <?php if( have_rows('images') ): ?>

    <ul class="c-single-gallery__list">
    <?php while( have_rows('images') ) : the_row();
        $image = get_sub_field('image'); ?>
    <li class="c-single-gallery__list-image">
        <figure>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </figure>
    </li>

    <?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>
    </div>
</section>



<?php get_footer(); ?>