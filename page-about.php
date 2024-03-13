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


    <div class="c-about-page__how-we-work-section">
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
            <div class="c-about-page__how-we-work-feature-title-icon">
            <h3 class="c-about-page__how-we-work-feature-title"><?php echo $howWeWorkFeatureTitle; ?></h3>
            <div class="c-about-page__how-we-work-feature-icon"></div>
            </div>

            
            <div class="c-about-page__how-we-work-feature-description">
              <p><?php echo $howWeWorkFeatureContent; ?></p>
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







    </div>
</div>

<?php get_footer(); ?>