<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
	<style>
		.center{
			text-align:center;
		}
		#main{
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 4vw 0;
		}
		.home{
			text-align: center;
			background-color: var(--themeColor);
			display: inline-block;
			height: 1.71875vw;
			line-height: 1.71875vw;
			font-size: .78125vw;
			padding: 0 0.78125vw;
			border-radius: 1.5625vw;
			margin: 3vw auto;
			color: #ffffff;
		}
		.subtitle{
			margin-top: 1vw;
		}
		@media (max-width: 992px){
			.home{
				height: 30px;
				line-height: 30px;
				padding: 0 20px;
				border-radius: 20px;
				font-size: 14px;
			}
			.subtitle {
				font-size: 15px;
				margin: 15px 0;
				padding: 0 15px;
			}
		}
	</style>
	<header class="page-header alignwide">
		<h1 class="page-title center">
			<?php esc_html_e( '404 Error.', 'twentytwentyone' ); ?>
		</h1>
	</header><!-- .page-header -->

	<div class="error-404 not-found default-max-width">
		<div class="page-content center">
			<h2 class="subtitle"><?php esc_html_e( 'It looks like nothing was found at this location.', 'twentytwentyone' ); ?></h2>
			<a class="home" href="https://www.fungvape.com/">Back to home</a>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->
<?php
get_footer();
