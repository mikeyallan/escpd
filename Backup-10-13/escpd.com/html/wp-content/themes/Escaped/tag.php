<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

				<div id="tag_archive_heading">
					<h1><?php
						printf( __( 'You\'ve escaped to the tag: %s', 'twentyten' ), '' . single_tag_title( '', false ) . '' );
					?></h1>
				</div>
<div id="contentWrapperCategory">

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>


<br class="clear" />
</div>
<?php get_footer(); ?>