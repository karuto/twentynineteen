<?php
/**
 * The template that displays the content of blog's "home page".
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<?php
  if ( have_posts() ) {

    // Load posts loop.
    while ( have_posts() ) {
      the_post();
      get_template_part( 'template-parts/content/content' );
    }

    // Previous/next page navigation.
    twentynineteen_the_posts_navigation();

  } else {

    // If no content, include the "No posts found" template.
    get_template_part( 'template-parts/content/content', 'none' );

  }
?>