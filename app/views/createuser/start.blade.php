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

		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-10">
				<h2>Join Us Now</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5">
				
				<div class="col-md-6">
					<div class="portlet-body text-right">
						{{ HTML::image('assets/frontend/layout/img/default/patient-200px.png')}}
					</div>
				</div>

				<div class="row col-md-6">
					<div class="portlet-body text-left">
					</br>
					</br>
                		<h3>I'm a new patient</h3>
                		<p>Help me find a doctor and book an appointment for free!</p>
                		<div class="form-actions">
							<a href="{{ URL::to('createuser/patient')}}" class="btn green pull-right">
								Sign up 
								<i class="fa fa-pencil-square-o m-icon-white"></i>
							</a>
						</div>
              		</div>
              	</br>
              		<div class="row login-options">
						<h4>Or login with</h4>
						<ul class="social-icons">
							<li>
								<a class="facebook" data-original-title="facebook" href="{{ URL::to('login/facebook') }}">
								</a>
							</li>
							<!-- <li>
								<a class="twitter" data-original-title="Twitter" href="{{ URL::to('login/twitter') }}">
								</a>
							</li> -->
							<li>
								<a class="googleplus" data-original-title="Goole Plus" href="{{ URL::to('login/google') }}">
								</a>
							</li>
						</ul>
					</div>
              	</div>

			</div>
			<div class="col-md-2">
				<div class="portlet-body text-center">
					{{ HTML::image('assets/frontend/layout/img/arrow.png')}}
				</div>
			</div>
			<div class="col-md-5">
				<div class="col-md-6">
					<div class="portlet-body text-right">
						{{ HTML::image('assets/frontend/layout/img/default/Doctor-200px.png')}}
					</div>
				</div>
				<div class="col-md-6">
					<div class="portlet-body text-left">
					</br>
					</br>
                		<h3>I'm a Doctor</h3>
                		<p>Help me connect to my patients for free!</p>
                		<div class="form-actions">
							<a href="{{ URL::to('createuser/whyjoin') }}" class="btn red pull-right">
								Learn More
								<i class="fa fa-chevron-circle-right m-icon-white"></i>
							</a>
						</div>
              		</div>
              	</div>
			</div>
		</div>

		<!-- BEGIN SERVICE BOX -->   
		<div class="row service-box margin-bottom-40">
			<div class="col-md-4 col-sm-4">
				<div class="service-box-heading">
					<em><i class="fa fa-location-arrow red"></i></em>
					<span>Search a doctor</span>
				</div>
				<h4>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</h4>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="service-box-heading">
					<em><i class="fa fa-check blue"></i></em>
					<span>Locate the nearest Clinic</span>
				</div>
				<h4>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</h4>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="service-box-heading">
					<em><i class="fa fa-compress green"></i></em>
					<span>Book an appointment</span>
				</div>
				<h4>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</h4>
			</div>
		</div>
		<!-- END SERVICE BOX -->

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

    <!-- pop up -->
    {{ HTML::script('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.js') }}

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

    {{ HTML::script('assets/admin/layout/scripts/layout.js') }}
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
        
    </script>

    <script>
        jQuery(document).ready(function() {     
          Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
          Login.init();
        });
    </script>
	<!-- END JAVASCRIPTS -->
@stop
