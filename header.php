<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta id="viewport-tag" name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( has_action( 'aios_seotools_gtm_body' ) ) { do_action('aios_seotools_gtm_body'); } ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Mobile Header") ) : ?><?php endif ?>

	<div id="main-wrapper">


    <?php do_action('aios_landing_page_header'); ?>
    <?php do_action('aios_neighborhoods_header'); ?>


	<header class="header fixed w-100">
		<div class="header-container">
			<div class="header-translate">

				<div class="w-100 flex justify-end">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Header: Translate") ) : ?><?php endif ?>
				</div>
			</div>
			<nav class="navigation">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'nav', 'theme_location' => 'primary-menu', 'menu_class' => 'flex justify-center items-center' ) ); ?>
			</nav>
		</div>
	</header>

	<main>
		<h2 class="aios-starter-theme-hide-title">Main Content</h2>

		<!-- ip banner goes here -->
    <?php
    if ( ! is_home() && !is_page_template( 'template-homepage.php' ) && is_custom_field_banner( get_queried_object() ) && is_active_sidebar('aios-inner-pages-banner')) {
      dynamic_sidebar('aios-inner-pages-banner');
    }
    ?>
		<!-- ip banner goes here -->


		<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>

		<div id="inner-page-wrapper">
			<div class="container">

		<?php endif ?>
