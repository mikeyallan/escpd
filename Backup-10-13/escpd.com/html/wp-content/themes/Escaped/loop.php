<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php /* if ( $wp_query->max_num_pages > 1 ) : ?>
		<?php next_posts_link( __( '&larr; Older posts', 'twentyten' ) ); ?>
		<?php previous_posts_link( __( 'Newer posts &#187;', 'twentyten' ) ); ?>
<?php endif; */ ?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
		<h1><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
<?php endif; ?>





<?php
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
	 

	
	
			 
<?php $post_number = 0; ?>
<?php while ( have_posts() ) : the_post() ?>
<?php $post_number++; ?>	


	
<?php /* How to display posts in the Gallery category. */ ?>

	<?php if ( in_category( _x('gallery', 'gallery category slug', 'twentyten') ) ) : ?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<?php twentyten_posted_on(); ?>

		<?php if ( post_password_required() ) : ?>
				<?php the_content(); ?>
		<?php else : ?>
			<?php
				$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
				$total_images = count( $images );
				$image = array_shift( $images );
				$image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
			?>
			<a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>

			<p><?php printf( __( 'This gallery contains <a %1$s>%2$s photos</a>.', 'twentyten' ),'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"', $total_images ); ?></p>

			<?php the_excerpt(); ?>
		<?php endif; ?>

		<a href="<?php echo get_term_link( _x('gallery', 'gallery category slug', 'twentyten'), 'category' ); ?>" title="<?php esc_attr_e( 'View posts in the Gallery category', 'twentyten' ); ?>"><?php _e( 'More Galleries', 'twentyten' ); ?></a>
					|
		<?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'twentyten' ), '|', '' ); ?>
					
		

		<?php /* How to display posts in the asides category */ ?>

	<?php elseif ( in_category( _x('asides', 'asides category slug', 'twentyten') ) ) : ?>

		<?php if ( is_archive() || is_search() ) : // Display excerpts for archives and search. ?>
			<?php the_excerpt(); ?>
		<?php else : ?>
			<?php the_content( __( 'Continue reading &#187;', 'twentyten' ) ); ?>
		<?php endif; ?>

		<?php twentyten_posted_on(); ?>
		|
		<?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'twentyten' ), '| ', '' ); ?>
				
				

		<?php /* How to display all other posts. */ ?>

	<?php elseif ( $post_number == 1 && is_home()  ) : ?>
	
	<div id="feature-post">
			
			<b class="feature-tag"></b>
			<a class="feature-img" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
		
      		<h2>
				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>

			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
			<?php the_excerpt(); ?>

			<?php else : ?>
				<?php the_excerpt( __( 'Continue reading &#187;', 'twentyten' ) ); ?><!-- Main content -->
			
				<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
			<?php endif; ?>

			<?php if ( count( get_the_category() ) ) : ?>
			<?php //printf( __( 'Posted in %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?><!-- Category posted in -->
		<?php endif; ?>
		
		<?php $tags_list = get_the_tag_list( '','' ); if ( $tags_list ): ?>
					
			<?php //Price of the post
				$price = get_post_meta($post->ID, 'post_price', true);
				if ($price == '')
				{ ?>
				
			<?php } else { ?>
				<p  class="post-price"><?php echo get_post_meta($post->ID, 'post_price', true); ?></p>
			<?php } ?>
					
			<?php /*Purchase the post*/ $buy = get_post_meta($post->ID, 'post_buy', true); if ($buy == '') { ?>
			<?php } else { ?>
				<a class="post-purchase" href="<?php echo get_post_meta($post->ID, 'post_buy', true); ?>" target="blank">Buy it</a>
				<?php } ?>
					
			<?php //Source of the post
				$source = get_post_meta($post->ID, 'post_source', true);
				if ($source == '')
				{ ?>

			<?php } else { ?>
				<a class="post-source" href="<?php echo get_post_meta($post->ID, 'post_source', true); ?>" target="blank">Source</a>
			<?php } ?>
						
			<div <?php if ( $post_number == 1 && is_home() ) { ?>class="tags-home-feature"<?php } else { ?>class="tags"<?php } ?>>
				<div class="tagsTitle">MORE</div>
				<div class="star1"></div>
				<div class="star2"></div>
					
				<?php printf( __( '%2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?><!-- tags -->
						
			</div>
					
		<?php endif; ?>
				
		<?php //comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?><!-- Leave a comment -->
				
		<?php //edit_post_link( __( 'Edit', 'twentyten' ), '| ', '' ); ?><!-- Edit post -->

		<?php comments_template( '', true ); ?>
		
	</div><!-- End #featurepost -->


	<?php else : ?>

	<div id="sideBar">
		<?php  get_sidebar(); ?>
	</div>

	<div id="postArea" >
		<div class="post"> 

			<div class="post-views" <?php if ( $post_number == 1 && is_home() ) { ?>style="display:none;" <?php } else { ?>style=""<?php } ?>><p><?php echo getPostViews(get_the_ID());?></p></div>	
		
			<a <?php if ( $post_number == 1 && is_home() ) { ?>style="display:none;" <?php } else { ?>style=""<?php } ?> class="feature-img" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
			
		
			
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>

			<?php// twentyten_posted_on(); // Date and time of post.?>
			
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>

			<?php else : ?>
				<?php the_excerpt( __( 'Continue reading &#187;', 'twentyten' ) ); ?><!-- Main content -->
				
				<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
			<?php endif; ?>
			

			<?php if ( count( get_the_category() ) ) : ?>
				<?php //printf( __( 'Posted in %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?><!-- Category posted in -->
			<?php endif; ?>
			
			<?php $tags_list = get_the_tag_list( '','' ); if ( $tags_list ): ?>
						
				<?php //Price of the post
					$price = get_post_meta($post->ID, 'post_price', true);
					if ($price == '')
					{ ?>
					
				<?php } else { ?>
					<p  class="post-price"><?php echo get_post_meta($post->ID, 'post_price', true); ?></p>
				<?php } ?>
						
				<?php /*Purchase the post*/ $buy = get_post_meta($post->ID, 'post_buy', true); if ($buy == '') { ?>
				<?php } else { ?>
					<a class="post-purchase" href="<?php echo get_post_meta($post->ID, 'post_buy', true); ?>" target="blank">Buy it</a>
					<?php } ?>
						
				<?php //Source of the post
					$source = get_post_meta($post->ID, 'post_source', true);
					if ($source == '')
					{ ?>

				<?php } else { ?>
					<a class="post-source" href="<?php echo get_post_meta($post->ID, 'post_source', true); ?>" target="blank">Source</a>
				<?php } ?>
							
				<div <?php if ( $post_number == 1 && is_home() ) { ?>class="tags-home-feature"<?php } else { ?>class="tags"<?php } ?>>
					<div class="tagsTitle">MORE</div>
					<div class="star1"></div>
					<div class="star2"></div>
						
					<?php printf( __( '%2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?><!-- tags -->
							
				</div>
						
			<?php endif; ?>
					
			<?php //comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?><!-- Leave a comment -->
					
			<?php //edit_post_link( __( 'Edit', 'twentyten' ), '| ', '' ); ?><!-- Edit post -->

			<?php comments_template( '', true ); ?>
		</div><!-- End #post -->
	</div><!-- End #postArea -->

	<?php endif; // This was the if statement that broke the loop into three parts based on categories. ?>

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<?php next_posts_link( __( '<div class="more-posts"> More Escaped this way</div>', 'twentyten' ) ); ?>
				<?php previous_posts_link( __( '<div class="newer-posts">Newer Escaped </div>', 'twentyten' ) ); ?>
<?php endif; ?>