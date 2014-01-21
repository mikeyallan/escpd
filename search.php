<?php
/**
 * Search results page
 * 
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
<h2 class="sub-title">Search Results for <span class="highlight">'<?php echo get_search_query(); ?>'</span></h2>	
<ul class="home-posts">
<?php while ( have_posts() ) : the_post(); ?>
	<li class="classic-post">
		<article >
			<div class="post-container">
				<?php if(has_post_thumbnail()) {echo '<a href="'.get_permalink().'">';echo get_the_post_thumbnail($post->ID, 'post-thumbnails' ); echo '</a>';} ?>
				<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<?php the_excerpt( __( 'Continue reading &#187;', 'twentyten' ) ); ?>
				
				<?php //Price of the post
					$price = get_post_meta($post->ID, 'post_price', true);
					if ($price == '')
					{ ?>
					
				<?php } else { ?>
					<p  class="post-price"><?php echo get_post_meta($post->ID, 'post_price', true); ?></p>
				<?php } ?>
						
				<?php /*Purchase the post*/ $buy = get_post_meta($post->ID, 'post_buy', true); if ($buy == '') { ?>
				<?php } else { ?>
					<a class="post-purchase" href="<?php echo get_post_meta($post->ID, 'post_buy', true); ?>" target="blank">Go Buy it</a>
					<?php } ?>
						
				<?php //Source of the post
					$source = get_post_meta($post->ID, 'post_source', true);
					if ($source == '')
					{ ?>

				<?php } else { ?>
					<a class="post-source" href="<?php echo get_post_meta($post->ID, 'post_source', true); ?>" target="blank">Source</a>
				<?php } ?>
				
				<?php printf( __( '%2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?><!-- tags -->
				
				<p class="tags"><?php the_tags('More<br />', ', ', '<br />'); ?></p>
				
			</div><!-- END POST-CONTAONER -->			
		</article>
	</li>
	
<?php endwhile; ?>
</ul>
<?php else: ?>
<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
<?php endif; ?>

<div class="pagination">
	<div class="btn-container">
		<?php if (  $wp_query->max_num_pages > 1 ) : ?>
			<?php next_posts_link( __( '<div class="older-posts">&larr; Older Escaped</div>', 'twentyten' ) ); ?>
			<?php previous_posts_link( __( '<div class="newer-posts">Newer Escaped &rarr;</div>', 'twentyten' ) ); ?>
		<?php endif; ?>
	</div>
</div><!-- End Pagination -->

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>