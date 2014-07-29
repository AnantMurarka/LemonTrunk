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
	<link rel="stylesheet" type="text/css" href="{{ URL::to('assets/global/plugins/select2/select2.css') }}"/>
	<link rel="stylesheet" href="{{ URL::to('assets/global/plugins/data-tables/DT_bootstrap.css') }}"/>
	<!-- END PAGE LEVEL STYLES -->

	<!-- BEGIN THEME STYLES -->
	<link href="{{ URL::to('assets/global/css/components.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/admin/layout/css/layout.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/admin/layout/css/custom.css') }}" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico"/>

	<script src="{{ URL::to('assets/global/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/data-tables/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/data-tables/tabletools/js/dataTables.tableTools.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/data-tables/DT_bootstrap.js') }}"></script>

	<script type="text/javascript" charset='utf-8'>
		// var url = "{{ URL::route('dt_hospital_all') }}";
		// $(document).ready(function() {
		//     $('#hospitallist').dataTable( {
		//     	"bProcessing": true,
		//         "bServerSide": true,
		//         "bFilter": true,
  //   			"bSort": true,
  //   			"sAjaxSource": url,
  //   			"sServerMethod": "GET"
		//     }
		//     	);
		// } );
	</script>
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
									<a href="{{ URL::to('doctor/register/hospital') }}">Register a hospital</a>
								</li>
								<li>
									<a href="#">Edit/Add Guest</a>
								</li>
							</ul>
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="#">My Hospital <small>Register or add existing hospital to your profile</small></a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#" class="red">{{ Session::get('message') }}</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						<div class="portlet box radius">
							<div class="portlet-title radius">
								<div class="caption" style="color:#333 !important;">
									<i class="fa fa-hospital-o"></i>My Hospitals
								</div>
							</div>
							<div class="portlet-body radius">
								<table class="table table-hover radius" >
									<thead>
											<tr>
												<th>
													 Name
												</th>
												<th>
													 Information
												</th>
											</tr>
									</thead>
									<tbody>
											<?php
											foreach ($myHospitals as $myHospital) 
											{?>
												<tr>
													<td>
														 <a href="">{{ $myHospital->name }}</a>
													</td>
													<td>
														<p>{{ $myHospital->type }}</p>
														<!-- <button type="button" class="btn red"><i class="fa fa-minus-circle"></i>
														</button> -->
													</td>
												</tr>
											<?php
											}
											?>
									</tbody>
								</table>
								<div id="hospital_marker" class="gmaps">
								</div>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN HOSPITALS PORTLET-->
						<div class="portlet box radius">
						<div class="portlet-title radius">
							<div class="caption" style="color:#333 !important;">
								<i class="fa fa-h-square"></i>Affiliated Hospitals
							</div>
						</div>
						<div class="portlet-body radius">
						 {{ Datatable::table()
    						->addColumn('Name','Type', 'Address')       // these are the column headings to be shown
    						->setUrl(route('dt_hospital_all'))   // this is the route where data will be retrieved
    						->render() }}
						</div>
						</div>
						<!-- END HOSPITALS PORTLET-->
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
	<script src="{{ URL::to('assets/global/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/select2/select2.min.js') }}"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="{{ URL::to('assets/global/plugins/gmaps/gmaps.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/admin/pages/scripts/maps-google.js') }}" type="text/javascript"></script>

	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{ URL::to('assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/admin/pages/scripts/table-advanced.js') }}"></script>
	<!-- <script src="{{ URL::to('assets/admin/pages/scripts/hospital-list.js') }}"></script> -->
	
	
	<script>
	
	function mapMarker()
	{
	    var map = new GMaps({
	        div: '#hospital_marker',
	        lat: 14.555084,
	        lng: 121.047669,
	        color: 'blue',
	        zoom: 12,
	    });
	    var maps = new Array();
		<?php foreach($myHospitals as $hospital){ ?>
		    maps.push('<?php echo $hospital; ?>');
		<?php } ?>
	    for (var i=0; i<maps.length; i++) 
	   	{
	   		var array = maps[i];
	   		array = JSON.parse(array);
	   		map.addMarker({
	        	lat: array.latitude,
	        	lng: array.longitude,
	        	color: 'blue',
	        	title: array.name,
	        	infoWindow: {
	        	    content: '<span style="color:#000">' + array.name + '</span>'
	        	}
	    	});
	   	}
	}
	
	jQuery(document).ready(function() 
	{       
	   	// initiate layout and plugins
	   	Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		TableAdvanced.init();
		// MapsGoogle.init();
		mapMarker();
	});

	</script>
@stop

