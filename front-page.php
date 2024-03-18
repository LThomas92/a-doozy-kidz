<?php get_header(); ?>

<div class="content">

    <div class="c-homepage">

    <div class="c-homepage__header-section">

<ul class="c-homepage__header-images">
        <?php $leftImage = get_field('left_image');
              $middleImage = get_field('middle_image');
              $rightImage = get_field('right_image');
        ?>

        <div class="c-homepage__header-left-section">
            <li class="c-homepage__header-image">
                <figure>
                    <img src="<?php echo $leftImage['url']; ?>" alt="<?php echo $leftImage['alt']; ?>"/>
                </figure>
            </li>

            <li class="c-homepage__header-image">
                <figure>
                    <img src="<?php echo $middleImage['url']; ?>" alt="<?php echo $middleImage['alt']; ?>"/>
                </figure>
            </li>
            </div>


            <div class="c-homoepage__header-right-section">
            <li class="c-homepage__header-big-image">
                <figure>
                    <img src="<?php echo $rightImage['url']; ?>" alt="<?php echo $rightImage['alt']; ?>"/>
                </figure>
            </li>
            </div>

    </ul>

    </div>


        <div class="c-homepage__about-section">
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


</div>

<?php get_footer(); ?>