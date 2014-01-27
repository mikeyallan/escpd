<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div id="contentWrapperCategory">

	<div id="single-post-area">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


					
			<div class="single-post ">		
					<div class="post-views" ><p><?php echo getPostViews(get_the_ID());?></p></div>	
																
					<?php 
						$postVideo = get_post_meta($post->ID, 'post-video', true); 
						if ($postVideo == '') {
							the_post_thumbnail();
						} else {
							echo get_post_meta($post->ID, 'post-video', true); 
						}
					?>		
					
					<div class="social">
						<!-- TWITTER -->
						<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
	   					<a href="http://twitter.com/share" class="twitter-share-button"
	      				data-url="<?php the_permalink(); ?>"
	      				data-via="tweescaped"
	      				data-text="<?php the_title(); ?>"
	      				data-related="Escaped:Extreme Procrastination"
	      				data-count="horizontal">Tweet</a>
	      			<!-- END Twitter -->		

					<!-- FACEBOOK -->
						<div id="fb-root"></div>
						<div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>						
					<!-- end facebook -->	
		      		</div><!-- END Social -->
										
					<h1><?php the_title(); ?></h1>

					<?php// twentyten_posted_on(); // Date and time of post.?>
					<?php the_content(); ?>						
					<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

					<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
					<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
					<?php the_author_meta( 'description' ); ?>
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
						<?php printf( __( 'View all posts by %s &rarr;', 'twentyten' ), get_the_author() ); ?>
					</a>
<?php endif; ?>
				<?php
					$tags_list = get_the_tag_list( '','' );
					if ( $tags_list ):
				?>
							<?php //Price of the post
								$price = get_post_meta($post->ID, 'post_price', true);
								if ($price == '')
								{ ?>
								<?php } else { ?>
								
								<p  class="post-price"><?php echo get_post_meta($post->ID, 'post_price', true); ?></p>
								
							<?php } ?>					
							<?php //Purchase the post
								$buy = get_post_meta($post->ID, 'post_buy', true);
								if ($buy == '')
								{ ?>
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
						<div class="tags-home-feature">
							<div class="tagsTitle">MORE</div>
							<div class="star1"></div>
							<div class="star2"></div>
						
							<?php printf( __( '%2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?><!-- tags -->
						
					</div>
					
				<?php endif; ?>

						<?php// twentyten_posted_in(); ?>
						<?php// edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

				<?php// previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'twentyten' ) . ' %title' ); ?>
				<?php// next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '' ); ?>

				<?php// comments_template( '', true ); ?>
				
				<?php setPostViews(get_the_ID()); //Sets the amount a post has been viewed. ?>

<?php endwhile; // end of the loop. ?>
</div>
</div>

<div id="sideBarSingle">
<?php get_sidebar(); ?>
</div>
<br class="clear" />
</div>

<?php get_footer(); ?>