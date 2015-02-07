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
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <!-- endbuild -->
  </head>
  <body style="background:black;">
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <iframe style="width:100%; padding:0; height:auto;" src="index.html" frameborder="0" scrolling="no" onload='javascript:FeedScouts.resizeIframe(this);'></iframe>


    <!-- build:js(.) scripts/vendor.js -->
    <!-- bower:js --><!-- endbower -->
    <!-- endbuild -->
        <!-- build:js(.) scripts/plugins.js --><!-- endbuild -->
        <script>
            var FeedScouts = {
                targetElement:'#instafeed',
                resizeIframe: function (obj) {
                    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
                }
            }
        </script>
        <!-- build:js({app,.tmp}) scripts/main.js --><!-- endbuild -->
</body>
</html>
