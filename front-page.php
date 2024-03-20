<?php get_header(); ?>

<div class="content">

    <div class="c-homepage">

    <div class="c-homepage__header-section">

        <?php if( have_rows('header_images') ): ?>

        <ul class="c-homepage__header-images">
    <?php while( have_rows('header_images') ) : the_row();

        $image = get_sub_field('header_image');
        $cta = get_sub_field('header_cta'); ?>
        
        <li class="c-homepage__header-image">
            <figure>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
            <div class="c-homepage__header-cta-container">
                <a href="<?php echo $cta['url']; ?>" class="c-homepage__header-cta"><?php echo $cta['title']; ?></a>
            </div>
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
                $features = get_field('about_features');
                $cta = get_field('about_cta');
                $image = get_field('about_image');
            ?>

            <div class="c-homepage__about-content">
                <h2 class="c-homepage__about-title"><?php echo $title; ?></h2>
                <p class="c-homepage__about-desc"><?php echo $desc; ?></p>

                <div class="c-homepage__about-image-features">

                <figure class="c-homepage__about-image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>


                <div class="c-homepage__about-features-section">

                <h3 class="c-homepage__about-features-title">What we offer</h3>
            
                <?php if( have_rows('about_features') ): ?>
                <ul class="c-homepage__about-features">
                <?php while( have_rows('about_features') ) : the_row();
                $feature = get_sub_field('feature'); ?>
                <li class="c-homepage__about-feature">
                    <?php echo $feature; ?>
                </li>

                    <?php endwhile; ?>
    </ul>

    <?php  else : endif; ?>

    <a class="c-homepage__about-cta" href="<?php echo $cta['url']; ?>"><?php echo $cta['title']; ?></a>

    </div>
    </div>

        </div>


</div>

<?php get_footer(); ?>