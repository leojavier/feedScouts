<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>App</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.css" />
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/app.css">
    <link rel="stylesheet" href="styles/owl.carousel.css" />
    <link rel="stylesheet" href="styles/owl.theme.css" />
    <link rel="stylesheet" href="styles/webmaster-style.css">
    <!-- endbuild -->
  </head>
  <body id="app">
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <div id="app-wrapper" class="container-fluid">
         <div id="instafeed"></div>
    </div>
    <div style="clear:both; height:0;"></div>

    <!-- build:js(.) scripts/vendor.js -->
    <!-- bower:js -->
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <!-- endbower -->
    <!-- endbuild -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

        <!-- build:js(.) scripts/plugins.js -->
        <script src="bower_components/bootstrap/js/affix.js"></script>
        <script src="bower_components/bootstrap/js/alert.js"></script>
        <script src="bower_components/bootstrap/js/dropdown.js"></script>
        <script src="bower_components/bootstrap/js/tooltip.js"></script>
        <script src="bower_components/bootstrap/js/modal.js"></script>
        <script src="bower_components/bootstrap/js/transition.js"></script>
        <script src="bower_components/bootstrap/js/button.js"></script>
        <script src="bower_components/bootstrap/js/popover.js"></script>
        <script src="bower_components/bootstrap/js/carousel.js"></script>
        <script src="bower_components/bootstrap/js/scrollspy.js"></script>
        <script src="bower_components/bootstrap/js/collapse.js"></script>
        <script src="bower_components/bootstrap/js/tab.js"></script>
        <!-- endbuild -->
         
        <!-- build:js({app,.tmp}) scripts/main.js -->
        <script src="scripts/owl.carousel.js"></script>
        <script src="scripts/instafeed.js"></script>
        <script src="scripts/main.js"></script>
        <!-- endbuild -->
        <script>
            var FeedScouts = {
                targetElement:'#instafeed',
                loadButton: {// Load more button options [display, Caption, Target-element]
                    status: false,
                    text: 'Load More',
                    target: 'app-wrapper'
                },
                carousel:true,
                columns:10,
                rows:3,
                pagesFrom:0,
                pagesTo:3,
            }
        </script>
</body>
</html>
