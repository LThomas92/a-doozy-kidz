<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package a-doozy-kidz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'a-dooyz-kidz' ); ?></a>

	<div class="site-header__newsletter-container">
	<div class="site-header__newsletter">
		<p class="site-header__newsletter-text">
			<?php echo get_field('newsletter_text', 'option'); ?>
		</p>
		<div class="site-header__newsletter-signup">
			<input placeholder="Enter your email address" type="email"/>
			<a class="site-header__newsletter-cta" href="">Sign up</a>
		</div>
	</div>
	</div>
	<div class="site-header__container">
	<header id="masthead" class="site-header">

	<div class="site-branding">
			<a href="<?php echo site_url(); ?>">
			<img title="A Doozy Kidz Logo" class="site-header__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="A Doozy Kidz Logo"/>
			</a>
		
		</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation">
		
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
	</nav><!-- #site-navigation -->

	<?php 
		$funDayzCTA = get_field('cta_link', 'option');
	?>

	<a href="<?php echo $funDayzCTA['url']; ?>" class="site-header__art-section-cta"><?php echo $funDayzCTA['title']; ?></a>

	</header><!-- #masthead -->
	</div>



	<div class="overlay-menu">
<img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/close.svg" alt="Close Icon"/>
<div class="header-search-form">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'What are you looking for?', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button type="submit" name="submit" value="submit"></button>
</form>
    </div> <!-- header search form -->

</div> <!-- overlay menu -->
