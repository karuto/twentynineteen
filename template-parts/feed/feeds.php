<?php
/**
 * The template that displays the feed, based on any query to render some posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<?php 
if ( have_posts() ) {
	get_template_part( 'template-parts/page-header' );
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

    if ( is_single() ) {
      $post_type = 'post';
    } else if ( is_page() ) {
      $post_type = 'page';
    } else {
      $post_type = 'excerpt';
    }
		get_template_part( 'template-parts/content/content', $post_type );

    // End the loop.
  }

  // If comments are open or we have at least one comment, load up the comment template.
  // This only applies for single post and page pages.
  // This won't apply for numbered pages, such as home or archive pages.
	if ( comments_open() || get_comments_number() ) {
		comments_template( '/template-parts/comments.php' );
  }

  // Previous/next page navigation.
  // This won't apply for single post and page pages.
  // This only applies for numbered pages, such as home or archive pages.
	twentynineteen_the_posts_navigation();

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}
?>
