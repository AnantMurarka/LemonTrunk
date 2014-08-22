<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 3.0.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
 	<meta charset="utf-8">
 	<title>{{ $appTitle }}.com</title>	
 	<meta content="width=device-width, initial-scale=1.0" name="viewport">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
 	<meta content="Medzoc" name="title">
  <meta content="Medical care search engine and booking" name="description">
 	<meta content="Doctor Search" name="keywords">
  <meta content="Hospital Search" name="keywords">
  <meta content="Booking Search" name="keywords">
 	<meta content="teknolohiya.ph" name="author">	
 	<meta property="og:site_name" content="-CUSTOMER VALUE-">
 	<meta property="og:title" content="-CUSTOMER VALUE-">
 	<meta property="og:description" content="-CUSTOMER VALUE-">
 	<meta property="og:type" content="website">
 	<meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
 	<meta property="og:url" content="-CUSTOMER VALUE-">	
 	<link rel="shortcut icon" href="favicon.ico">	
 	
  @yield('head')

</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>hotline number for emergency calls</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>hello@docsearch.com</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="{{ URL::route('login') }}">Log In</a></li>
                        <li><a href="{{ URL::to('createuser/start') }}">Registration</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="{{ URL::to('/')}}">
          <!-- {{ HTML::image('assets/frontend/layout/img/logos/logo-red.png') }} -->
            <h1>MED<small>ZOC.COM</small></h1>
        </a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li><a href="{{ URL::to('/') }}" >Home</a></li>
            <li><a href="{{ URL::to('howitworks') }}" >How it works</a></li>
            <li><a href="#" > Pricing</a></li>
            <li><a href="{{ URL::to('contactus') }}" >Contact Us</a></li>
            <li><a href="{{ URL::to('support') }}" >Support</a></li>
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>

	@yield('content')

	<!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>
              Is a project developed by Teknolohiya Philippines. It aims to provide doctors clinic 
              gain more patient by making their clinic searchable. And for nurse gain more income by 
              making them searchable and available for private nursing for patient in need for 
              home service. <a href="{{ URL::to('aboutus') }}">read more..</a>
            </p>

            <!-- <div class="photo-stream">
              <h2>Photos Stream</h2>
              <ul class="list-unstyled">
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=121"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=122"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=123"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=124"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=125"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=126"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=127"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=128"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=129"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=130"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=131"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=132"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=133"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=134"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=135"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=136"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=137"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=138"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=139"></a></li>
                <li><a href="#"><img alt="" src="http://lorempixel.com/100/100/people/?=130"></a></li>
              </ul>                    
            </div> -->
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              2399 Belarmino St. Bangkal, Makati City<br>
              Metro Manila, RP<br>
              Phone: comming soon<br>
              Email: <a href="mailto:hello@docsearch.com">hello@docsearch.com</a><br>
            </address>

            <!-- <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2>Newsletter</h2>
              <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
              <form action="#">
                <div class="input-group radius">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn red btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div> -->
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Newsletter</h2>
              <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
              <form action="#">
                <div class="input-group radius">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn red btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            <!-- <h2 class="margin-bottom-0">Latest Tweets</h2>
            <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a> -->
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            2014 © TEKNOLOHIYA.PH. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <!-- <li><a href="#"><i class="fa fa-skype"></i></a></li> -->
              <!-- <li><a href="#"><i class="fa fa-github"></i></a></li> -->
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <!-- <li><a href="#"><i class="fa fa-dropbox"></i></a></li> -->
            </ul>  
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    @yield('buttom_scripts')

</html>

