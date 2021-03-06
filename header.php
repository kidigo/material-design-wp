<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package material-design-wp
 */

?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Compiled and minified Materilize CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- JQuery Ui Min css  -->
		<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/material-design-wp/css/jquery-ui.min.css">
		<!-- Font Awesome Min CSS  -->
		<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/material-design-wp/css/font-awesome.min.css">
		<!-- Facebook Open Graph -->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<main>
			<header>
				<div class="navbar-fixed">
					<nav class="transparent" id="main-navigation">
						<div class="container">
							<div class="nav-wrapper">
								<a href="#!" class="brand-logo">
									<?php headerTitle();?>
								</a>
								<a href="#" data-activates="primary-menu" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'side-nav', 'items_wrap' => '<ul id="%1$s" class="%2$s"><li class="menu-header"><a href="'.get_site_url().'">'.get_bloginfo('name').'</a></li>%3$s</ul>', ) ); ?>
								<ul class="right" id="header-search">
									<li class="the-search-form" id="the-search-form">
										<?php echo get_search_form(); ?>
									</li>
									<li><i id="icon-search" class="material-icons" style="cursor:pointer">search</i><i id="icon-close" class="material-icons" style="cursor:pointer">close</i></li>
								</ul>
							</div>
						</div>
					</nav>
					<div class="container title-container">
						<div class="row">
							<div class="col s12">
								<h1 class="header-title"><?php headerTitle();?></h1>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="container">
				<a href="#share-modal" class="btn-share btn-floating btn-large waves-effect waves-light modal-trigger right" id="btn-share"><i class="material-icons">share</i></a>
			</div>