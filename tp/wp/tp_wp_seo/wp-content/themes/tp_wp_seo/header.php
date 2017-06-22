<?php
# @Author: Nicolas Fazio <webmaster-fazio>
# @Date:   22-06-2017
# @Email:  contact@nicolasfazio.ch
# @Last modified by:   webmaster-fazio
# @Last modified time: 22-06-2017

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tp_wp_seo
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header" role="banner">
		<nav role="navigation">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo">
				<?php bloginfo( 'name' ); ?>
			</a>
			<?php
				// wp_nav_menu( array(
				// 	'theme_location' => 'menu-1',
				// 	'menu_id'        => 'primary-menu',
				// ) );
				wp_nav_menu( array(
						'menu' => 'Primary',
						'theme_location'=>'Primary',
						'menu_class' => 'hide-on-med-and-down right',
						'walker' => new wp_materialize_navwalker()
				));
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
