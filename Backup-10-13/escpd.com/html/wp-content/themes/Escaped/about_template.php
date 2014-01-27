<?php

/* Template Name: About Template*/

?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="about-page">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

		<?php comments_template( '', true ); ?>
</div>
<?php endwhile; ?>


<?php get_footer(); ?>