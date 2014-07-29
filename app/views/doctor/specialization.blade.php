@extends('layouts.doctorlayout')

@section('head')
	
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ URL::to('assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
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
	<link href="{{ URL::to('assets/admin/pages/css/inbox.css') }}" rel="stylesheet" type="text/css"/>
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
								<a href="#">Add Missing Specialization</a>
							</li>
							<li>
								<a href="{{ URL::to('doctor/dashboard')}}">Back to Dashboard</a>
							</li>
						</ul>
					</li>
					<li>
						<i class="fa fa-home"></i>
						<a href="#">Specialization <small>This is where you add specialization on your profile.</small></a>
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
						
						<div class="col-md-12">
							<!-- BEGIN HOSPITALS PORTLET-->
							<div class="portlet box radius">
							<div class="portlet-title radius">
								<div class="caption" style="color:#333 !important;">
									<i class="fa fa-h-square"></i>Medical Specializations<small> add and remove specialization here</small>
								</div>
							</div>
							<div class="portlet-body radius">

							<table class="table table-striped table-hover radius" id="sample_editable_1">
								<thead>
										<tr>
											<th>Status</th>
											<th>Specialization</th>
											<th>Description</th>
											<th>Actions</th>
										</tr>
								</thead>
								<tbody>
									<?php
										foreach ($specialisms as $specialism) 
										{?>
											<tr>
												<td>
													<!-- <span class="row-details row-details-close"></span> -->
													<?php
														if ($specialism->doctor != '')
														{ ?>
															<!-- <p><i class="fa green fa-dot-circle-o"></i>
															</p> -->
															<span class="item">
																<span aria-hidden="true" class="icon-check" style="color:green !important;"></span>
															</span>
														<?php
														}
														else
														{ ?>
															<span class="item green">
																<span aria-hidden="true" class="icon-close" style="color:red !important;"></span>
															</span>
														<?php
														}
													?>
													
												</td>
												<td>
													 {{ $specialism->name }}
												</td>
												<td>
													{{ $specialism->description }}
												</td>
												<td>
													 
													 <?php
														if ($specialism->doctor != '')
														{ ?>
															<a href="#" class="btn btn-sm red">
																Remove <i class="fa fa-plus"></i>
															</a>
														<?php
														}
														else
														{ ?>
															<a href="#" class="btn btn-sm green">
																Add <i class="fa fa-plus"></i>
															</a>
														<?php
														}
													?>
												</td>
											</tr>
										<?php
										}
										?>
								</tbody>
							</table>
							<!-- <div class="row"> -->
							<!-- </div> -->
								
							</div>
							</div>
							<!-- END HOSPITALS PORTLET-->
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
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/select2/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/data-tables/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/data-tables/DT_bootstrap.js') }}"></script>

	<!-- The main application script -->
	<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
	<!--[if (gte IE 8)&(lt IE 10)]>
	    <script src="../assets/global/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"></script>
	    <![endif]-->
	<!-- END:File Upload Plugin JS files-->
	<!-- END: Page level plugins -->
	<script src="{{ URL::to('assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/admin/pages/scripts/inbox.js') }}" type="text/javascript"></script>
	<script src="{{ URL::to('assets/admin/pages/scripts/table-editable.js') }}"></script>
	<script>
	jQuery(document).ready(function() {       
	   // initiate layout and plugins
	   	Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
	   	Inbox.init();
	   	TableEditable.init();
	});
	</script>
@stop

