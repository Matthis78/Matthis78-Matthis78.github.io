<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Verschuer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'verschuer' ); ?></a>

	<header id="masthead" class="site-header">
		<nav>
			<ul>
				<a href="<?= get_page_link(21) ?>"><li>Virus</li></a>
				<a href="<?= get_page_link(73) ?>"><li>Logistique</li></a>
				<a href="<?= get_page_link(59) ?>"><li>???/t5’ »o...??</li></a>
				<a href="<?= get_page_link(30) ?>"><button>ACCÉS ADMIN</button></a>
			</ul>
		</nav>

		
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
