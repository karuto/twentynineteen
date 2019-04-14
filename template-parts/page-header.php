<?php
/**
 * The template that displays the page's header. 
 * Do not be confused with the header (title section) of a post or a page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<header class="page-header">
  <?php
  echo '<h1 class="page-title">';
  if ( is_archive() ) {
    echo get_the_archive_title();
  } else if ( is_search() ) {
    _e( 'Search results for:', 'twentynineteen' );
  } else if ( is_404() ) {
    _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' );
  }
  echo '</h1>';
  if( is_search() ) {
    echo '<div class="page-description">';
    echo get_search_query();
    echo '</div>';
  }
  ?>
</header><!-- .page-header -->