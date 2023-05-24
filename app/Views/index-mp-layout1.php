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
<link href="<?php echo base_url(); ?>public/assets/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="<?php echo base_url(); ?>public/assets/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?php echo base_url(); ?>public/assets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?php echo base_url(); ?>public/assets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?php echo base_url(); ?>public/assets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?php echo base_url(); ?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>public/assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>public/assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>public/assets/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="<?php echo base_url(); ?>public/assets/css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="<?php echo base_url(); ?>public/assets/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?php echo base_url(); ?>public/assets/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?php echo base_url(); ?>public/assets/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?php echo base_url(); ?>public/assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?php echo base_url(); ?>public/assets/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?php echo base_url(); ?>public/assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url(); ?>public/assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url(); ?>public/assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?php echo base_url(); ?>public/assets/css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">


<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
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
  
  <!-- Header -->
  <header id="header" class="header modern-header modern-header-theme-colored">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="widget text-white">
              <i class="fa fa-clock-o text-white"></i> Opening Hours:  Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget pull-right flip sm-pull-none">
              <ul class="nav navbar-nav list-bordered language-switcher">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle text-theme-colored" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>public/assets/images/flags/en.png" alt="En"> ENG <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><img src="<?php echo base_url(); ?>public/assets/images/flags/fr.png" alt="En"> France</a></li>
                    <li><a href="#"><img src="<?php echo base_url(); ?>public/assets/images/flags/de.png" alt="En"> German</a></li>
                    <li><a href="#"><img src="<?php echo base_url(); ?>public/assets/images/flags/it.png" alt="En"> Italy</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="widget">
              <ul class="list-inline  text-right flip sm-text-center">
                <li class="m-0 pl-10"> <a href="ajax-load/login-form.html" class="text-white ajaxload-popup"><i class="fa fa-user-o mr-5 text-white"></i> Login /</a> </li>
                <li class="m-0 pl-0 pr-10"> 
                  <a href="ajax-load/register-form.html" class="text-white ajaxload-popup"><i class="fa fa-edit mr-5 text-white"></i>Register</a> 
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-light xs-text-center">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget sm-text-center">
              <i class="fa fa-envelope text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
              <a href="#" class="font-12 text-gray text-uppercase">Mail Us Today</a>
              <h5 class="font-13 text-black m-0"> info@yourdomain.com</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-6">
            <div class="widget text-center">
              <a class="" href="index-mp-layout1.html"><img src="<?php echo base_url(); ?>public/assets/images/logo-wide.png" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget sm-text-center">
              <i class="fa fa-phone-square text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
              <a href="#" class="font-12 text-gray text-uppercase">Call us for more details</a>
              <h5 class="font-13 text-black m-0"> +(012) 345 6789</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbascrolltofixed">
        <div class="container">
          <nav id="menuzord" class="menuzord green">
            <ul class="menuzord-menu">
              <li class="active"><a href="#home">Home</a>
                <ul class="dropdown">
                  <li><a href="index-mp-layout1.html">Index Multipage Layout</a></li>
                  <li><a href="index-sp-layout1.html">Index Singlepage Layout</a></li>
                </ul>
              </li>
              <li><a href="#">Pages</a>
                <ul class="dropdown">
                  <li><a href="page-about1.html">About Style 1</a></li>                  
                  <li><a href="page-events-list.html">Events list</a></li>
                  <li><a href="page-gallery.html">Gallery</a></li>
                  <li><a href="page-faqs.html">Faqs</a></li>
                  <li><a href="page-contact.html">Contact</a></li>
                  <li><a href="page-coming-soon.html">Coming Soon</a></li>
                  <li><a href="page-404.html">Page 404</a></li>
                  <li><a href="page-under-construction.html">Under Construction</a></li>
                </ul>
              </li>
              <li><a href="#">Courses</a>
                <ul class="dropdown">
                  <li><a href="page-course.html">Courses Style 1</a></li>
                  <li><a href="page-course-details.html">Courses-Details</a></li>
                </ul>
              </li>
              <li><a href="#">Teachers</a>
                <ul class="dropdown">
                  <li><a href="page-teachers-style1.html">Teachers Style 1</a></li>
                  <li><a href="page-teachers-details.html">Teachers-Details</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)">Mega Menu</a>
                <div class="megamenu megamenu-bg-img">
                  <div class="megamenu-row">
                    <div class="col3">
                      <h4 class="megamenu-col-title">Latest News:</h4>
                      <div class="widget">
                        <div class="latest-posts">
                          <article class="post media-post clearfix pb-0 mb-10">
                            <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                              <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Post Title Here</a></h5>
                              <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                          </article>
                          <article class="post media-post clearfix pb-0 mb-10">
                            <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                              <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Industrial Coatings</a></h5>
                              <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                          </article>
                          <article class="post media-post clearfix pb-0 mb-10">
                            <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                              <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Storefront Installations</a></h5>
                              <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                          </article>
                          <article class="post media-post clearfix pb-0 mb-10">
                            <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                              <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Industrial Coatings</a></h5>
                              <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <div class="col3">
                      <h4 class="megamenu-col-title"><strong>Featured News:</strong></h4>
                      <article class="post clearfix">
                        <div class="entry-header">
                          <div class="post-thumb"> <img class="img-responsive" src="<?php echo base_url(); ?>public/assets/images/blog/1.jpg" alt=""> </div>
                        </div>
                        <div class="entry-content">
                          <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua</p>
                          <a class="btn btn-dark btn-theme-colored" href="#">read more..</a> </div>
                      </article>
                    </div>
                    <div class="col3">
                      <h4 class="megamenu-col-title">Promotional Offer:</h4>
                      <img src="<?php echo base_url(); ?>public/assets/images/megamenu/megamenu-sale-off.jpg" alt="">
                    </div>
                    <div class="col3">
                      <h4 class="megamenu-col-title">Quick Links:</h4>
                      <ul class="list-dashed list-icon">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Disclaimer</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Copyright Notice</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li><a href="#">Blog</a>
                <ul class="dropdown">
                  <li><a href="blog-grid-3-column.html">Blog 3Column</a></li>
                  <li><a href="single-blog.html">Single Blog</a></li>
                </ul>
              </li>
            </ul>
            <ul class="pull-right sm-pull-nonelist-inline nav-side-icon-list">
              <li>
                <a href="#fullscreen-search-form" id="fullscreen-search-btn"><i class="search-icon text-theme-colored2 fa fa-search"></i></a>
                <div id="fullscreen-search-form">
                  <button type="button" class="close">×</button>
                  <form>
                    <input type="search" value="" placeholder="Search keywords(s)" />
                    <button type="submit"><i class="search-icon fa fa-search"></i></button>
                  </form>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>public/assets/images/bg/bg12.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="<?php echo base_url(); ?>public/assets/images/bg/bg12.jpg" alt="" data-bgposition="top 40%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-2" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Take the <span class="text-theme-colored2">world's</span> best <span class="text-theme-colored2">Education</span> Site.
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                  data-y="['top','top','top','top']" data-voffset="['280','220','180','180']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-default btn-theme-colored2 btn-xl">Read More</a> <a href="#" class="btn btn-dark btn-theme-colored btn-xl">Register Now</a>
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>public/assets/images/bg/bg8.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="<?php echo base_url(); ?>public/assets/images/bg/bg8.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"  class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-2-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['28','24','24','24']"
                  data-lineheight="['33','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-textalign="['center','center','center','center']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">Online Solution
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['165','135','105','130']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Grow Up<span class="text-theme-colored2"> Future</span> Choose <span class="text-theme-colored2">Right</span> Solution.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['320','260','220','220']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
                </div>
                <!-- LAYER NR. 5 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-5" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['400','340','300','300']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-dark btn-theme-colored2 btn-xl">Read More</a>
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo base_url(); ?>public/assets/images/bg/bg2.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="<?php echo base_url(); ?>public/assets/images/bg/bg2.jpg" alt="" data-bgposition="top 30%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-3-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">We help you <span class="text-theme-colored2">Education</span> to grow and expand
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']" 
                  data-y="['top','top','top','top']" data-voffset="['280','220','180','180']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-dark btn-theme-colored2 btn-xl">Read More</a>
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-3-layer-5" 
                  data-x="['center','center','center','center']" data-hoffset="['310','33','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                </div>
              </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: home-boxed -->
    <section>
      <div class="container pb-0">
        <div class="section-content">
          <div class="row"  data-margin-top="-150px">
            <div class="col-md-4">
              <div class="icon-box iconbox-border border-theme-colored2 bg-theme-colored text-center p-40 mb-sm-50">
                <a class="icon icon-lg icon-top bg-theme-colored2 icon-rounded icon-border-effect effect-rounded" href="#">
                  <i class="fa fa-book text-white"></i>
                </a>
                <h3 class="icon-box-title mt-50 text-white">Online Course</h3>
                <p class="text-white mb-20">Lorem ipsum dolor sit amet adipisi elit molestias non nulla placeat odio dolor amet  dicta alias.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box text-center p-40 mb-sm-50 border-2px border-theme-colored2" data-bg-img="<?php echo base_url(); ?>public/assets/images/about/a1.jpg">
                <div>
                <span class="typed-text-carousel font-20 text-white" data-speed="50" data-back_delay="600" data-loop="true">
                <span class="">Welcome To StudyPro</span>
                <span class="">Admission for Spring</span>
                </span>
                <h2 class="font-54 text-white">40% Off</h2>
                <a href="#" class="btn btn-default text-theme-colored mt-5 mb-10">Signup Now</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box iconbox-border border-theme-colored2 bg-theme-colored text-center p-40 mb-sm-50">
                <a class="icon icon-lg icon-top bg-theme-colored2 icon-rounded icon-border-effect effect-rounded" href="#">
                  <i class="fa fa-user text-white"></i>
                </a>
                <h3 class="icon-box-title mt-50 text-white">Expart Teachers</h3>
                <p class="text-white mb-20">Lorem ipsum dolor sit amet adipisi elit molestias non nulla placeat odio dolor amet  dicta alias.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
    <section class="">
      <div class="container pt-sm-0 pb-0">
        <div class="row">
          <div class="col-md-5">
            <h3 class="text-theme-colored mt-0 mt-sm-30 mb-0">Welcome To</h3>
            <h2 class="text-theme-colored2 mt-0">StudyPro University</h2>

              <div class="event media mt-20 mb-10 no-bg no-border">
                <div class="event-date media-left pull-left flip">
                  <img src="<?php echo base_url(); ?>public/assets/images/about/s1.jpg" class="img-circle img-thumbnail mt-5" alt="">
                </div>
                <div class="media-body pl-10">
                  <div class="event-content pull-left flip">
                    <h3 class="event-title media-heading mt-15"><a href="#">Our Mission</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit Veniam quas, quidem totam</p>
                  </div>
                </div>
              </div>

              <div class="event media mt-20 mb-10 no-bg no-border">
                <div class="event-date media-left pull-left flip">
                  <img src="<?php echo base_url(); ?>public/assets/images/about/s2.jpg" class="img-circle img-thumbnail mt-5" alt="">
                </div>
                <div class="media-body pl-10">
                  <div class="event-content pull-left flip">
                    <h3 class="event-title media-heading mt-15"><a href="#">Our Activity</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit Veniam quas, quidem totam</p>
                  </div>
                </div>
              </div>

              <div class="event media mt-20 mb-10 no-bg no-border">
                <div class="event-date media-left pull-left flip">
                  <img src="<?php echo base_url(); ?>public/assets/images/about/s3.jpg" class="img-circle img-thumbnail mt-5" alt="">
                </div>
                <div class="media-body pl-10">
                  <div class="event-content pull-left flip">
                    <h3 class="event-title media-heading mt-15"><a href="#">Our Vission</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit Veniam quas, quidem totam</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-sm-6 mt-30">
               <img src="<?php echo base_url(); ?>public/assets/images/about/dc1.png" alt="">
              </div>
              <div class="col-sm-6">
               <div class="p-30 mt-0 bg-theme-colored">
                <h3 class="title-pattern mt-0"><span class="text-white">Request <span class="text-theme-color-2">Information</span></span></h3>
                <!-- Appilication Form Start-->
                <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="http://thememascot.net/demo/personal/s/studypro/j/demo/includes/reservation.php">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <div class="styled-select">
                          <select id="person_select" name="person_select" class="form-control" required="">
                            <option value="">Choose Subject</option>
                            <option value="1 Person">Software Engineering</option>
                            <option value="2 Person">Computer Science engineering</option>
                            <option value="3 Person">Accounting Technologies</option>
                            <option value="Family Pack">BACHELOR`S DEGREE</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <textarea placeholder="Enter Message" rows="3" class="form-control required" name="form_message" id="form_message" aria-required="true"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-0 mt-10">
                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                        <button type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait...">Submit Request</button>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- Application Form End-->
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: info-boxes -->
    <section class="">
      <div class="container pt-0 pt-sm-30">
        <div class="section-content">
          <div class="row equal-height-inner home-boxes">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto bg-theme-colored">
                <div class="text-center pt-30 pb-30">
                  <i class="fa fa-user text-white font-64"></i>
                  <h4 class="text-uppercase mt-20"><a href="#" class="text-white">24 Hours Service</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored2-darker2">
                <div class="text-center pt-30 pb-30">
                  <i class="fa fa-comments-o text-white font-64"></i>
                  <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Online Help</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored-darker3">
                <div class="text-center pt-30 pb-30">
                  <i class="fa fa-cc-paypal text-white font-64"></i>
                  <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Online Payment</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored2-darker4">
                <div class="text-center pt-30 pb-30">
                  <i class="fa fa-mobile text-white font-64"></i>
                  <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Call +(012) 345 6789</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Courses -->
    <section id="courses" class="bg-silver-light">
      <div class="container pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase line-bottom-double-line-centered mt-0">Popular <span class="text-theme-colored2">Courses</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="owl-carousel-3col">
            <div class="item">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="<?php echo base_url(); ?>public/assets/images/course/sm1.jpg">
                  <div class="price-tag">$460</div>
                </div>
                <div class="course-details bg-white border-1px clearfix p-15 pt-15">
                  <div class="course-top-part">
                    <a href="page-course-details.html"><h4 class="line-bottom-centered mt-20">Nural Networking Course</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars text-theme-colored2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="author-thumb">
                    <img src="<?php echo base_url(); ?>public/assets/images/course/xs1.jpg" alt="" class="img-circle img-thumbnail">
                  </div>
                  <p class="course-description mt-5">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend repreh</p>
                </div>
                <div class="course-meta bg-theme-colored">
                  <ul class="list-inline text-white">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>3 hours</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>18 Lessons</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>34 Seats</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="<?php echo base_url(); ?>public/assets/images/course/sm2.jpg">
                  <div class="price-tag">Free</div>
                </div>
                <div class="course-details bg-white border-1px clearfix p-15 pt-15">
                  <div class="course-top-part">
                    <a href="page-course-details.html"><h4 class="line-bottom-centered mt-20">Computer Science</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars text-theme-colored2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="author-thumb">
                    <img src="<?php echo base_url(); ?>public/assets/images/course/xs2.jpg" alt="" class="img-circle img-thumbnail">
                  </div>
                  <p class="course-description mt-5">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend repreh</p>
                </div>
                <div class="course-meta bg-theme-colored">
                  <ul class="list-inline text-white">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>3 hours</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>18 Lessons</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>34 Seats</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="<?php echo base_url(); ?>public/assets/images/course/sm3.jpg">
                  <div class="price-tag">$180</div>
                </div>
                <div class="course-details bg-white border-1px clearfix p-15 pt-15">
                  <div class="course-top-part">
                    <a href="page-course-details.html"><h4 class="line-bottom-centered mt-20">Accounting</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars text-theme-colored2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="author-thumb">
                    <img src="<?php echo base_url(); ?>public/assets/images/course/xs3.jpg" alt="" class="img-circle img-thumbnail">
                  </div>
                  <p class="course-description mt-5">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend repreh</p>
                </div>
                <div class="course-meta bg-theme-colored">
                  <ul class="list-inline text-white">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>3 hours</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>18 Lessons</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>34 Seats</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="<?php echo base_url(); ?>public/assets/images/course/sm4.jpg">
                  <div class="price-tag">$180</div>
                </div>
                <div class="course-details bg-white border-1px clearfix p-15 pt-15">
                  <div class="course-top-part">
                    <a href="page-course-details.html"><h4 class="line-bottom-centered mt-20">Communication</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars text-theme-colored2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="author-thumb">
                    <img src="<?php echo base_url(); ?>public/assets/images/course/xs4.jpg" alt="" class="img-circle img-thumbnail">
                  </div>
                  <p class="course-description mt-5">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend repreh</p>
                </div>
                <div class="course-meta bg-theme-colored">
                  <ul class="list-inline text-white">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>3 hours</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>18 Lessons</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>34 Seats</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="<?php echo base_url(); ?>public/assets/images/course/sm5.jpg">
                  <div class="price-tag">$120</div>
                </div>
                <div class="course-details bg-white border-1px clearfix p-15 pt-15">
                  <div class="course-top-part">
                    <a href="page-course-details.html"><h4 class="line-bottom-centered mt-20">Psychology</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars text-theme-colored2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="author-thumb">
                    <img src="<?php echo base_url(); ?>public/assets/images/course/xs5.jpg" alt="" class="img-circle img-thumbnail">
                  </div>
                  <p class="course-description mt-5">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend repreh</p>
                </div>
                <div class="course-meta bg-theme-colored">
                  <ul class="list-inline text-white">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>3 hours</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>18 Lessons</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>34 Seats</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="<?php echo base_url(); ?>public/assets/images/course/sm6.jpg">
                  <div class="price-tag">$360</div>
                </div>
                <div class="course-details bg-white border-1px clearfix p-15 pt-15">
                  <div class="course-top-part">
                    <a href="page-course-details.html"><h4 class="line-bottom-centered mt-20">Electrical Engineering</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars text-theme-colored2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="author-thumb">
                    <img src="<?php echo base_url(); ?>public/assets/images/course/xs3.jpg" alt="" class="img-circle img-thumbnail">
                  </div>
                  <p class="course-description mt-5">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend repreh</p>
                </div>
                <div class="course-meta bg-theme-colored">
                  <ul class="list-inline text-white">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>3 hours</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>18 Lessons</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>34 Seats</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-7" data-bg-img="<?php echo base_url(); ?>public/assets/images/bg/bg5.jpg" data-parallax-ratio="0.7">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 mb-50 text-white">We are always ahead <br> Professional Education for Your Future.</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-theme-colored2"></i>
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="5100" data-theme="minimal">0</div>
              <h5 class="text-white text-uppercase mb-0">Happy Customers</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-note2 mt-5 text-theme-colored2"></i>
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="200" data-theme="minimal">0</div>
              <h5 class="text-white text-uppercase mb-0">Approved Courses</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-users mt-5 text-theme-colored2"></i>
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="20" data-theme="minimal">0</div>
              <h5 class="text-white text-uppercase mb-0">Certified Teachers</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
            <div class="funfact text-center">
              <i class="pe-7s-cup mt-5 text-theme-colored2"></i>
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="600" data-theme="minimal">0</div>
              <h5 class="text-white text-uppercase mb-0">Awards Won</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: team -->
    <section id="team">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-double-line-centered mt-0">Our <span class="text-theme-colored2">Teachers</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row mtli-row-clearfix">
            <div class="owl-carousel-4col">
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="<?php echo base_url(); ?>public/assets/images/team/sm-1.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html">Sakib Vettori</a></h3>
                    <h5 class="text-theme-color">Teacher - MBA</h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>                  
                  </div>
                </div>              
              </div>
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="<?php echo base_url(); ?>public/assets/images/team/sm-2.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html"> Maria Vettori</a></h3>
                    <h5 class="text-theme-color">Teacher - MBA</h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>                  
                  </div>
                </div>              
              </div>
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="<?php echo base_url(); ?>public/assets/images/team/sm-3.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html"> Sakib Martin</a></h3>
                    <h5 class="text-theme-color">Teacher - MBA</h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>                  
                  </div>
                </div>              
              </div>
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="<?php echo base_url(); ?>public/assets/images/team/sm-4.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html"> Maria Martin</a></h3>
                    <h5 class="text-theme-color">Teacher - MBA</h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>                  
                  </div>
                </div>              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: events -->
    <section id="event" class="bg-silver-light">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="line-bottom mt-0"><i class="fa fa-calendar mr-10"></i>Upcoming <span class="text-theme-colored2">Events</span></h2>
              <div class="event media sm-maxwidth400 border-bottom mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">28</li>
                        <li class="font-18 text-white text-center text-uppercase">Feb</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-0 p-5 pb-0 pt-0">
                      <h4 class="media-heading font-weight-600"><a href="#">Upcoming Event Title</a></h4>
                      <p class="mb-0">psum dolor amet consectetur elitQuas evenie tnemo dicta Ullam namdolor sit amet adipisic evenietneo evenie </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="event media sm-maxwidth400 border-bottom mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored2 border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">26</li>
                        <li class="font-18 text-white text-center text-uppercase">OCT</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-0 p-5 pb-0 pt-0">
                      <h4 class="media-heading font-weight-600"><a href="#">Upcoming Event Title</a></h4>
                      <p class="mb-0">psum dolor amet consectetur elitQuas evenie tnemo dicta Ullam namdolor sit amet adipisic evenietneo evenie </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="event media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">12</li>
                        <li class="font-18 text-white text-center text-uppercase">DEC</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-0 p-5 pb-0 pt-0">
                      <h4 class="media-heading font-weight-600"><a href="#">Upcoming Event Title</a></h4>
                      <p class="mb-0">psum dolor amet consectetur elitQuas evenie tnemo dicta Ullam namdolor sit amet adipisic evenietneo evenie </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <h2 class="line-bottom mt-0">University <span class="text-theme-colored2">Video</span></h2>
              <div class="row">
                <div class="col-md-12">
                  <div class="box-hover-effect play-button">
                    <div class="effect-wrapper">
                      <div class="thumb">
                        <img class="img-fullwidth" src="<?php echo base_url(); ?>public/assets/images/about/5.jpg" alt="project">
                      </div>
                      <div class="overlay-shade bg-theme-colored"></div>
                      <div class="video-button"></div>
                      <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?v=F3QpgXBtDeo" title="Youtube Video">Youtube Video</a>
                    </div>
                  </div>             
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-20">
            <div class="col-md-4">
              <div class="icon-box bg-white left media border-1px border-theme-colored2 bg-hover-theme-colored mb-30 p-30 pb-20"> <a class="media-left pull-left flip" href="#"><i class="fa fa-book text-theme-colored2"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading">Popular Courses</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box bg-white left media border-1px border-theme-colored2 bg-hover-theme-colored mb-30 p-30 pb-20"> <a class="media-left pull-left flip" href="#"><i class="fa fa-graduation-cap text-theme-colored2"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading">Best Teachers</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box bg-white left media border-1px border-theme-colored2 bg-hover-theme-colored mb-30 p-30 pb-20"> <a class="media-left pull-left flip" href="#"><i class="fa fa-university text-theme-colored2"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading">Certification</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-double-line-centered mt-0">Campus <span class="text-theme-colored2">Gallery</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <!-- Portfolio Gallery Grid -->
              <div class="gallery-isotope default-animation-effect grid-4 masonry gutter-small clearfix" data-lightbox="gallery">
                <!-- grid sizer for Masonry -->
                <div class="gallery-item gallery-item-sizer"></div>
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item wide">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>public/assets/images/gallery/m1.jpg" alt="project">
                    <div class="overlay-shade bg-theme-colored"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>public/assets/images/gallery/m1.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/800x600">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>public/assets/images/gallery/m3.jpg" alt="project">
                    <div class="overlay-shade bg-theme-colored"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>public/assets/images/gallery/m3.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/400x300">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>public/assets/images/gallery/m4.jpg" alt="project">
                    <div class="overlay-shade bg-theme-colored"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>public/assets/images/gallery/m4.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/400x300">View more</a>
                  </div>
                </div>

                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>public/assets/images/gallery/m5.jpg" alt="project">
                    <div class="overlay-shade bg-theme-colored"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>public/assets/images/gallery/m5.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/400x300">View more</a>
                  </div>
                </div>

                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>public/assets/images/gallery/m2.jpg" alt="project">
                    <div class="overlay-shade bg-theme-colored"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>public/assets/images/gallery/m2.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/400x600">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>public/assets/images/gallery/m6.jpg" alt="project">
                    <div class="overlay-shade bg-theme-colored"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>public/assets/images/gallery/m6.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/400x300">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>public/assets/images/gallery/m7.jpg" alt="project">
                    <div class="overlay-shade bg-theme-colored"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>public/assets/images/gallery/m7.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/400x300">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url(); ?>public/assets/images/gallery/m8.jpg" alt="project">
                    <div class="overlay-shade bg-theme-colored"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored2">
                          <a data-lightbox="image" href="<?php echo base_url(); ?>public/assets/images/gallery/m8.jpg"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/400x300">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: testimonials -->
    <section class="divider layer-overlay overlay-theme-colored-5" data-bg-img="<?php echo base_url(); ?>public/assets/images/bg/team-bg1.png">
      <div class="container pt-60 pb-60">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="line-bottom-double-line-centered text-white text-center mt-0 mb-0">Feedback From Our Students</h2>
              <div class="text-center mb-30"><i class="icon_quotations font-72 text-gray-lightgray"></i></div>
            <div class="owl-carousel-1col" data-dots="true">
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-thumbnail img-circle" alt="" src="<?php echo base_url(); ?>public/assets/images/testimonials/1.jpg"></div>
                  <div class="content pt-10">
                    <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsamexpe ita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.consectetur adipisicing elit</p>
                    <h4 class="author text-theme-colored2 mb-0">Catherine Grace</h4>
                    <h6 class="title text-white mt-0 mb-15">Designer</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-thumbnail img-circle" alt="" src="<?php echo base_url(); ?>public/assets/images/testimonials/2.jpg"></div>
                  <div class="content pt-10">
                    <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsamexpe ita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.consectetur adipisicing elit</p>
                    <h4 class="author text-theme-colored2 mb-0">Catherine Grace</h4>
                    <h6 class="title text-white mt-0 mb-15">Designer</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="img-thumbnail img-circle" alt="" src="<?php echo base_url(); ?>public/assets/images/testimonials/3.jpg"></div>
                  <div class="content pt-10">
                    <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsamexpe ita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.consectetur adipisicing elit</p>
                    <h4 class="author text-theme-colored2 mb-0">Catherine Grace</h4>
                    <h6 class="title text-white mt-0 mb-15">Designer</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: blog -->
    <section id="blog" class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-double-line-centered mt-0">Latest <span class="text-theme-colored2">News</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-3col owl-nav-top" data-nav="true">
                <div class="item">
                  <article class="post clearfix campaign mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="<?php echo base_url(); ?>public/assets/images/blog/1.jpg" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content p-20 bg-white">
                      <div class="entry-meta media mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h3 class="entry-title text-white text-uppercase m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h3>
                            <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                            <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor</p>
                      <a class="btn btn-theme-colored2 btn-sm text-white" href="blog-single-left-sidebar.html"> View Details</a>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix campaign mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="<?php echo base_url(); ?>public/assets/images/blog/2.jpg" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content p-20 bg-white">
                      <div class="entry-meta media mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h3 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a></h3>
                            <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                            <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                      
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor</p>
                      <a class="btn btn-theme-colored2 btn-sm text-white" href="blog-single-left-sidebar.html"> View Details</a>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix campaign mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="<?php echo base_url(); ?>public/assets/images/blog/3.jpg" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content p-20 bg-white">
                      <div class="entry-meta media mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h3 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h3>
                            <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                            <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor</p>
                      <a class="btn btn-theme-colored2 btn-sm text-white" href="blog-single-left-sidebar.html"> View Details</a>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored2">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col text-center">
              <div class="item"> <a href="#"><img src="<?php echo base_url(); ?>public/assets/images/clients/w1.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="<?php echo base_url(); ?>public/assets/images/clients/w2.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="<?php echo base_url(); ?>public/assets/images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="<?php echo base_url(); ?>public/assets/images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="<?php echo base_url(); ?>public/assets/images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="<?php echo base_url(); ?>public/assets/images/clients/w6.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="<?php echo base_url(); ?>public/assets/images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="<?php echo base_url(); ?>public/assets/images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="<?php echo base_url(); ?>public/assets/images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="<?php echo base_url(); ?>public/assets/images/clients/w6.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-img="<?php echo base_url(); ?>public/assets/images/footer-bg.png" data-bg-color="#152029">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="<?php echo base_url(); ?>public/assets/images/logo-white-footer.png">
            <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
            </ul>            
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-vk"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Useful Links</h4>
            <ul class="angle-double-right list-border">
              <li><a href="#">Home Page</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Mission</a></li>
              <li><a href="#">Terms and Conditions</a></li>
              <li><a href="#">FAQ</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Top News</h4>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">PHP Learning</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Web Development</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Spoken English</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Tues :  </span>
                  <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix"> <span> Wednes - Thurs :</span>
                  <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                </li>
                <li class="clearfix"> <span> Fri : </span>
                  <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right text-white closed"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2b2d3b">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-12 text-black-777 m-0 sm-text-center"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->

<!-- external javascripts -->
<script src="<?php echo base_url(); ?>public/assets/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?php echo base_url(); ?>public/assets/js/jquery-plugin-collection.js"></script>
<!-- JS | Custom script for all pages -->
<script src="<?php echo base_url(); ?>public/assets/js/custom.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/extra.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?php echo base_url(); ?>public/assets/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/extra-rev-slider-new.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>


</body>


</html>