<?php 
/**
 * The template for the index page
 *
 * 
 * @since 1.0
 */
get_header(); 
?>
<!--PAGE.PHP->
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

		the_content();
	
	} // end while
} // end if
?>

<?php get_footer(); ?>