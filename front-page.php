<?php get_header(); ?>

<div class="content">

    <div class="c-homepage">
        <div class="c-homepage__header">

            <?php 
                $title = get_field('title');
                $desc = get_field('description');
                $button = get_field('button');
                $image = get_field('image');
            ?>
            <div class="c-homepage__header-content">
                <div class="c-homepage__header-main-content">
                <h1 class="c-homepage__header-title"><?php echo $title; ?></h1>
                <p class="c-homepage__header-desc"><?php echo $desc; ?></p>
                <a class="c-homepage__header-cta" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
            </div>
            <figure class="c-homepage__header-image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
            </div>
        </div>

        <div class="c-homepage__about-section">
            <?php 
                $title = get_field('about_title');
                $desc = get_field('about_description');
                $features = get_field('about_features');
                $cta = get_field('about_cta');
                $bigImage = get_field('big_image');
                $smallImage = get_field('small_image');
            ?>


            <div class="c-homepage__about-images-section">
                <figure class="c-homepage__about-big-image">
                    <img src="<?php echo $bigImage['url']; ?>" alt="<?php echo $bigImage['alt']; ?>">
                </figure>

                <figure class="c-homepage__about-small-image">
                    <img src="<?php echo $smallImage['url']; ?>" alt="<?php echo $smallImage['alt']; ?>">
                </figure>
            </div>


            <div class="c-homepage__about-content">
                <h2 class="c-homepage__about-title"><?php echo $title; ?></h2>
                <p class="c-homepage__about-desc"><?php echo $desc; ?></p>
                <?php if( have_rows('features') ): ?>
                <ul class="c-homepage__about-features">
                <?php while( have_rows('features') ) : the_row();
                $feature = get_sub_field('feature'); ?>
                <li class="c-homepage__about-feature">
                    <?php echo $feature; ?>
                </li>

                    <?php endwhile; ?>
    </ul>

<?php 
else :
endif; 
?>

            <a class="c-homepage__about-cta" href="<?php echo $cta['url']; ?>"><?php echo $cta['title']; ?></a>
            </div>


        </div>


        <div class="c-homepage__classes-section">
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