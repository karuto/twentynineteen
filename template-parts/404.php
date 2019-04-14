<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<div class="error-404 not-found">

	<?php
	get_template_part( 'template-parts/page-header' );
	?>

	<div class="page-content">
		<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen' ); ?></p>
		<?php get_search_form(); ?>
	</div><!-- .page-content -->
</div><!-- .error-404 -->
