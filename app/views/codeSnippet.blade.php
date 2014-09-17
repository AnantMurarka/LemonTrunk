@extends('layouts.frontend')

@section('head')
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	{{ HTML::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}
	{{ HTML::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}
	{{ HTML::style('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('assets/global/plugins/uniform/css/uniform.default.css') }}
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES -->
	{{ HTML::style('assets/global/css/plugins.css') }}
	{{ HTML::style('assets/admin/layout/css/layout.css') }}
	<link id="style_color" href="{{ URL::to('assets/admin/layout/css/themes/default.css') }}" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
 	<!-- Global styles START -->   
 	{{ HTML::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}
 	{{ HTML::style('assets/global/plugins/bootstrap/css/bootstrap.css') }}
  	{{ HTML::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}
  	{{ HTML::style('assets/global/plugins/uniform/css/uniform.default.css') }}
  	{{ HTML::style('assets/global/plugins/select2/select2.css') }}
  	<!-- {{ HTML::style('assets/global/plugins/multiselect/multi-select.css') }} -->
 	<!-- Global styles END --> 
 	 
 	<!-- Page level plugin styles START -->
 	{{ HTML::style('assets/global/plugins/fancybox/source/jquery.fancybox.css')}}
 	{{ HTML::style('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css')}}
 	{{ HTML::style('assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css')}}
 	<!-- Page level plugin styles END -->	
	
  	<!-- BEGIN PAGE LEVEL STYLES -->
  	{{ HTML::style('assets/global/plugins/select2/select2.css') }}
  	{{ HTML::style('assets/admin/components/css/login-soft.css')}}
  	<!-- END PAGE LEVEL SCRIPTS -->
	
 	<!-- Theme styles START -->
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
		
		<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-8">
						<div class="portlet" id="form_wizard_1">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i> Doctor's Registration Form - <span class="step-title">
								Step 1 of 4 </span>
							</div>
						</div>
						<div class="portlet-body form">
							
							
								<div class="form-wizard">
									{{ Form::open(array('action' => 'RegistrationController@doctorRegister','class'=>'form-horizontal','id'=>'submit_form', 'method'=>'post')) }}
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps radius">
											<li>
												<a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Account Setup </span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Profile Setup </span>
												</a>
											</li>
											<li>
												<a href="#tab4" data-toggle="tab" class="step">
												<span class="number">
												4 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Confirm </span>
												</a>
											</li>
										</ul>
										<div id="bar" class="progress progress-striped radius" role="progressbar">
											<div class="progress-bar progress-bar-success radius">
											</div>
										</div>
										<div class="tab-content radius">
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												You have some form errors. Please check below.
											</div>
											<div class="alert alert-success display-none">
												<button class="close" data-dismiss="alert"></button>
												Your form validation is successful!
											</div>
											<div class="tab-pane active" id="tab1">
												<h3 class="block">Provide your account details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Email <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="email"/>
														<span class="help-block">
														Provide your email address </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Password <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="password" class="form-control" name="password" id="submit_form_password"/>
														<span class="help-block">
														Provide your password. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Confirm Password <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="password" class="form-control" name="rpassword"/>
														<span class="help-block">
														Confirm your password </span>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab2">
												<h3 class="block">Provide your profile details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Given name <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="firstname"/>
														<span class="help-block">
														Provide your given name </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Middle name <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="middlename"/>
														<span class="help-block">
														Provide your Middle name </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Family Name <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="lastname"/>
														<span class="help-block">
														Provide your Family Name </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="radio-list">
															<label>
															<input type="radio" name="gender" value="M" data-title="Male"/>
															Male </label>
															<label>
															<input type="radio" name="gender" value="F" data-title="Female"/>
															Female </label>
														</div>
														<div id="form_gender_error">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Country</label>
													<div class="col-md-4">
														<select name="country" id="country_list" class="select2_category form-control" onchange="loadProvince(this.value)">
															<?php
															foreach ($countries as $country) 
															{ ?>
																<option value='{{ $country->id }}'>{{ $country->Country }}</option>
															<?php	
															}
															?>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Province</label>
													<div class="col-md-4">
														<select class="select2_category form-control" data-placeholder="Choose a Province" name=" province" id="province_list" onchange="loadCity(this.value)">
															
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City</label>
													<div class="col-md-4">
														<select name="city" id="city_list" class="select2_category form-control" data-placeholder="Choose a City">
															
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Village / Subdivision / Barangay 
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="address2"/>
														<span class="help-block">
														Provide your Village / Subdivision / Barangay </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Unit/House Number, Street Name 
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="address1"/>
														<span class="help-block">
														Provide your Unit/House Number, Street Name </span>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab4">
												<h3 class="block">Confirm your account</h3>
												<h4 class="form-section">Account</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Email:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="email">
														</p>
													</div>
												</div>
												<h4 class="form-section">Profile</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Given Name:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="firstname"> </p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Middle Name:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="middlename"> </p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Last Name:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="lastname"> </p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="gender">
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-actions fluid radius">
										<div class="row">
											<div class="col-md-12">
												<div class="col-md-offset-3 col-md-9">
													<a href="javascript:;" class="btn default button-previous">
													<i class="m-icon-swapleft"></i> Back </a>
													<a href="javascript:;" class="btn red button-next">
													Continue <i class="m-icon-swapright m-icon-white"></i>
													</a>
													<button type="submit" class="btn red btn-primary">Create an acoount <i class="m-icon-swapright m-icon-white"></i></button>

												</div>
											</div>
										</div>
									</div>
									{{ Form::close() }}
								</div>
							
						</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->

	</div>
</div>

@endsection

@section('buttom_scripts')
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<!--[if lt IE 9]>
	<script src="../../assets/global/plugins/respond.min.js"></script>
	<script src="../../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
	<script src="{{ URL::to('assets/global/plugins/select2/select2.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}"></script>
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/select2/select2.min.js') }}"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{ URL::to ('assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to ('assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to ('assets/admin/components/scripts/form-wizard.js') }}"></script>
	<script src="{{ URL::to ('assets/admin/components/scripts/form-samples.js') }}"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
	// jQuery(document).ready(function() {       
	//    // initiate layout and plugins
	//    Metronic.init(); // init metronic core components
	// Layout.init(); // init current layout
	//    FormWizard.init();
	// });

	jQuery(document).ready(function() {    
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
   	FormSamples.init();
	});
	</script>

	<script type="text/javascript">
	function loadProvince(value)
	{
		var url = "{{ URL::route('loadProvince') }}";
		alert(value);
		alert(url);
		$.ajax({
    		type: "POST",
    		url: url,
    		data: {
    			"countryCode": value
    		},
 			dataType: 'json',
 			success : function(data)
 			{
       	        alert(data.length);
       	        var sel = $("#province_list");
       	        for (var i=0; i<data.length; i++) 
       	        {
      				sel.append('<option value="' + data[i].id + '">' + data[i].province + '</option>');
    			}
       	    },
       	    error: function (xhr, ajaxOptions, thrownError) 
       	    {
       			window.alert(xhr.status);
       			window.alert(thrownError);
       			console.log(thrownError);
      		}
			
    	});
	}

	function loadCity(value)
	{
		var url = "{{ URL::route('loadCity') }}";
		alert(value);
		$.ajax({
    		type: "POST",
    		url: url,
    		data: {
    			"provinceCode": value
    		},
 			dataType: 'json',
 			success : function(data)
 			{
       	        alert(data.length);
       	        var sel = $("#city_list");
       	        for (var i=0; i<data.length; i++) 
       	        {
      				sel.append('<option value="' + data[i].id + '">' + data[i].City + '</option>');
    			}
       	    },
       	    error: function (xhr, ajaxOptions, thrownError) 
       	    {
       			window.alert(xhr.status);
       			window.alert(thrownError);
       			console.log(thrownError);
      		}
			
    	});
	}

	</script>

	<!-- END JAVASCRIPTS -->
	
@stop

