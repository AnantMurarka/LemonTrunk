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
		<!-- BEGIN SIDEBAR & CONTENT -->
		<div class="row margin-bottom-40">
			<!-- BEGIN SIDEBAR -->
			<div class="sidebar col-md-3 col-sm-3">
			</div>
			<!-- END SIDEBAR -->

			<!-- BEGIN CONTENT -->
			<div class="col-md-9 col-sm-9">
				<h1>Create an account</h1>
				<div class="content-form-page radius">
					<div class="row">
						<div class="col-md-7 col-sm-7">
							{{ Form::open(array('action' => 'RegistrationController@doctorRegister','class'=>'form-horizontal', 'role'=>'form')) }}
								<fieldset>
									<legend>Your personal details</legend>
									<div class="form-group">
										<label for="firstname" class="col-lg-4 control-label">First Name <span class="require">*</span></label>
										<div class="col-lg-8">
											<input type="text" class="form-control" id="firstname" name="firstname">
										</div>
									</div>
									<div class="form-group">
										<label for="lastname" class="col-lg-4 control-label">Last Name <span class="require">*</span></label>
										<div class="col-lg-8">
											<input type="text" class="form-control" id="lastname" name="lastname">
										</div>
									</div>
									<div class="form-group">
										<label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
										<div class="col-lg-8">
											<input type="text" class="form-control" id="email" name="email">
										</div>
									</div>
								</fieldset>
								<fieldset>
									<legend>Your password</legend>
									<div class="form-group">
										<label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
										<div class="col-lg-8">
											<input type="password" class="form-control" id="password" name="password">
										</div>
									</div>
									<div class="form-group">
										<label for="confirm-password" class="col-lg-4 control-label">Confirm password <span class="require">*</span></label>
										<div class="col-lg-8">
											<input type="password" class="form-control" id="confirm-password">
										</div>
									</div>
								</fieldset>
								<div class="row">
									<div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
										<button type="submit" class="btn red btn-primary">Create an acoount</button>
									</div>
								</div>
							{{ Form::close()}}
						</div>
						<div class="col-md-4 col-sm-4 pull-right">
							<div class="form-info">
								<h2><em>Important</em> Information</h2>
								<p>All of your information will not be shared to the public and will be private to you and your accompanied doctor for medical porpuses.</p>

								<p>Your doctor may input your medical result and will only be shared to the accompanied doctor. All information will be private to you and the doctors you have interacted with.</p>

								<a href="{{ URL::to('createuser/patient')}}" class="btn btn-default">
									More details 
									<i class="fa fa-pencil-square-o m-icon-white"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END CONTENT -->
		</div>
		<!-- END SIDEBAR & CONTENT -->
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

