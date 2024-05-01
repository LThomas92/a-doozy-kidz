<?php get_header(); ?>

<section class="c-gallery">
<?php $args = array(
    'post_type' => 'galleries',
    'posts_per_page' => -1,
    'orderby' => 'publish_date',
    'order' => 'DESC'
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
    <ul class="c-gallery__list-names">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li class="c-gallery__list-name">
        <a href="<?php echo get_the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    </li>
    <?php endwhile; ?>
    </ul>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>

</section>

<?php get_footer(); ?>