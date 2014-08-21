@extends('layouts.frontend')

@section('head')
	<!-- Fonts START -->
 	<link href="http://fonts.googleapis	com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="styleshee	" type="text/css">
  	<!-- Fonts END -->	
 	<!-- Global styles START -->   
 	{{ HTML::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}
 	{{ HTML::style('assets/global/plugins/bootstrap/css/bootstrap.css') }}
  	{{ HTML::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}
  	{{ HTML::style('assets/global/plugins/uniform/css/uniform.default.css') }}
 	<!-- Global styles END --> 
 	 
 	<!-- Page level plugin styles START -->
 	{{ HTML::style('assets/global/plugins/fancybox/source/jquery.fancybox.css')}}
 	{{ HTML::style('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css')}}
 	{{ HTML::style('assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css')}}
 	<!-- Page level plugin styles END -->	
	
  	<!-- BEGIN PAGE LEVEL STYLES -->
  	{{ HTML::style('assets/global/plugins/select2/select2.css')}}
  	{{ HTML::style('assets/admin/pages/css/login-soft.css')}}
  	<!-- END PAGE LEVEL SCRIPTS -->
	
 	<!-- Theme styles START -->
 	{{ HTML::style('assets/global/css/components.css') }}
 	{{ HTML::style('assets/frontend/layout/css/style.css') }}
 	{{ HTML::style('assets/frontend/pages/css/style-revolution-slider.css') }}
 	{{ HTML::style('assets/global/css/components.css') }}

 	<!-- metronic revo slider styles	-->
 	{{ HTML::style('assets/frontend/layout/css/style-responsive.css') }}
 	{{ HTML::style('assets/frontend/layout/css/themes/red.css') }}
 	{{ HTML::style('assets/frontend/layout/css/custom.css') }}
  	<!-- Theme styles END -->
@stop

@section('content')

<div class="main">
	<div class="container">
		<!-- BEGIN Login and Registration -->
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-2 front-carousel">
					</div>
	
					<div class="col-md-7">
						<!-- BEGIN REGISTRATION FORM -->
						<form class="register-form" action="index.html" method="post">
							<h1>Search for the nearest Clinic and Doctors</h1>
	
							<div class="form-group">
								<div class="input-icon">
									<i class="fa fa-font"></i>
									<input class="form-control placeholder-no-fix" type="text" placeholder="Specialization" name="fullname"/>
								</div>
							</div>
	
							<div class="form-group">
								<div class="input-icon">
									<i class="fa fa-map-marker"></i>
									<input class="form-control placeholder-no-fix" type="text" placeholder="City" name="city"/>
								</div>
							</div>
	
							<div class="form-group">
								<div class="input-icon">
									<i class="fa fa-map-marker"></i>
									<input class="form-control placeholder-no-fix" type="text" placeholder="Province" name="province"/>
								</div>
							</div>
	
							<div class="form-actions">
								<button type="submit" id="register-submit-btn" class="btn red pull-right">
									Find Them! <i class="fa fa-search"></i>
								</button>
							</div>
	
						</form>
						<!-- END REGISTRATION FORM -->
					</div>
	
					<div class="col-md-2 front-carousel">
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="row">
				<!-- BEGIN REGISTRATION FORM -->
				<form class="register-form" action="index.html" method="post">
					<h3>I need a Private Nurse in</h3>
					<div class="form-group">
						<div class="input-icon">
							<i class="fa fa-map-marker"></i>
							<input class="form-control placeholder-no-fix" type="text" placeholder="City" name="city"/>
						</div>
					</div>

					<div class="form-group">
						<div class="input-icon">
							<i class="fa fa-map-marker"></i>
							<input class="form-control placeholder-no-fix" type="text" placeholder="Province" name="province"/>
						</div>
					</div>

					<div class="form-actions">
						<button type="submit" id="register-submit-btn" class="btn white pull-left">
							Find me one! <i class="fa fa-search"></i>
						</button>
					</div>

				</form>
				<!-- END REGISTRATION FORM -->
				</div>

				<div class="row">
				<!-- BEGIN REGISTRATION FORM -->
				<h3>Sign me up</h3>
				<form class="register-form" action="{{ URL::to('createuser/start') }}" method="get">
					<div class="form-group">
						<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
						<label class="control-label visible-ie8 visible-ie9">Email</label>
						<div class="input-icon">
							<i class="fa fa-user"></i>
							<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label visible-ie8 visible-ie9">Password</label>
						<div class="input-icon">
							<i class="fa fa-lock"></i>
							<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" id="register-submit-btn" class="btn green pull-left">
							Sign Up 
							<i class="m-icon-swapright m-icon-white"></i>
						</button>
					</div>
				</form>
				<!-- END REGISTRATION FORM -->
				</div>
			</div>
		</div>
		<!-- END OF LOGIN AND REGISTRATION -->

		<!-- BEGIN SERVICE BOX -->   
		<div class="row service-box margin-bottom-40">
			<div class="col-md-3 col-sm-3">
				<div class="service-box-heading">
					<em><i class="fa fa-users green"></i></em>
					<span>Register as a patient</span>
				</div>
				<p>Register to us to search and book an appointment to the nearest doctor to you. You search via location, specialization and via HMO / insurance. If you are in need a nurse to some medical help on your private home. You can also search for the most affordable or nearest private nurse. </p>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="service-box-heading">
					<em><i class="fa fa-user-md red"></i></em>
					<span>Register as a Doctor</span>
				</div>
				<p>Use our system to manage your patients. View their medical history and threatment from other doctors to help you give a better understanting to their current health issues. Manage their appointment schedule. Let them communicate with via {{$appTitle}} messaging service. Be recommended by your patient to increase your patients visits to your private clinic.</p>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="service-box-heading">
					<em><i class="fa fa-hospital-o blue"></i></em>
					<span>Register your clinic</span>
				</div>
				<p>To increase your montly patient register your clinic to us. You will be searchble and your clinic as well. Patient can locate your clinic asap if they are in need.</p>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="service-box-heading">
					<em><i class="fa fa-stethoscope green"></i></em>
					<span>Register as a Nurse</span>
				</div>
				<p>Nurse in need for extra income or is accepting private nurse job? Register to us to make you searchable for the patients who need private health service. Post your hourly rate prefered location for you to be lacated by patients in need. Boost your exp.</p>
			</div>
		</div>
		<!-- END SERVICE BOX -->

		<!-- BEGIN STEPS -->
		<div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
			<div class="col-md-4 col-sm-4 front-step-col">
				<div class="front-step front-step1" style="background:#2e933d;">
					<h2>Register</h2>
					<p>Easy registration for free via facebook, google+ or twitter</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 front-step-col">
				<div class="front-step front-step2" style="background:#d84a38;">
					<h2>Search</h2>
					<p>Search for the nearest clinic and doctors.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 front-step-col">
				<div class="front-step front-step3" style="background:#0da3e2;">
					<h2>Book</h2>
					<p>See doctors/nurse schedule and set an appointment.</p>
				</div>
			</div>
		</div>
		<!-- END STEPS -->

		<div class="row margin-bottom-30">
			<!-- BEGIN INFO BLOCK -->               
			<div class="col-md-4">
				<h2 class="no-top-space text-center">Also Available in iOS and Android</h2>
				<h4 class="text-center">Need to call the nearest hospital for an emergency and an ambulance service? Use our mobile app!</h4>
				<!-- BEGIN LISTS -->
				<div class="row front-lists-v1">
					<div class="col-md-6 text-right">
						<ul class="list-unstyled margin-bottom-20">
							<li>Free App <i class="fa fa-check"></i> </li>
							<li>Free Online Booking <i class="fa fa-check"></i> </li>
							<li>Free Sign up <i class="fa fa-check"></i> </li>
							<li>Free Searching <i class="fa fa-check"></i> </li>
							<li>Doctor Admin <i class="fa fa-check"></i> </li>
							<li>Patients Admin <i class="fa fa-check"></i> </li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="list-unstyled">
							<li><i class="fa fa-check"></i> Free App</li>
							<li><i class="fa fa-check"></i> Free Online Booking </li>
							<li><i class="fa fa-check"></i> Free Sign up</li>
							<li><i class="fa fa-check"></i> Free Searching </li>
							<li><i class="fa fa-check"></i> Doctor Admin</li>
							<li><i class="fa fa-check"></i> Patients Admin </li>
						</ul>
					</div>
				</div>
				<!-- END LISTS -->
				<div class="row front-lists-v1">
					<div class="col-md-6">
						<div class="form-actions">
							<button type="submit" id="register-submit-btn" class="btn green-meadow pull-right">
								Android
								<i class="fa fa-cloud-download"></i>
							</button>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-actions">
							<button type="submit" id="register-submit-btn" class="btn grey pull-left">
								iOS
								<i class="fa fa-cloud-download"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END INFO BLOCK -->   

			<!-- BEGIN PHONE IMAGE -->            
			<div class="col-md-3 ">
				<img src="{{ URL::to('assets/frontend/layout/img/phones.png') }}" height="300px;">     
			</div>
			<!-- END PHONE -->

			<div class="col-md-5 front-carousel">
					<!-- BEGIN CAROUSEL -->
					<div id="myCarousel" class="carousel slide radius">
						<!-- Carousel items -->
						<div class="carousel-inner radius">
							<div class="item active radius">
								{{ HTML::image('assets/frontend/pages/img/pics/img1-medium.jpg') }}
								<div class="carousel-caption radius-buttom">
									<p>Find the nearest doctor or hospital in the city</p>
								</div>
							</div>
							<div class="item radius">
								{{ HTML::image('assets/frontend/pages/img/pics/img2-medium.jpg') }}
								<div class="carousel-caption radius-buttom">
									<p>Get the directions. To the hospital / clinics</p>
								</div>
							</div>
							<div class="item radius">
								{{ HTML::image('assets/frontend/pages/img/pics/img3-medium.jpg') }}
								<div class="carousel-caption radius-buttom">
									<p>Call the nearest Clinic or Hospital in the city for emergency</p>
								</div>
							</div>
							<div class="item radius">
								{{ HTML::image('assets/frontend/pages/img/pics/img4-medium.jpg') }}
								<div class="carousel-caption radius-buttom">
									<p>See how good the doctor is.</p>
								</div>
							</div>
							<div class="item radius">
								{{ HTML::image('assets/frontend/pages/img/pics/img5-medium.jpg') }}
								<div class="carousel-caption radius-buttom">
									<p>Refer your doctor to your friends and family.</p>
								</div>
							</div>
						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left radius" href="#myCarousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a class="carousel-control right radius" href="#myCarousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					<!-- END CAROUSEL -->
				</div>
		</div>

		<div class="row">
			<!-- BEGIN CLIENTS -->
			<div class="row margin-bottom-40 our-clients">
				<div class="col-md-3">
					<h2><a href="#">Our Partners</a></h2>
					<p>The follow logos are our partners.</p>
				</div>
				<div class="col-md-9">
					<div class="owl-carousel owl-carousel6-brands">
						<div class="client-item">
							<a href="#">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_1_gray.png') }}" class="img-responsive" alt="">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_1.png') }}" class="color-img img-responsive" alt="">
							</a>
						</div>
						<div class="client-item">
							<a href="#">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_2_gray.png') }}" class="img-responsive" alt="">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_2.png') }}" class="color-img img-responsive" alt="">
							</a>
						</div>
						<div class="client-item">
							<a href="#">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_3_gray.png') }}" class="img-responsive" alt="">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_3.png') }}" class="color-img img-responsive" alt="">
							</a>
						</div>
						<div class="client-item">
							<a href="#">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_4_gray.png') }}" class="img-responsive" alt="">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_4.png') }}" class="color-img img-responsive" alt="">
							</a>
						</div>
						<div class="client-item">
							<a href="#">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_5_gray.png') }}" class="img-responsive" alt="">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_5.png') }}" class="color-img img-responsive" alt="">
							</a>
						</div>
						<div class="client-item">
							<a href="#">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_6_gray.png') }}" class="img-responsive" alt="">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_6.png') }}" class="color-img img-responsive" alt="">
							</a>
						</div>
						<div class="client-item">
							<a href="#">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_7_gray.png') }}" class="img-responsive" alt="">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_7.png') }}" class="color-img img-responsive" alt="">
							</a>
						</div>
						<div class="client-item">
							<a href="#">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_8_gray.png') }}" class="img-responsive" alt="">
								<img src="{{ URL::to('assets/frontend/pages/img/clients/client_8.png') }}" class="color-img img-responsive" alt="">
							</a>
						</div>                  
					</div>
				</div>          
			</div>
			<!-- END CLIENTS -->
		</div>

	</div>
</div>

@endsection

@section('buttom_scripts')
	
	<!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->  
    {{ HTML::script('assets/global/plugins/jquery-1.11.0.min.js') }}
    {{ HTML::script('assets/global/plugins/jquery-migrate-1.2.1.min.js') }}
    {{ HTML::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('assets/frontend/layout/scripts/back-to-top.js') }}
    {{ HTML::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}
    {{ HTML::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
    {{ HTML::script('assets/global/plugins/jquery.blockui.min.js') }}
    {{ HTML::script('assets/global/plugins/jquery.cokie.min.js') }}
    {{ HTML::script('assets/global/plugins/uniform/jquery.uniform.min.js') }}
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    {{ HTML::script('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}

    <!-- slider for products -->
    {{ HTML::script('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js') }}

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {{ HTML::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}
    {{ HTML::script('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}
    {{ HTML::script('assets/global/plugins/select2/select2.min.js') }}
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN RevolutionSlider -->
  	{{ HTML::script('assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.plugins.min.js') }}
    {{ HTML::script('assets/frontend/pages/scripts/revo-slider-init.js') }}
    {{ HTML::script('assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js') }}
    {{ HTML::script('assets/frontend/pages/scripts/revo-slider-init.js') }}
    <!-- END RevolutionSlider -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    {{ HTML::script('assets/global/scripts/metronic.js') }}
    {{ HTML::script('assets/admin/pages/scripts/login-soft.js') }}
    <!-- END PAGE LEVEL SCRIPTS -->

    {{ HTML::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}
    {{ HTML::script('assets/admin/pages/scripts/login.js') }}

    {{ HTML::script('assets/frontend/layout/scripts/layout.js') }}
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
        });
        
    </script>
	<!-- END JAVASCRIPTS -->
@stop
