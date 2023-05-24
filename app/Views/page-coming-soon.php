<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="StudyPro - Education & Courses HTML5 Template" />
<meta name="keywords" content="keyword1,keyword2,keyword3,keyword4,keyword5" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>StudyPro - Education & Courses HTML5 Template</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- start main-content -->
  <div class="main-content"> 
    <!-- Section: home -->
    <section id="home" class="bg-lightest fullscreen">
      <div class="display-table text-center">
        <div class="display-table-cell">
          <div class="container pt-0 pb-0"><div class="row">
              <div class="col-md-10 col-md-offset-1">
                <h1 class="font-weight-300 text-theme-colored2 font-64">We Are Coming Soon</h1>
                <div id="flipclock1" class="clock" style="margin:2em; width: auto; display: inline-block;"></div>
                <form id="mailchimp-subscription-form" class="newsletter-form mt-0 mb-30 maxwidth500">
              		<label for="mce-EMAIL"></label>
                  <div class="input-group">
                    <input type="email" id="mce-EMAIL" data-height="45px" class="form-control input-lg" placeholder="Your Email" name="EMAIL" value="">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-colored btn-theme-colored2 text-white m-0" data-height="45px">Subscribe</button>
                    </span>
                  </div>
                </form>
                <p class="font-14">Sorry.... We are improving and fixing problems of our website.<br>We will be back very soon....</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content --> 
  
  <!-- Footer -->
  <footer id="footer" class="footer text-center" data-bg-color="#2b2d3b">
    <div class="container pt-15 pb-15">
      <div class="row">
        <div class="col-md-12">
          <p class="text-white mb-0"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script src="js/extra.js"></script>
<!-- FlipClock Script -->
<script type="text/javascript">
  var clock;
  $(document).ready(function() {
    // Grab the current date
    var currentDate = new Date();
    // Set some date in the future. In this case, it's always Jan 1
    var futureDate  = new Date(2017, 10, 10, 16, 24); //Date(year, month, day, hours, minutes, seconds, milliseconds); 
    // Calculate the difference in seconds between the future and current date
    var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;
    // Instantiate a coutdown FlipClock
    clock = $('#flipclock1').FlipClock(diff, {
      clockFace: 'DailyCounter',
      countdown: true
    });
  });
</script>
</body>


</html>