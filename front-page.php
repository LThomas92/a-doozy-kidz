<?php get_header(); ?>

<div class="content">

    <div class="c-homepage">

    <div class="c-homepage__header-section">

        <?php if( have_rows('header_images') ): ?>

        <ul class="c-homepage__header-images">
    <?php while( have_rows('header_images') ) : the_row();

        $image = get_sub_field('header_image');
        ?>
        
        <li class="c-homepage__header-image">
            <figure>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
        </li>

    <?php 
    endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>
    </div>


        <div class="c-homepage__about-section">
            <?php 
                $title = get_field('about_title');
                $desc = get_field('about_description');
            ?>

            <div class="c-homepage__about-content">
                <h2 class="c-homepage__about-title"><?php echo $title; ?></h2>
                <div class="c-homepage__about-desc"><?php echo $desc; ?></div>
</div>


<?php if( have_rows('about_images') ): ?>

    <ul class="c-homepage__about-images">
    <?php while( have_rows('about_images') ) : the_row();

        $aboutImage = get_sub_field('about_image'); ?>
        <li class="c-homepage__about-image">
          <figure>
            <img src="<?php echo $aboutImage['url']; ?>" alt="<?php echo $aboutImage['alt']; ?>">
          </figure>
        </li>

    
    <?php endwhile; ?>
    </ul>

<?php 
else :
    // Do something...
endif; ?>



    </div>
        </div>
</div>

<?php get_footer(); ?>