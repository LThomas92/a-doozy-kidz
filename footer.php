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
				$email = get_field('footer_email', 'option');
			?>
			<ul class="site-footer__contact-items">
				<li class="site-footer__contact-item"><span><img title="Email Icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/mail.svg" alt="Email Icon" /></span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
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
