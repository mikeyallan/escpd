
	<?php wp_footer(); ?>
	</body>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {

		 var top = $('.main-nav').offset().top - parseFloat($('.main-nav').css('margin-top').replace(/auto/, 0));

		 $(window).scroll(function(event) {
		     var y = $(this).scrollTop();
    
		     if (y >= top ) {
		         $('.main-nav').addClass('nav-fixed');
		     } else {
		         $('.main-nav').removeClass('nav-fixed');
		     }
		 });
 
		});
	</script>
	
	
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
</html>