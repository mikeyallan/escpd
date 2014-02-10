<?php
/**
 * The template used to display Tag Archive pages
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
<h2 class="sub-title">All tags with <span class="highlight">'<?php echo single_tag_title( '', false ); ?>'</span></h2>
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
<h2>No posts to display in <?php echo single_tag_title( '', false ); ?></h2>
<?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>