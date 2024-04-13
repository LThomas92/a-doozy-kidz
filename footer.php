<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package a-doozy-kidz
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">

		<div class="site-footer__left">
		<a href="<?php echo site_url(); ?>" class="site-footer__logo">
				<img title="It'z A Doozy Kidz Logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="It'z A Doozy Kidz Logo">
			</a>

		</div>

		<div class="site-footer__contact-section">
    <?php $email = get_field('email_header', 'option');
				  $facebook = get_field('facebook_header', 'option');
				  $instagram = get_field('instagram_header', 'option');
			?>
			<h4 class="site-footer__follow-us">Follow Us</h4>
			<ul class="site-footer__contact-items">
				<li class="site-footer__contact-item"><a target="_blank" href="<?php echo $instagram; ?>"><img title="Instagram Icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" alt="Instagram Icon" /></a></li>
        <li class="site-footer__contact-item"><a target="_blank" href="<?php echo $facebook; ?>"><img title="Facebook Icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt="Facebook Icon" /></a></li>
        <li class="site-footer__contact-item"><a href="mailto:<?php echo $email; ?>"><img title="Email Icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/email.svg" alt="Email Icon" /></a></li>
      </ul>
		</div>

		</div><!-- .site-info -->
		<div class="site-footer__copyright">
		<?php 
			$copyright = get_field('copyright', 'option');
		?>
			<p class="site-footer__copyright-text"><?php echo $copyright;?></p>
	
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
