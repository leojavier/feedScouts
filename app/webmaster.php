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
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/app.css">
    <link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="styles/webmaster-style.css">
    <!-- endbuild -->
     
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
  </head>
  <body id="app" class="webmaster" onload="admin()">
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav id="top-navigation">
        <div class="row">
         <p>Welcome user, <a href="javascript:void(0)">Logout</a></p>
         <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
      <i class="fa fa-cog"></i>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#"  data-toggle="modal" data-target=".bs-example-modal-lg"> WalksOfItaly</a></li>
      <li><a href="#"><strong class="on"><span>&bull;</span></strong> Load more button [ <strong class="on">ON</strong> ]</a></li>
      <li><a href="#">Image size <strong>[ 200 x 200 ]</strong></a></li>
      <li><a href="#">Image Limit <strong>[ 60 ]</strong></a></li>
      <li><a href="#"><strong class="off"><span>&bull;</span></strong> Load more button [ <strong class="off">OFF</strong> ]</a></li>
      <li><a href="#">Callback  <strong>[ redirect ]</strong></a></li>
      <li><a href="#">Sort by <strong>[ Most recent ]</strong></a></li>
      <li><a href="#"><i class="fa fa-user"></i> User Management</a></li>
    </ul>
  </div>
        </div>
    </nav>
    <img id="brand-logo" src="images/walks-of-italy-logo.png" alt="Walks of Italy Logo">
    <!-- <i class="fa fa-instagram"></i> -->
    <h1># WalksOfItaly</h1>
    <p><strong>What's happening right now! </strong></p>
    <!-- Navigation -->
    <nav id="domains" class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="javascript:void(0)">Rome <span class="sr-only">(current)</span></a><span class="hidden-xs">/</span></li>
            <li><a href="javascript:void(0)">Vatican City</a><span class="hidden-xs">/</span></li>
            <li><a href="javascript:void(0)">Venice</a><span class="hidden-xs">/</span></li>
            <li><a href="javascript:void(0)">Florence</a><span class="hidden-xs">/</span></li>
            <li><a href="javascript:void(0)">Pompeii</a><span class="hidden-xs">/</span></li>
            <li><a href="javascript:void(0)">Tuscany</a><span class="hidden-xs">/</span></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- End Navigation-->
    <div class="container">
       <div id="filter" class="col-lg-6 col-offset-lg-3 col-md-6 col-offset-md-3 col-sm-6 col-offset-sm-3">
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
          <div class="btn-group" role="group">
            <button type="button" class="btn">Inactive</button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">Show All</button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn">Active</button>
          </div>
        </div>
       </div>
    </div>
    <!-- Large modal -->
    <div id="app-wrapper" class="container">
         <div id="instafeed"></div>
    </div>


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
        <script src="scripts/instafeed.js"></script>
        <!-- endbuild -->
        
        <!-- build:js({app,.tmp}) scripts/main.js -->
        <script src="scripts/main.js"></script>
        <!-- endbuild -->
        
        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <p>This is the content for the modal</p>
            </div>
          </div>
        </div>
        <!--End Modal -->
        
        <script>
            var FeedScouts = {
                targetElement:'#instafeed',
                loadButton: {// Load more button options [display, Caption, Target-element]
                    status: false,
                    text: 'Load More',
                    target: 'app-wrapper'
                },
                carousel:false,
                columns:5,
                rows:1,
                pagesFrom:0,
                pagesTo:4,
            }
            function admin(){
               $('#instafeed .item').each(function(){
                   var html = "<div  data-source='"+$(this).find('a').attr('id')+"' style='height:"+$(this).find('img').height()+"px; width:"+$(this).find('img').width()+"px' class='item-hover'><a href='javascript:void(0)' data-source='"+$(this).find('a').attr('id')+"'>X</a></div>"
                   $(this).append(html);
                   $(this).find('a').css('display','block');
                   $(this).find('img').css('display','block');
               }); 
            }
        </script>
</body>
</html>
