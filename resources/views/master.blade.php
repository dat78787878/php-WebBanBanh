<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>
	<base href="{{asset(' ')}}"/> 
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
	<link rel="stylesheet" href="source/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
</head>
<body>

	
	@include('header');
	<div class="rev-slider">
		@yield('content');

	</div> <!-- .container -->
	@include('footer');
	

	<!-- include js files -->
	<script src="source/assets/dest/js/jquery.js"></script>
	<script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="source/assets/dest/vendors/animo/Animo.js"></script>
	<script src="source/assets/dest/vendors/dug/dug.js"></script>
	<script src="source/assets/dest/js/scripts.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="source/assets/dest/js/waypoints.min.js"></script>
	<script src="source/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="source/assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})

	
	</script>
	<script>
		/* <![CDATA[ */
		jQuery(document).ready(function($) {
			'use strict';

						 
try {		
	if ($(".animated")[0]) {
		$('.animated').css('opacity', '0');
		}
		$('.triggerAnimation').waypoint(function() {
		var animation = $(this).attr('data-animate');
		$(this).css('opacity', '');
		$(this).addClass("animated " + animation);

		},
			{
				offset: '80%',
				triggerOnce: true
			}
		);
} catch(err) {

	}
	
var wow = new WOW(
{
boxClass:     'wow',      // animated element css class (default is wow)
animateClass: 'animated', // animation css class (default is animated)
offset:       150,          // distance to the element when triggering the animation (default is 0)
mobile:       false        // trigger animations on mobile devices (true is default)
}
);
wow.init();	 
// NUMBERS COUNTER START
			$('.numbers').data('countToOptions', {
				formatter: function(value, options) {
					return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
				}
			});

			// start timer
			$('.timer').each(count);

			function count(options) {
				var $this = $(this);
				options = $.extend({}, options || {}, $this.data('countToOptions') || {});
				$this.countTo(options);
			} // NUMBERS COUNTER END 

		// color box

//color
  jQuery('#style-selector').animate({
  left: '-213px'
});

jQuery('#style-selector a.close').click(function(e){
  e.preventDefault();
  var div = jQuery('#style-selector');
  if (div.css('left') === '-213px') {
	jQuery('#style-selector').animate({
	  left: '0'
	});
	jQuery(this).removeClass('icon-angle-left');
	jQuery(this).addClass('icon-angle-right');
  } else {
	jQuery('#style-selector').animate({
	  left: '-213px'
	});
	jQuery(this).removeClass('icon-angle-right');
	jQuery(this).addClass('icon-angle-left');
  }
});
			

		});

		/* ]]> */
	</script>
	<script type="text/javascript">
$(function() {
	// this will get the full URL at the address bar
	var url = window.location.href;

	// passes on every "a" tag
	$(".main-menu a").each(function() {
		// checks if its the same on the address bar
		if (url == (this.href)) {
			$(this).closest("li").addClass("active");
			$(this).parents('li').addClass('parent-active');
		}
	});
});   


</script>
</body>
</html>
