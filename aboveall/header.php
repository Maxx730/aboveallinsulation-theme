<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AboveAll
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri( 'style.css' )?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri( 'css/our-work-stage.css' )?>">

	<script src = "<?php echo get_theme_file_uri( 'js/aboveall/interface.js' )?>" type = "text/javascript"></script>
	<script src = "<?php echo get_theme_file_uri( 'js/aboveall/navigation.js' )?>" type = "text/javascript"></script>
	<script src="https://kit.fontawesome.com/ad66999f60.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div id = "quick-contact">
			<span>
				<i class="fas fa-phone"></i>(802) 318-5575 
			</span>
			<span class = "separator">
				| 
			</span>
			<span id = "top-contact">
				Contact Us
			</span>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$aboveall_description = get_bloginfo( 'description', 'display' );
				if ( $aboveall_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $aboveall_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
