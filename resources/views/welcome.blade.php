<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>Dhothar International Travel And Tour</title> <!--insert your title here-->
    <meta name="description" content="Dhothar International Travel And Tour"> <!--insert your description here-->
    <meta name="author" content="nicDark"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->

  	<!--START CSS-->
    <link rel="stylesheet" href="assets/css/style.css"> <!--main-->
    <link rel="stylesheet" href="assets/css/grid.css"> <!--grid-->
    <link rel="stylesheet" href="assets/css/responsive.css"> <!--responsive-->
    <link rel="stylesheet" href="rs-plugin/assets/css/settings.css" media="screen" /> <!--rev slider-->
    <link rel="stylesheet" href="showbizpro/assets/css/settings.css" media="screen" /> <!--showbiz-->
    <link rel="stylesheet" href="assets/css/animate.css"> <!--animate-->
    <link rel="stylesheet" href="assets/css/superfish.css" media="screen"> <!--menu-->
    <link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css"> <!--main fancybox-->
    <link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox-thumbs.css"> <!--fancybox thumbs-->
    <link rel="stylesheet" href="assets/css/isotope.css"> <!--isotope-->
    <link rel="stylesheet" href="assets/css/flexslider.css"> <!--flexslider-->
    <!--END CSS-->

    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>



    <!--FAVICONS-->
    <link rel="shortcut icon" href="assets/img/favicon/dig.png">
    <link rel="apple-touch-icon" href="assets/img/favicon/dig.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/dig.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/dig.png">
    <!--END FAVICONS-->

    <style>
        .grid_3.singlemasonry.single-isotope-filter.filterthree {

            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

    </style>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/assets/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    <div id="app"></div>

    <!--Start js-->
    <script src="assets/js/jquery.min.js"></script> <!--Jquery-->
    <script src="assets/js/jquery-ui.js"></script> <!--Jquery UI-->
    <script src="assets/js/excanvas.js"></script> <!--canvas need for ie-->
    <script src="rs-plugin/assets/js/jquery.themepunch.plugins.min.js"></script> <!--rev slider-->
    <script src="rs-plugin/assets/js/jquery.themepunch.revolution.min.js"></script> <!--rev slider-->
    <script type="text/javascript" src="showbizpro/assets/js/jquery.themepunch.plugins.min.js"></script> <!--showbiz-->
	<script type="text/javascript" src="showbizpro/assets/js/jquery.themepunch.showbizpro.min.js"></script> <!--showbiz-->
    <script src="assets/js/scroolto.js"></script> <!--Scrool To-->
    <script src="assets/js/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
    <script src="assets/js/jquery.easy-pie-chart.js"></script> <!--Chart-->
    <script src="assets/js/fancybox/jquery.fancybox.js"></script> <!--main fancybox-->
    <script src="assets/js/fancybox/jquery.fancybox-thumbs.js"></script> <!--fancybox thumbs-->
    <script src="assets/js/jquery.inview.min.js"></script> <!--inview-->
	<script src="assets/js/menu/hoverIntent.js"></script> <!--superfish-->
	<script src="assets/js/menu/superfish.min.js"></script> <!--superfish-->
    <script src="assets/js/menu/tinynav.min.js"></script> <!--tinynav-->
	<script src="assets/js/twitter/jquery.twitterfeed.min.js"></script> <!--twitter-->
    <script src="assets/js/settings.js"></script> <!--settings-->
    <!--End js-->

	<script type='text/javascript'>
		/* <![CDATA[ */


		//start carousel
		jQuery(document).ready(function() {

			jQuery('.showbiz-container').showbizpro({
				dragAndScroll:"on",
				visibleElementsArray:[4,3,2,1]
			});

		});
		//end carousel


		//start revolution slider
		var revapi;

		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner-full-width').revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:650,
					hideThumbs:10,
					navigationType:"none",
					fullWidth:"on",
					forceFullWidth:"on"
				});

		});	//ready
		//end revolution slider


		//start chart
		$(document).ready(function(){

			$('.percentagehome').easyPieChart({
				size: 140,
				rotate: 0,
				lineWidth: 10,
				animate: 1000,
				barColor: '#55738F',
				trackColor: 'transparent',
				scaleColor: false,
				lineCap: 'butt',
			});

		});
		//end chart

		//start tour
		$(document).ready(function(){

			var qnthometour = $('.hometour').length;


			setInterval(function(){

				i=0;

				while ( i < qnthometour ){

					//title and img hometours height
					var titleimghometourheight = $(".hometour-"+i+" .titleimghometour").height();
					var datedayhometourheight = $(".hometour-"+i+" .datedayhometour").height();

					$(".hometour-"+i+" .descriptionhometour").css({
					  "height": titleimghometourheight - datedayhometourheight
					});

					//tabshometourheight
					var tabshometourheight = $(".hometour-"+i+" .tabshometour").height();
					var footerhometourheight = $(".hometour-"+i+" .footerhometour").height();

					$(".hometour-"+i+" .listhometour").css({
					  "height": tabshometourheight - footerhometourheight
					});

					i++;
				}

			}, 0);

		});
		//end tour


		//start tab and tooltip
		$(document).ready(function() {
			$(".hometabs").tabs();
			$( ".hometabs, .tooltip" ).tooltip({ position: { my: "top+0 top-75", at: "center center" } });
		});
		//end tab and tooltip


		//start scroll
		$(document).ready(function() {
			//description hometour
			$(".descriptionhometour").niceScroll({
				touchbehavior:false,
				cursorcolor:"#EBEEF2",
				cursoropacitymax:0.9,
				cursorwidth:3,
				autohidemode:true,
				cursorborder:"0px solid #2848BE",
				cursorborderradius:"0px"

			});

			//list home tour
			$(".listhometour, .listarchivedestination").niceScroll({
				touchbehavior:true,
				cursorcolor:"#EBEEF2",
				cursoropacitymax:0.9,
				cursorwidth:3,
				autohidemode:true,
				cursorborder:"0px solid #2848BE",
				cursorborderradius:"0px"

			});
		});
		//end scroll


		//start fancybox
		$(document).ready(function(){

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : true,
				arrows    : true,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

		});
		//end fancybox


		/* ]]> */
	</script>
</body>
</html>
