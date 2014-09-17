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
  	{{ HTML::style('assets/admin/components/css/login-soft.css')}}
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
			<div class="col-md-12">

				<div class="row">
					</br>
					<h1 class=" text-center">Let the patient see you and come to you!</h1>
					</br>
					<div class="row">
						<div class="col-md-6">
							<h3 class=" text-center">Weather you are a Doctor!</h3>
							<div class="col-md-6 text-right">
								<h4>
									And is having a hard time getting the patient come to you clinic.
									Patients keeps comming at the wrong time. And they have no idea
									where you clinics and schedule is?
								</h4>
								<div class="form-actions">
									<a href="{{ URL::to('createuser/doctor')}}" class="btn red pull-right">
										Sign up as a Doctor
										<i class="fa fa-pencil-square-o m-icon-white"></i>
									</a>
								</div>
							</div>

							<div class="col-md-6 text-left">
								{{ HTML::image('assets/frontend/layout/img/default/doctor-200px.png')}}
							</div>
						</div>
						<div class="col-md-6">
							<h3 class=" text-center">Or a nurse accepting private nursing!</h3>
							<div class="col-md-6 text-right">
							{{ HTML::image('assets/frontend/layout/img/default/doctor-200px.png')}}
							</div>
							<div class="col-md-6 text-left">
							<h4>
								But can't find client or the clients can't find you.
								Or looking for a specific job for a quick visit only your
								profession can do? Looking for the right client with the right
								schedule for you
							</h4>
							<div class="form-actions">
									<a href="{{ URL::to('createuser/patient')}}" class="btn default pull-right">
										Sign up as a nurse
										<i class="fa fa-pencil-square-o m-icon-black"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- BEGIN STEPS -->
				<div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
					<h3>Doctors</h3>
					<div class="col-md-4 col-sm-4 front-step-col">
						<div class="front-step front-step1" style="background:#2e933d;">
							<h2>Register</h2>
							<p>Easy registration for free.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 front-step-col">
						<div class="front-step front-step2" style="background:#d84a38;">
							<h2>Professional Information</h2>
							<p>Add your specialization and all of your clinics to be searchable</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 front-step-col">
						<div class="front-step front-step3" style="background:#0da3e2;">
							<h2>Confirm Appointments</h2>
							<p>Wait and receive booking request.</p>
						</div>
					</div>
				</div>
				<!-- END STEPS -->

				<!-- BEGIN STEPS -->
				<div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
					<h3>Nurse</h3>
					<div class="col-md-4 col-sm-4 front-step-col">
						<div class="front-step front-step1" style="background:#2e933d;">
							<h2>Register</h2>
							<p>Easy registration for free.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 front-step-col">
						<div class="front-step front-step2" style="background:#d84a38;">
							<h2>Professional Information</h2>
							<p>Add your professional exp. and rate per hour</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 front-step-col">
						<div class="front-step front-step3" style="background:#0da3e2;">
							<h2>Confirm Appointments</h2>
							<p>Wait and receive booking request.</p>
						</div>
					</div>
				</div>
				<!-- END STEPS -->
				<div class="row">
					<h1 class=" text-center">Here at DocSquare we let the patients come to you!</h1>
					<div class=" text-center">
						{{ HTML::image('assets/frontend/layout/img/laptop_ipad_iphone.png')}}
					</div>
				</div>
			</div>
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
    {{ HTML::script('assets/admin/components/scripts/login-soft.js') }}
    <!-- END PAGE LEVEL SCRIPTS -->

    {{ HTML::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}
    {{ HTML::script('assets/admin/components/scripts/login.js') }}

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
