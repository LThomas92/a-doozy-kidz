<?php get_header(); ?>

<div class="c-about-page">
    <?php 
        $headerImage = get_field('about_header_image');
    ?>
    <div class="content">
        
    <div style="background-image:url('<?php echo $headerImage['url']; ?>')" class="c-about-page__header">

        <h1 class="c-about-page__title"><?php echo get_the_title(); ?> </h1>
    </div>

    <div class="c-about-page__us-content">
        <?php 
            $aboutImage = get_field('');
            $aboutSmTitle = get_field('');
            $aboutContentTitle = get_field('');
            $aboutContentDesc = get_field('');
            
        ?>
        <figure class="c-about-page__us-image">
            <img src="" alt="">
        </figure>
    </div>







    </div>
</div>

<?php get_footer(); ?>