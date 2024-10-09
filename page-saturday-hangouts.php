<?php get_header(); ?>

<div class="content">

<?php 
    $title = get_field('title');
    $calendarPDF = get_field('weekly_calendar_pdf');
?>

<div class="c-saturday-hangouts">
    <h2 class="c-saturday-hangouts__title"><?php echo $title; ?></h2>
    <div class="c-saturday-hangouts__main-content">
        <?php echo the_content(); ?>
    </div>
</div>



</div>

<?php get_footer(); ?>