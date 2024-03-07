<?php get_header(); ?>

<div class="content">

    <div class="c-homepage">
	<div class="c-homepage__header">
            <?php
                $smallTitle = get_field('small_title'); 
                $title = get_field('title');
                $desc = get_field('description');
                $button = get_field('button');
                $image = get_field('image');
            ?>
            <div class="c-homepage__header-content">
                <div class="c-homepage__header-main-content">
                <h5 class="c-homepage__header-small-title"><?php echo $smallTitle; ?></h5>
                <h1 class="c-homepage__header-title"><?php echo $title; ?></h1>
                <p class="c-homepage__header-desc"><?php echo $desc; ?></p>
                <a class="c-homepage__header-cta" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
            </div>
            <figure class="c-homepage__header-image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
            </div>
            <div class="c-homepage__wave-shape">
                <img src="<?php echo get_template_directory_uri(); ?>/img/wave.svg" alt="">
            </div>
</div>
        <div class="c-homepage__about-section gutenberg-styles">
            <?php 
                $smallAboutTitle = get_field('about_small_title');
                $title = get_field('about_title');
                $desc = get_field('about_description');
                $features = get_field('about_features');
                $cta = get_field('about_cta');
                $image = get_field('about_image');
            ?>

            <div class="c-homepage__about-content">
                <h5 class="c-homepage__about-small-title"><?php echo $smallAboutTitle; ?></h5>
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


        <div class="c-homepage__classes-section gutenberg-styles">
                <?php $classesTitle = get_field('classes_title'); 
                ?>
                <h2 class="c-homepage__classes-title"><?php echo $classesTitle; ?></h2>
                <?php if( have_rows('classes') ): ?>
                    <ul class="c-homepage__classes">
                <?php while( have_rows('classes') ) : the_row();

                  $image = get_sub_field('class_image'); 
                  $title = get_sub_field('class_title');
                  $price = get_sub_field('class_price');
                  $desc = get_sub_field('class_description');
                  $age = get_sub_field('class_age');
                  $size = get_sub_field('class_size');
                  $teacherSize = get_sub_field('educator_size');
                 ?>
        <li class="c-homepage__class">
        <div class="c-homepage__class-img">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <div class="c-homepage__class-content">
            <h4 class="c-homepage__class-title"><?php echo $title; ?></h4>
            <p class="c-homepage__class-desc"><?php echo $desc; ?></p>
            <ul class="c-homepage__class-meta-info">
                <li class="c-homepage__class-age">
                    <span>For Ages</span>
                    <?php echo $age; ?>
                </li>
                <li></li>
                <li></li>
            </ul>
        </div>

    </li>

   <?php endwhile; 
         endif;
   ?>
    </ul>
            </div>



    </div>
</div>

<?php get_footer(); ?>