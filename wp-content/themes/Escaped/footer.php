<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<div id="footer">
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
		<a id="footerLogo" href="http://escpd.com/" title="<?php// echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://escpd.com/wp-content/themes/Escaped/images/ap_footer_logo.png" alt="escaped logo"/></a>
		<div id="copy" >
			Copyright &copy; 2012    escaped 
			<a href="http://escpd.com/about/">about</a>
			<a href="http://escpd.com/contact/">contact</a>
			<a href="https://twitter.com/tweescaped">twitter</a>
			<a href="http://escapedvideos.tumblr.com/" target="blank">escaped videos</a>
			<a href="http://escpd.com/privacy/">privacy</a>
			<a href="http://escpd.com/terms/">Terms</a>
		</div>
		<a id="btn_top" class="scrollToTop" href="#">Top</a>
			<!-- <a href="<?php// echo home_url( '/' ) ?>" title="<?php// echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a>-->


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</div> <!-- end footer -->
</div><!-- end site -->

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34314280-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<script type="text/javascript">
$(document).ready(function(){
 $('a.scrollToTop').click(function(){
 $('html, body').animate({scrollTop:0}, 'slow');
 return false; 
 });
})
</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>