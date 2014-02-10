<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<article class="single">
	<div class="feature-container">
		<?php if(has_post_thumbnail()) {echo get_the_post_thumbnail($post->ID, 'post-thumbnails' ); } ?>
	</div>
	<div class="article-container">
		<h1><?php the_title(); ?></h1>
		
		<div class="social-share">
			<h3 class="share-title">Share This:</h3>
				<ul>
					<li><a href="https://twitter.com/share" data-related="escpd">Twitter</a></li>
					<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink() ?>" target="_blank">Facebook</a></li>
					<li><a href="https://plus.google.com/share?url=<?php echo the_permalink() ?>">Google+</a></li>
				</ul>	
		</div>	
		
		<?php the_content(); ?>	

		 

		<?php //Price of the post
		$price = get_post_meta($post->ID, 'post_price', true);
		if ($price == '')
		{ ?>
		
		<?php } else { ?>
			<p  class="post-price"><?php echo get_post_meta($post->ID, 'post_price', true); ?></p>
		<?php } ?>
			
		<?php /*Purchase the post*/ $buy = get_post_meta($post->ID, 'post_buy', true); if ($buy == '') { ?>
		<?php } else { ?>
			<a class="post-purchase" href="<?php echo get_post_meta($post->ID, 'post_buy', true); ?>" target="blank">Buy it Here</a>
		<?php } ?>
			
	<?php //Source of the post
		$source = get_post_meta($post->ID, 'post_source', true);
		if ($source == '')
		{ ?>

	<?php } else { ?>
		<a class="post-source" href="<?php echo get_post_meta($post->ID, 'post_source', true); ?>" target="blank">Source</a>
	<?php } ?>
	
	<?php printf( __( '%2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?><!-- tags -->
	
	<p class="tags"><?php the_tags('More<br/>', ', ', '<br />'); ?></p>
	<?php wp_related_posts()?>

	</div>

</article>

<?php endwhile; ?>


<!-- TWITTER SHARE -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>




