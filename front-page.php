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
                $subTitle = get_field('about_subtitle');
                $content = get_field('about_content');
                $cta = get_field('about_cta');
                $image = get_field('about_image');
            ?>

            <div class="c-homepage__about-content">
                <h2 class="c-homepage__about-title"><?php echo $title; ?></h2>
                <div class="c-homepage__about-desc"><?php echo $desc; ?></div>

                <div class="c-homepage__about-image-features">

                <figure class="c-homepage__about-image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>


                <div class="c-homepage__about-features-section">

                <h3 class="c-homepage__about-features-title"><?php echo $subTitle; ?></h3>

                <div class="c-homepage__fun-dayz-section">
                    <?php echo $content; ?>
                </div>
            
    <a class="c-homepage__about-cta" href="<?php echo $cta['url']; ?>"><?php echo $cta['title']; ?></a>

    </div>
    </div>



        </div>
</div>

<?php get_footer(); ?>