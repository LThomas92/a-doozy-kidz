<?php get_header(); ?>

<div class="content">

<?php 
    $title = get_field('title');
    $calendarPDF = get_field('weekly_calendar_pdf');
?>

<div class="c-toddler-fun-dayz">
    <h2 class="c-toddler-fun-dayz__title"><?php echo $title; ?></h2>
    <div class="c-toddler-fun-dayz__main-content">
        <?php echo the_content(); ?>
    </div>
</div>



</div>

<?php get_footer(); ?>