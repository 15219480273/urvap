<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<?php
		$resourceList = array(
			'style_min' => '/assets/css/style.min.css',
		);
		loadTimeResource($resourceList)
	?>
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/main.js"></script>
</head>

<body>

<?php get_template_part( 'template-parts/header/index-header' ); ?>
<div id="page" class="site">
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
