<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

?>

<?php get_header(); ?>


<div id="contentWrapper">

<? /*  php $post_count = 0;?>
<?php if (have_posts()) : while (have_posts()) : the_post(); $post_count++;?>
<?php if($post_count ==1) $class = 'feature-post';

else $class='';
?>
<div <?php post_class($class) ?> id="post-<?php the_ID(); ?>">

	<div id="feature-post">
		<b class="feature-tag"></b>
		<a class="feature-img" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail(); ?>
		</a>
		
	</div>
	<div id="postArea" */ ?>
			
	<?php
		/* Run the loop to output the posts.
		 * If you want to overload this in a child theme then include a file
		 * called loop-index.php and that will be used instead.
		 */
		 get_template_part( 'loop', 'index' );
	?>
	
				
	<div id="sideBar">
		<?php  get_sidebar(); ?>
	</div>
<br class="clear" />
</div>

<?php get_footer(); ?>