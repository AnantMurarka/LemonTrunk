@extends('layouts.doctorlayout')

@section('head')
	
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet') }}" type="text/css"/>
	<link href="{{ URL::to('assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet') }}" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="{{ URL::to('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/global/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet"/>
	<!-- BEGIN:File Upload Plugin CSS files-->
	<link href="{{ URL::to('assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css') }}" rel="stylesheet"/>
	<link href="{{ URL::to('assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css') }}" rel="stylesheet"/>
	<link href="{{ URL::to('assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css') }}" rel="stylesheet"/>
	<!-- END:File Upload Plugin CSS files-->
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="{{ URL::to('assets/admin/components/css/inbox.css') }}" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="{{ URL::to('assets/global/plugins/select2/select2.css') }}"/>
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="{{ URL::to('assets/global/css/components.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/admin/layout/css/layout.css') }}" rel="stylesheet" type="text/css"/>
	
	<link href="{{ URL::to('assets/admin/layout/css/custom.css') }}" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico"/>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB-QIfWKus_VYpQxRK2LI_8s6kRxlnMbM&libraries=drawing&sensor=false"></script>
@stop

@section('content')

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-11">
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h3 class="page-title">
				
				</h3>
				<ul class="page-breadcrumb breadcrumb radius">
					<li class="btn-group">
						<button type="button" class="btn red dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						<span>Actions</span><i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="{{ URL::to('doctor/hospital') }}">Back</a>
							</li>
						</ul>
					</li>
					<li>
						<i class="fa fa-home"></i>
						<a href="#">Register Hospital <small>Register missing hospital</small></a>
						<i class="fa fa-angle-right"></i>
					</li>
				</ul>
				<!-- END PAGE TITLE & BREADCRUMB-->
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						<div class="portlet box">
							<div class="portlet-title" style="color:#333 !important;">
								<div class="caption">
									<i class="fa fa-file-o"></i>Register Hospital
								</div>
							</div>
							<div class="portlet-body form radius">
								<!-- BEGIN FORM-->
								{{ Form::open(array('action' => 'RegistrationController@registerHospital','class'=>'horizontal-form')) }}
								<input type="hidden" id="posLat" name="pos_lat"/>
   								<input type="hidden" id="posLng" name="pos_lng"/>
									<div class="form-body">
										<h3 class="form-section">Hospital Info</h3>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Hospital Name</label>
													<input type="text" id="name" name='name' class="form-control" placeholder="Medical Center" onchange="call()">
													<span class="help-block">
													Kindly input full hospital name </span>
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Description</label>
													<input type="textarea" id="descriptions" name='description' class="form-control" placeholder="Short Description">
													
												</div>
											</div>
											<!--/span-->
										</div>
										<!--/row-->
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Type</label>
													<select class="form-control" name='type'>
														<option value="Clinic">Clinic</option>
														<option value="Hospital">Hospital</option>
													</select>
													<span class="help-block">
													Select Building Type </span>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Contact Number</label>
													<input type="textarea" id="contact" name='contact' class="form-control" placeholder="02 895 2435">
													
												</div>
											</div>
										</div>
										<!--/row-->
										<h3 class="form-section">Address</h3>
										<div class="row">
											<div class="col-md-12 ">
												<div class="form-group">
													<label>Street</label>
													<input type="text" name="address1" id='address1' class="form-control" onchange="call()">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label>Barangay</label>
													<input type="text" name="address2" id='address2' class="form-control" onchange="call()">
												</div>
											</div>
										</div>
										<div class="row">
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<div class="form-group">
														<label class="control-label">Country</label>
														<select name="country" id="country_list" class="select2_category form-control" onchange="loadProvince(this.value);call()">
															<?php
															foreach ($countries as $country) 
															{ 
																?>
																	<option value='{{ $country->id }}'>{{ $country->Country }}</option>
																<?php
															}
															?>
														</select>
													</div>
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Province</label>
														<select name="province" id="province" class="select2_category form-control" onchange="loadCity(this.value);call()">
															<option value=''></option>
														</select>
												</div>
											</div>
										</div>
										<!--/row-->
										<div class="row">
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">City</label>
														<select name="cities" id="cities" class="select2_category form-control" onchange="call()">
															<option value=''></option>
														</select>
												</div>
											</div>
											<!--/span-->
										</div>
										<div class="row">
											<!--/span-->
											<div class="col-md-12"  style="height:300px;">
												<div class="form-group">
													<label class="control-label">Maps</label>
														<div id="map2" class="gmaps">
														</div>
												</div>
											</div>
											<!--/span-->
										</div>
									</div>
									<div class="form-actions right">
										<button type="button" class="btn default">Cancel</button>
										<button type="submit" class="btn blue"><i class="fa fa-check"></i> Save</button>
									</div>
								{{ Form::close()}}
								<!-- END FORM-->
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('layouts.advertisement.rightsidebar')
		</div>
	</div>
</div>

@endsection

@section('buttom_scripts')
	
	<!-- BEGIN CORE PLUGINS -->
	<!--[if lt IE 9]>
	<script src="../assets/global/plugins/respond.min.js"></script>
	<script src="../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
	<script src="{{ URL::to('assets/global/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN: Page level plugins -->
	<script src="{{ URL::to('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}" type="text/javascript"></script>
	<!-- BEGIN:File Upload Plugin JS files-->
	<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
	<!-- The Templates plugin is included to render the upload/download listings -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js') }}"></script>
	<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js') }}"></script>
	<!-- The Canvas to Blob plugin is included for image resizing functionality -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js') }}"></script>
	<!-- blueimp Gallery script -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js') }}"></script>
	<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js') }}"></script>
	<!-- The basic File Upload plugin -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js') }}"></script>
	<!-- The File Upload processing plugin -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js') }}"></script>
	<!-- The File Upload image preview & resize plugin -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js') }}"></script>
	<!-- The File Upload audio preview plugin -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js') }}"></script>
	<!-- The File Upload video preview plugin -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js') }}"></script>
	<!-- The File Upload validation plugin -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js') }}"></script>
	<!-- The File Upload user interface plugin -->
	<script src="{{ URL::to('assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js') }}"></script>
	<!-- The main application script -->
	<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
	<!--[if (gte IE 8)&(lt IE 10)]>
	    <script src="../assets/global/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"></script>
	    <![endif]-->
	<!-- END:File Upload Plugin JS files-->
	<!-- END: Page level plugins -->
	<script src="{{ URL::to('assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/admin/components/scripts/inbox.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/select2/select2.min.js') }}"></script>
	<script src="{{ URL::to('assets/admin/components/scripts/form-samples.js') }}"></script>
	<script>
	jQuery(document).ready(function() {       
	   // initiate layout and plugins
	   	Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		FormSamples.init();
	});

	

	function loadProvince(value)
	{
		// alert('test')
		var url = "{{ URL::route('loadProvince') }}";

		$.ajax({
    		type: "POST",
    		url: url,
    		data: {
    			"countryCode": value
    		},
 			dataType: 'json',
 			success : function(data)
 			{
       	        // alert(data.length + ' province has been loaded');
       	        var sel = $("#province");
       	       	document.getElementById('province').options.length = 0;

       	        // alert(province);
       	        for (var i=0; i<data.length; i++) 
       	        {
       	        	// if (province == data[i].id )
       	        	// {
       	        	// 	sel.append('<option value="' + data[i].id + '" selected>' + data[i].province + '</option>');
       	        	// }
       	        	// else
       	        	// {
       	        		sel.append('<option value="' + data[i].id + '">' + data[i].province + '</option>');
       	        	// }
      				
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
		$.ajax({
    		type: "POST",
    		url: url,
    		data: {
    			"provinceCode": value
    		},
 			dataType: 'json',
 			success : function(data)
 			{
       	        // alert(data.length + ' cities has been loaded');
       	        var sel = $("#cities");
       	        document.getElementById('cities').options.length = 0;
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

	<script type="text/javascript">
	// google map settings
	var geoCoder;
	var mapGeo;
	var marker;
	
	function initialize() {
	    geoCoder = new google.maps.Geocoder();
	    var mapOptions = { zoom: 15 }
	    mapGeo = new google.maps.Map(document.getElementById('map2'), mapOptions);
	    displayMap('Metro Manila, Philippines');
	}
	
	function setPosition(marker) {
	    $('#posLat').val(marker.position.lat());
	    $('#posLng').val(marker.position.lng());
	}
	
	function displayMap(address) 
	{
	   	geoCoder.geocode({ 'address': address }, function(results, status) 
	   	{
       		if (status == google.maps.GeocoderStatus.OK) 
       		{
       		    mapGeo.setCenter(results[0].geometry.location);
       		    if (!marker) marker = new google.maps.Marker({ map:mapGeo, draggable:true });
       		    marker.setPosition(results[0].geometry.location);
       		    setPosition(marker);
       		    google.maps.event.addListener(marker, 'dragend', function() {
       		        setPosition(marker);
       		    });
       		} else {
       		    alert('Geocode was not successful for the following reason: ' + status);
       		}
	   	});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>

	<script type="text/javascript">
	function call()
	{
		var name 		=	document.getElementById("name").value;
        var province 	=	document.getElementById("province").options[document.getElementById('province').selectedIndex].text;
        var city 		=	document.getElementById("cities").options[document.getElementById('cities').selectedIndex].text;
        
        if ( province == "Select Province" )
        {
        	province = "";
        }
        if (city == "Select a City")
        {
        	city = "";
        }

        var barangay 	=	document.getElementById("address2").value;
        var street 		=	document.getElementById("address1").value;
        var address 	=	"";
        address = name + " " + street + barangay + " " + city + " " + province + ", Philippines";

        window.alert(address);
        // $('#fsCompleteAdd').html(address);
        displayMap(address);
        
    }
	</script>
@stop

