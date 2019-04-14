<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_template_part( 'template-parts/header' );
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( is_home() ) {
			// only for "recent posts", not for static page as home page
			get_template_part( 'template-parts/home' );
		} else if ( is_single() ) {
			// any posts; excludes pages and attachments
			get_template_part( 'template-parts/single' );
		} else if ( is_page() ) {
			// any pages; excludes posts
			get_template_part( 'template-parts/page' );
		} else if ( is_attachment() ) {
			// any pages; excludes posts
			get_template_part( 'template-parts/image' );
		} else if ( is_archive() ) {
			get_template_part( 'template-parts/archive' );
		} else if ( is_search() ) {
			get_template_part( 'template-parts/search' );
		} else if ( is_404() ) {
			get_template_part( 'template-parts/404' );
		} else {
			get_template_part( 'template-parts/home' );
		}
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
	get_template_part( 'template-parts/footer' );
?>
