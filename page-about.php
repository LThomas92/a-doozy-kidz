<?php get_header(); ?>

<div class="c-about-page">
    <?php 
        $headerImage = get_field('about_header_image');
    ?>
    <div class="content">
        
    <div style="background-image:url('<?php echo $headerImage['url']; ?>')" class="c-about-page__header">

        <h1 class="c-about-page__title"><?php echo get_the_title(); ?> </h1>
    </div>

    <div class="c-about-page__us-content gutenberg-styles">
        <?php 
            $aboutImage = get_field('about_image');
            $aboutSmTitle = get_field('about_small_title');
            $aboutContentTitle = get_field('about_title');
            $aboutContentDesc = get_field('about_content_description');
            
        ?>
        <figure class="c-about-page__us-image">
            <img src="<?php echo $aboutImage['url']; ?>" alt="<?php echo $aboutImage['alt']; ?>">
        </figure>

        <div class="c-about-page__about-us-content">
          <h5 class="c-about-page__about-us-sm-title"><?php echo $aboutSmTitle; ?></h5>
          <h3 class="c-about-page__about-us-title"><?php echo $aboutContentTitle; ?> </h3>
          <p class="c-about-page__about-us-desc"><?php echo $aboutContentDesc; ?></p>

          <?php if( have_rows('about_features') ): ?>
          
          <ul class="c-about-page__about-features">
          <?php while( have_rows('about_features') ) : the_row();

        $aboutFeature = get_sub_field('about_feature'); 
        $aboutFeatureDesc = get_sub_field('about_feature_description');
        ?>
        <li class="c-about-page__about-feature">
            <h5 class="c-about-page__about-feature-title">
            <?php echo $aboutFeature; ?>
          </h5>
            <p class="c-about-page__about-feature-desc">
              <?php echo $aboutFeatureDesc; ?>
            </p>
        </li>

    <?php 
    endwhile; ?>
    </ul>

<?php 
else :
endif; ?>


        </div>
      </div>


    <div class="c-about-page__how-we-work-section gutenberg-styles">
      <?php 
        $howWeWorkSmTitle = get_field('how_we_work_subtitle');
        $howWeWorkTitle = get_field('how_we_work_title');
        $howWeWorkImage = get_field('how_we_work_image');
      ?>

      <div class="c-about-page__how-we-work-content">

        <div class="c-about-page__how-we-work-content-box">
          <h5 class="c-about-page__how-we-work-small-title"><?php echo $howWeWorkSmTitle; ?></h5>
          <h2 class="c-about-page__how-we-work-title"><?php echo $howWeWorkTitle; ?></h2>

          <?php if( have_rows('how_we_work_features') ): ?>

          <ul class="c-about-page__how-we-work-features">
          <?php while( have_rows('how_we_work_features') ) : the_row();

        $howWeWorkFeatureTitle = get_sub_field('how_we_work_feature_title');
        $howWeWorkFeatureContent = get_sub_field('how_we_work_feature_description'); ?>
          
        <li class="c-about-page__how-we-work-feature">
            <div key="<?php echo $howWeWorkFeatureTitle; ?>" class="c-about-page__how-we-work-title-icon">
            <h3 class="c-about-page__how-we-work-feature-title"><?php echo $howWeWorkFeatureTitle; ?></h3>
            <svg class="c-about-page__work-icon" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 95 95">
            <defs>
            <style>
            .cls-1 {
                fill: #21baed;
            }
            </style>
        </defs>
        <path class="cls-1" d="M47.5,0h0C21.27,0,0,21.27,0,47.5H0c0,26.23,21.27,47.5,47.5,47.5h0c26.23,0,47.5-21.27,47.5-47.5h0C95,21.27,73.73,0,47.5,0Zm13.63,51.88l-18.89,18.89c-2.31,2.31-6.06,2.31-8.38,0-2.31-2.31-2.31-6.06,0-8.38h0l14.9-14.89-14.9-14.89c-2.31-2.31-2.32-6.06,0-8.38s6.06-2.32,8.38,0l18.89,18.89c1.16,1.16,1.79,2.74,1.73,4.38v.19c0,1.57-.62,3.08-1.73,4.19Z"/>
        </svg>
        </div>


            <div key="<?php echo $howWeWorkFeatureTitle; ?>" class="c-about-page__wrapper">
                <div class="c-about-page__how-we-work-feature-description">
                <p><?php echo $howWeWorkFeatureContent; ?></p>
                </div>
            </div>
          </li>
            
    <?php endwhile; ?>
    </ul>

<?php else :
    // Do something...
endif; ?>


        </div>


        <figure class="c-about-page__how-we-work-image">
          <img src="<?php echo $howWeWorkImage['url']; ?>" alt="<?php echo $howWeWorkImage['alt']; ?>">
        </figure>

        </div>
    </div>



    <section class="c-about-page__our-teacher gutenberg-styles">
        <?php 
            $teacherSubtitle = get_field('teacher_subtitle');
            $teacherTitle = get_field('teacher_title');
            $teacherImage = get_field('teacher_image');
            $teacherDesc = get_field('teacher_description');
        ?>
        <h5 class="c-about-page__our-teacher-subtitle"><?php echo $teacherSubtitle; ?></h5>

        <div class="c-about-page__our-teacher-main-content">
            <figure class="c-about-page__our-teacher-image">
                <img title="<?php echo $teacherImage['title']; ?>" src="<?php echo $teacherImage['url']; ?>" alt="<?php echo $teacherImage['alt']; ?> ">
            </figure>

            <div class="c-about-page__our-teacher-content">
                <h2 class="c-about-page__our-teacher-title"><?php echo $teacherTitle; ?></h2>
                <p class="c-about-page__our-teacher-desc"><?php echo $teacherDesc; ?></p>
            </div>
        </div>


    </section>







    </div>
</div>

<?php get_footer(); ?>