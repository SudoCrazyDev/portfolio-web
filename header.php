<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plcalub-theme
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

<div id="plc-intro" class="plc-intro" aria-hidden="true">
	<div class="plc-intro__bg"></div>
	<div class="plc-intro__content">
		<div class="plc-intro__mark">
			<span class="plc-intro__dot"></span>
			<span class="plc-intro__dot"></span>
			<span class="plc-intro__dot"></span>
		</div>
		<div class="plc-intro__text">
			<div class="plc-intro__kicker">Fullstack</div>
			<div class="plc-intro__title">Philip Louis Calub</div>
			<div class="plc-intro__sub">Frontend • Backend • DevOps</div>
		</div>
	</div>
</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'plcalub-theme' ); ?></a>

	<?php // Header removed per preference (one-page portfolio). ?>
