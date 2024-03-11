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
                      $classesDesc = get_field('classes_description'); 
                      $classesCTA = get_field('classes_cta');
                ?>
                <h2 class="c-homepage__classes-title"><?php echo $classesTitle; ?></h2>

                <div class="c-homepage__classes-desc">
                    <p><?php echo $classesDesc; ?></p>
                </div>

                <?php if( have_rows('classes') ): ?>
                    <ul class="c-homepage__classes">
                <?php while( have_rows('classes') ) : the_row();

                  $image = get_sub_field('class_image'); 
                  $title = get_sub_field('class_title');
                  $price = get_sub_field('class_price');
                  $desc = get_sub_field('class_description');
                 ?>
        <li class="c-homepage__class">
        <div class="c-homepage__class-img">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
        <div class="c-homepage__class-content">
            <h4 class="c-homepage__class-title"><?php echo $title; ?></h4>
            <p class="c-homepage__class-desc"><?php echo $desc; ?></p>
            <p class="c-homepage__class-price"><?php echo $price; ?></p>
        </div>

    </li>

   <?php endwhile; 
         endif;
   ?>
    </ul>

    <a class="c-homepage__classes-cta" href="<?php echo $classesCTA['url']; ?>"><?php echo $classesCTA['title']; ?></a>
            </div>


        <div class="c-homepage__testimonials">
            <?php 
                $testimonialsTitle = get_field('testimonials_title');
                $testimonialsCTA = get_field('testimonials_cta');
            ?>
            <div class="c-homepage__testimonials-content">
                <h2 class="c-homepage__testimonials-title"><?php echo $testimonialsTitle; ?></h2>
                <div class="c-homepage__testimonial-cta-container">
                <a href="<?php echo $testimonialsCTA['url']; ?>" class="c-homepage__testimonials-cta"><?php echo $testimonialsCTA['title']; ?></a>
                </div>

                <?php $testimonials = get_field('testimonials'); 
                if ( $testimonials ): ?>
            <ul class="c-homepage__testimonials-list">
             <?php foreach( $testimonials as $testimonial ): 
                    $link = get_permalink( $testimonial->ID );
                    $title = get_the_title( $testimonial->ID );
                    $content = apply_filters( 'the_content', $testimonial->post_content );
                    $testimonialRelation = get_field('testimonial_relation' , $testimonial->ID);
                    $rating = get_field('testimonial_rating', $testimonial->ID);
                ?>
        <li class="c-homepage__testimonial">
            <div class="c-homepage__testimonials-stars">
            <?php if ( $rating ) {
		$average_stars = round( $rating * 2 ) / 2;
		$drawn = 5;
		echo '<div class="star-rating">';
		
		// full stars.
		for ( $i = 0; $i < floor( $average_stars ); $i++ ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>';
		}

		// half stars.
		if ( $rating - floor( $average_stars ) === 0.5 ) {
			$drawn--;
			echo '<svg aria-hidden="true" data-prefix="fas" data-icon="star-half-alt" class="svg-inline--fa fa-star-half-alt fa-w-17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 536 512"><path fill="currentColor" d="M508.55 171.51L362.18 150.2 296.77 17.81C290.89 5.98 279.42 0 267.95 0c-11.4 0-22.79 5.9-28.69 17.81l-65.43 132.38-146.38 21.29c-26.25 3.8-36.77 36.09-17.74 54.59l105.89 103-25.06 145.48C86.98 495.33 103.57 512 122.15 512c4.93 0 10-1.17 14.87-3.75l130.95-68.68 130.94 68.7c4.86 2.55 9.92 3.71 14.83 3.71 18.6 0 35.22-16.61 31.66-37.4l-25.03-145.49 105.91-102.98c19.04-18.5 8.52-50.8-17.73-54.6zm-121.74 123.2l-18.12 17.62 4.28 24.88 19.52 113.45-102.13-53.59-22.38-11.74.03-317.19 51.03 103.29 11.18 22.63 25.01 3.64 114.23 16.63-82.65 80.38z"/></svg>';
		}

		// empty stars.
		for ( $i = 0; $i < $drawn; $i++ ) {
			echo '<svg aria-hidden="true" data-prefix="far" data-icon="star" class="svg-inline--fa fa-star fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>';
		}
		echo '</div>';
	}
?>
                
                 </div>
           <div class="c-homepage__testimonial-content"><?php echo $content; ?></div>
           <h4 class="c-homepage__testimonial-title"><?php echo $title; ?></h4>
           <p class="c-homepage__testimonial-relation"><?php echo $testimonialRelation; ?></p>
          </li>
    <?php endforeach; ?>
    </ul>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>

            </div>

            
        </div>



    </div>
</div>

<?php get_footer(); ?>