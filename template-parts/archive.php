<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#category
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<?php if ( have_posts() ) : ?>

	<?php
	get_template_part( 'template-parts/page-header' );
	// Start the Loop.
	while ( have_posts() ) :
		the_post();

		/*
			* Include the Post-Format-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Format name) and that will be used instead.
			*/
		get_template_part( 'template-parts/content/content', 'excerpt' );

		// End the loop.
	endwhile;

	// Previous/next page navigation.
	twentynineteen_the_posts_navigation();

	// If no content, include the "No posts found" template.
else :
	get_template_part( 'template-parts/content/content', 'none' );

endif;
?>
