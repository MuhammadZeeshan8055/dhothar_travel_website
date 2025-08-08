<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>Dhothar International Travel And Tour</title>
    <meta name="description" content="Dhothar International Travel And Tour">
    <meta name="author" content="nicDark">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  	<!-- START CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('rs-plugin/assets/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('showbizpro/assets/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/superfish.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox/jquery.fancybox-thumbs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/isotope.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
    <!-- END CSS -->

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Signika:400,300,600,700" rel="stylesheet" type="text/css">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon/dig.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon/dig.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicon/dig.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicon/dig.png') }}">
    <!-- END FAVICONS -->

    <style>
        .grid_3.singlemasonry.single-isotope-filter.filterthree {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
    </style>

    <!-- Styles / Scripts via Vite -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/assets/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    <div id="app"></div>

    <!-- START JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/excanvas.js') }}"></script>
    <script src="{{ asset('rs-plugin/assets/js/jquery.themepunch.plugins.min.js') }}"></script>
    <script src="{{ asset('rs-plugin/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('showbizpro/assets/js/jquery.themepunch.plugins.min.js') }}"></script>
	<script src="{{ asset('showbizpro/assets/js/jquery.themepunch.showbizpro.min.js') }}"></script>
    <script src="{{ asset('assets/js/scroolto.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ asset('assets/js/fancybox/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/fancybox/jquery.fancybox-thumbs.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
	<script src="{{ asset('assets/js/menu/hoverIntent.js') }}"></script>
	<script src="{{ asset('assets/js/menu/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/js/menu/tinynav.min.js') }}"></script>
	<script src="{{ asset('assets/js/twitter/jquery.twitterfeed.min.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <!-- END JS -->

    @stack('scripts') <!-- optional if you want to push page-specific JS -->

    <!-- Inline JS -->
    <script>
        jQuery(document).ready(function() {
            // Carousel
            jQuery('.showbiz-container').showbizpro({
                dragAndScroll:"on",
                visibleElementsArray:[4,3,2,1]
            });

            // Revolution Slider
            jQuery('.tp-banner-full-width').revolution({
                delay:9000,
                startwidth:1170,
                startheight:650,
                hideThumbs:10,
                navigationType:"none",
                fullWidth:"on",
                forceFullWidth:"on"
            });

            // Charts
            $('.percentagehome').easyPieChart({
                size: 140,
                rotate: 0,
                lineWidth: 10,
                animate: 1000,
                barColor: '#55738F',
                trackColor: 'transparent',
                scaleColor: false,
                lineCap: 'butt'
            });

            // Tours height adjustment
            var qnthometour = $('.hometour').length;
            setInterval(function(){
                for (let i = 0; i < qnthometour; i++) {
                    var titleHeight = $(".hometour-"+i+" .titleimghometour").height();
                    var dateHeight = $(".hometour-"+i+" .datedayhometour").height();
                    $(".hometour-"+i+" .descriptionhometour").css({
                        "height": titleHeight - dateHeight
                    });

                    var tabsHeight = $(".hometour-"+i+" .tabshometour").height();
                    var footerHeight = $(".hometour-"+i+" .footerhometour").height();
                    $(".hometour-"+i+" .listhometour").css({
                        "height": tabsHeight - footerHeight
                    });
                }
            }, 0);

            // Tabs & Tooltips
            $(".hometabs").tabs();
            $( ".hometabs, .tooltip" ).tooltip({ position: { my: "top+0 top-75", at: "center center" } });

            // Scroll
            $(".descriptionhometour").niceScroll({
                touchbehavior:false,
                cursorcolor:"#EBEEF2",
                cursoropacitymax:0.9,
                cursorwidth:3,
                autohidemode:true,
                cursorborder:"0px solid #2848BE",
                cursorborderradius:"0px"
            });

            $(".listhometour, .listarchivedestination").niceScroll({
                touchbehavior:true,
                cursorcolor:"#EBEEF2",
                cursoropacitymax:0.9,
                cursorwidth:3,
                autohidemode:true,
                cursorborder:"0px solid #2848BE",
                cursorborderradius:"0px"
            });

            // Fancybox
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
    </script>
</body>
</html>
