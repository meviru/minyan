<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minyan
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
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600;700&family=Pacifico&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php /*<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'minyan' ); ?></a>

	<header id="masthead" class="site-header">
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
			$minyan_description = get_bloginfo( 'description', 'display' );
			if ( $minyan_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $minyan_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'minyan' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->*/ ?>

<header class="site-header">
	<div class="container">
		<div class="site-header--inner d-flex align-items-start justify-content-between">
			<div class="site-logo">
				<a href="javascript:void(0)" class="site-logo--inner">
					<img src="<?php echo THEME_FILE_PATH; ?>/assets/images/logo.png" alt="Minyan" class="site-logo--img" title="Minyan">
				</a>
			</div>
			<div class="user-menu">
				<div id="user-menu"
					class="user-menu--icon cursor-pointer d-flex align-items-center justify-content-center">
					<img src="<?php echo THEME_FILE_PATH; ?>/assets/images/user-icon.svg" alt="User">
				</div>
				<div id="user-dropdown" class="user-menu--dropdown">
					<a href="javascript:void(0)" class="user-menu--btn">Sign Up</a>
					<a href="javascript:void(0)" class="user-menu--btn">Sign In</a>
				</div>
			</div>
			<div class="right-menu d-flex">
				<div class="lang-switcher">
					<div id="selected-lang" class="selected-lang cursor-pointer">
						<img class="selected-lang--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/flag-france.svg" alt="Frace">
					</div>
					<ul id="lang-dropdown" class="lang-dropdown">
						<li class="lang-dropdown--item">
							<a href="javascript:void(0)" class="lang-dropdown--flag">
								<img class="lang-dropdown--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/flag-uk.svg"
									alt="United Kingdom">
							</a>
						</li>
						<li class="lang-dropdown--item">
							<a href="javascript:void(0)" class="lang-dropdown--flag">
								<img class="lang-dropdown--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/flag-spain.svg" alt="Spain">
							</a>
						</li>
						<li class="lang-dropdown--item">
							<a href="javascript:void(0)" class="lang-dropdown--flag">
								<img class="lang-dropdown--img" src="<?php echo THEME_FILE_PATH; ?>/assets/images/flag-israel.svg" alt="Israel">
							</a>
						</li>
					</ul>
				</div>
				<div class="create-minyan cursor-pointer">
					<div class="create-minyan--inner d-flex align-items-center justify-content-center">
						<img src="<?php echo THEME_FILE_PATH; ?>/assets/images/create-your-minyan.svg" alt="Create your minyan">
						<img src="<?php echo THEME_FILE_PATH; ?>/assets/images/hand-icon.svg" class="hand-icon">
					</div>
					<div class="create-minyan--text">Create your Minyan</div>
				</div>
			</div>
		</div>
	</div>
</header>
