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
			<?php 
				$footerDesc = get_field('footer_description', 'option');
			?>

		<div class="site-footer__left">
		<a href="<?php echo site_url(); ?>" class="site-footer__logo">
				<img title="It'z A Doozy Kidz Logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="It'z A Doozy Kidz Logo">
			</a>

		<p class="site-footer__description"><?php echo $footerDesc; ?></p>
		</div>

		<nav class="site-footer__navigation">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav>

		<div class="site-footer__contact-section">
			<?php 
				$phone = get_field('footer_phone_number', 'option');
				$email = get_field('footer_email', 'option');
			?>
			<ul class="site-footer__contact-items">
				<li class="site-footer__contact-item"><span><img title="Phone Icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.svg" alt="Phone Icon" /></span><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
				<li class="site-footer__contact-item"><span><img title="Email Icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/mail.svg" alt="Email Icon" /></span><?php echo $email; ?></li>
			</ul>
		</div>

		</div><!-- .site-info -->
		<div class="site-footer__copyright">
		<?php 
			$copyright = get_field('copyright', 'option');
			$designedBy = get_field('designed_by', 'option');
		?>
			<p class="site-footer__copyright-text"><?php echo $copyright;?></p>
			<p class="site-footer__designed-by">Designed by <a target="_blank" href="<?php echo $designedBy; ?>">Laws & Codes</a></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
