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
<link href="{{ URL::to('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::to('assets/admin/pages/css/profile.css') }}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{ URL::to('assets/global/plugins/data-tables/DT_bootstrap.css') }}"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
{{ HTML::style('assets/global/plugins/select2/select2.css') }}
{{ HTML::style('assets/global/css/plugins/multiselect/multi-select.css') }}
<link href="{{ URL::to('assets/global/css/components.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::to('assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::to('assets/admin/layout/css/layout.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ URL::to('assets/admin/layout/css/custom.css') }}" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
@stop

@section('content')

	<!-- BEGIN PAGE HEADER-->
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
			
			</h3>
			<ul class="page-breadcrumb breadcrumb radius">
				
				<li>
					<a href="#" class="red">My Profile</a>
				</li>
				<li>
					<a href="#" class="red">{{ Session::get('message') }}</a>
				</li>
				<li class="btn-group">
					<button type="button" class="btn red dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
					<span>Actions</span><i class="fa fa-angle-down"></i>
					</button>
				</li>
			</ul>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
	<!-- END PAGE HEADER-->

	<!-- BEGIN PAGE CONTENT-->
	<div class="row profile">
		<div class="col-md-9">
		<!--BEGIN TABS-->
		<div class="tabbable tabbable-custom tabbable-full-width ">
			<ul class="nav nav-tabs">
				<li class="active radius-top">
					<a href="#tab_1_1" data-toggle="tab">
					Overview </a>
				</li class="radius-top">
				<li class="radius-top">
					<a href="#tab_1_2" data-toggle="tab">
					Account </a>
				</li>
				<li class="radius-top">
					<a href="#tab_1_3" data-toggle="tab">
					Profession </a>
				</li>
				<li class="radius-top">
					<a href="#tab_1_4" data-toggle="tab">
					Help </a>
				</li>
			</ul>
			<div class="tab-content radius">
				<!--tab_1_1-->
				<div class="tab-pane active" id="tab_1_1">
					<div class="row">
						<div class="col-md-3">
							<ul class="list-unstyled profile-nav padding">
								<li>
									<img src="{{ URL::to('assets/admin/pages/media/profile/profile-img.png' ) }}" class="img-responsive" alt=""/>
									<a href="#" class="profile-edit">
									edit </a>
								</li>
								<li>
									<a href="#">
									Projects </a>
								</li>
								<li>
									<a href="#">
									Messages <span>
									3 </span>
									</a>
								</li>
								<li>
									<a href="#">
									Friends </a>
								</li>
							</ul>
							<div class="padding15">
								<h4>Education :</h4>
								<dl>
									<?php
									foreach ($doctor->educations as $education) 
									{?>
										<dt>{{ $education->school }} </br> 
											<small>Country: {{ $education->Country }} 
											</br>Year Graduated: {{ $education->year_graduated }}</small></dt>
										<dd>{{ $education->degree }}</dd>
										</br>
									<?php
									}
									?>
								</dl>
							</div>
						</div>
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-8 profile-info">
									<h1>Dr. {{ $doctor->firstname }} {{ $doctor->lastname }}</h1>
									<p>
										{{ $doctor->personal_statement }}
									</p>
									<h4><strong>Ratings</strong> <small>{{$doctor->ratings}} </small></h4>
									<?php

										$rates = explode(".", $doctor->ratings);
									?>
									<p>
										<ul class="stars list-inline">
											<?php
											for ($i = 0; $i < $rates[0]; $i++)
											{ ?>
												<li>
													<i class="fa fa-star" style="color:#d84a38"></i>
												</li>
												<?php
											}
											if(isset($rates[1]))
												{ ?>
													<li>
														<i class="fa fa-star-half-o" style="color:#d84a38"></i>
													</li>
												<?php
												}
											?>
										</ul>
									</p>
									<ul class="list-inline">
										<h4>Specialization:</h4>
										<?php
											foreach ($doctor->specializations as $specialization) 
											{?>
												<li><i class="fa fa-stethoscope"></i>{{ $specialization->specialization  }}</li>
											<?php
										}
										?>
									</ul>
									<!-- BEGIN EXAMPLE TABLE PORTLET-->
									<div class="portlet box radius">
										<div class="portlet-title ">
											<div class="caption" style="color:#333 !important;">
												<i class="fa fa-map-marker"></i>Map
											</div>
										</div>
										<div class="portlet-body radius">
											<div id="hospital_marker" class="gmaps" >
											</div>
										</div>
									</div>
									<!-- END EXAMPLE TABLE PORTLET-->
								</div>
								<!--end col-md-8-->
								<div class="col-md-4 padding15">
									<div class="portlet">
										<div class="portlet-body">
											<h4>Insurances</h4>
											<ul>
												<?php
												foreach ($doctor->insurances as $insurance) 
												{?>
													<li>{{ $insurance->insurance  }}</li>
												<?php
												}
												?>
											</ul>
										</div>
									</div>
								</div>
								<!--end col-md-4-->
							</div>
							<!--end row-->
							<div class="tabbable tabbable-custom tabbable-custom-profile">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#tab_1_11" data-toggle="tab">
										Comments </a>
									</li>
									<!-- <li>
										<a href="#tab_1_22" data-toggle="tab">
										Hospitals </a>
									</li> -->
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab_1_11">
										<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
											<ul class="feeds">
												<?php
													if (count($doctor->comments) > 0 )
													{
														foreach ($doctor->comments as $comment) 
														{ 

															?>
															<li>
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-default">
																				<i class="fa fa-bullhorn"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">
																				<strong>Patients Comment</strong><small> | {{ $comment->updated_at }}</small>
																				</br>
																				</br>
																				{{ $comment->comment }}
																			</div>
																		</div>
																	</div>
																</div>
																<!-- <div class="col2">
																	<div class="date">
																		 21 Hours
																	</div>
																</div> -->
															</li>
															<?php
														}
													}
												?>
											</ul>
										</div>
									</div>
									<!--tab-pane-->
									<!-- <div class="tab-pane" id="tab_1_22">
										<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
											<div class="col-md-8">
												
											</div>
										</div>
									</div> -->
									<!--tab-pane-->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end tab-pane-->
				<!--tab_1_2-->
				<div class="tab-pane" id="tab_1_2">
					<div class="row profile-account">
						<div class="col-md-3">
							<ul class="ver-inline-menu tabbable margin-bottom-10">
								<li class="active">
									<a data-toggle="tab" href="#tab_1-1">
									<i class="fa fa-cog"></i> Personal info </a>
									<span class="after">
									</span>
								</li>
								<li>
									<a data-toggle="tab" href="#tab_2-2">
									<i class="fa fa-picture-o"></i> Change Avatar </a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab_3-3">
									<i class="fa fa-lock"></i> Change Password </a>
								</li>
								<!-- <li>
									<a data-toggle="tab" href="#tab_4-4">
									<i class="fa fa-lock"></i> Professional info </a>
								</li> -->
								<li>
									<a data-toggle="tab" href="#tab_5-5">
									<i class="fa fa-eye"></i> Privacity Settings </a>
								</li>
							</ul>
						</div>
						<div class="col-md-9">
							<div class="tab-content col-md-9">
								<div id="tab_1-1" class="tab-pane active">
									{{ Form::open(array('action' => 'DoctorController@personalInfo','class'=>'form-validate')) }}
										{{ Form::hidden('id', Auth::doctor()->get()->id) }}
										<div class="form-group">
											<label class="control-label">First Name</label>
											<input type="text" name="firstname" value="{{ Auth::doctor()->get()->firstname }}" class="form-control"/>
										</div>
										<div class="form-group">
											<label class="control-label">Middle Name</label>
											<input type="text" name="middlename" value="{{ Auth::doctor()->get()->middlename }}" class="form-control"/>
										</div>
										<div class="form-group">
											<label class="control-label">Last Name</label>
											<input type="text" name="lastname" value="{{ Auth::doctor()->get()->lastname }}" class="form-control"/>
										</div>
										<div class="form-group">
											<label class="control-label">Personal Number</label>
											<input type="text" name="contact" value="{{ Auth::doctor()->get()->contact }}" class="form-control"/>
										</div>
										<div class="form-group">
											<label class="control-label">Building # | Street #</label>
											<input type="text" name="address1" value="{{ Auth::doctor()->get()->address1 }}" class="form-control"/>
										</div>
										<div class="form-group">
											<label class="control-label">Subdivission, Village or Barangay</label>
											<input type="text" name="address2" value="{{ Auth::doctor()->get()->address2 }}" class="form-control"/>
										</div>

										<div class="form-group">
											<label class="control-label">Country</label>
											<select name="country" id="country_list" class="select2_category form-control" onchange="loadProvince(this.value)">
												<?php
												foreach ($countries as $country) 
												{ 
													if ( $doctor->address5 != '' && $doctor->address5 == $country->id )
													{ 
														?>
														<option value='{{ $country->id }}' selected>{{ $country->Country }}</option>
													  <?php
													}else
													{ ?>
														<option value='{{ $country->id }}'>{{ $country->Country }}</option>
													  <?php
													}
												}
												?>
											</select>
										</div>
										<div class="form-group">
											<label class="control-label">Province</label>
											<select name="province" id="province_list" class="select2_category form-control" onchange="loadCity(this.value)">
												<?php
												if ( $doctor->address4 != '' )
												{
													foreach ($provinces as $province) 
													{ 
														if ( $doctor->address4 != '' && $doctor->address4 == $province->id )
														{ 
															?>
															<option value='{{ $province->id }}' selected>{{ $province->province }}</option>
														  <?php
														}else
														{ ?>
															<option value='{{ $province->id }}'>{{ $province->province }}</option>
														  <?php
														}
													}
												}
												?>
											</select>
										</div>
										<div class="form-group">
											<label class="control-label">City</label>
											<select name="city" id="city_list" class="select2_category form-control">
												<?php
												if ( $doctor->address3 != '' )
												{
													foreach ($cities as $city) 
													{ 
														if ( $doctor->address3 != '' && $doctor->address4 == $city->id )
														{ 
															?>
															<option value='{{ $city->id }}' selected>{{ $city->City }}</option>
														  <?php
														}else
														{ ?>
															<option value='{{ $city->id }}'>{{ $city->City }}</option>
														  <?php
														}
													}
												}
												?>
											</select>
										</div>
										<div class="form-group">
											<label class="control-label">Personal Statement</label>
											<textarea class="form-control" rows="5" placeholder="{{ Auth::doctor()->get()->personal_statement }}"></textarea>
										</div>
										<div class="margiv-top-10">
											<button type="submit" class="btn red">
											Save changes <i class="m-icon-swapright m-icon-white"></i>
											</button>
											<button type="submit" class="btn defualt">
											Cancel <i class="m-icon-swapright"></i>
											</button>
										</div>
									{{ Form::close() }}
								</div>
								<div id="tab_2-2" class="tab-pane">
									<p>
										 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									</p>
									{{ Form::open(array('action' => 'DoctorController@changeAvatar','class'=>'form-validate', 'files'=> 'true')) }}
										{{ Form::hidden('id', Auth::doctor()->get()->id) }}
										<div class="form-group">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
													<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
												</div>
												<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
												</div>
												<div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="file" name="image">
													</span>
													<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
													Remove </a>
												</div>
											</div>
											<div class="clearfix margin-top-10">
												<span class="label label-danger">
												NOTE! </span>
												<span>
												Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
											</div>
										</div>
										<div class="margin-top-10">
											<button type="submit" class="btn red" disabled>
												Change avatar <i class="m-icon-swapright m-icon-white"></i>
											</button>
											<button type="submit" class="btn defualt">
												Cancel <i class="m-icon-swapright"></i>
											</button>
										</div>
									{{ Form::close() }}
								</div>
								<div id="tab_3-3" class="tab-pane">
									{{ Form::open(array('action' => 'DoctorController@changePassword','class'=>'form-validate', 'name'=>'changepassword')) }}
										{{ Form::hidden('id', Auth::doctor()->get()->id) }}
										<div class="form-group">
											<label class="control-label">Current Password</label>
											<input type="password" name="current_password" class="form-control"/>
										</div>
										<div class="form-group">
											<label class="control-label">New Password</label>
											<input type="password" name="new_password" class="form-control"/>
										</div>
										<div class="form-group">
											<label class="control-label">Re-type New Password</label>
											<input type="password" name="confirm_password" class="form-control" onchange='validateForm()'/>
										</div>
										<div class="margin-top-10">
											<button type="submit" class="btn red" id='change_password_button' disabled>
												Change password <i class="m-icon-swapright m-icon-white"></i>
											</button>
											<button type="submit" class="btn defualt">
												Cancel <i class="m-icon-swapright"></i>
											</button>
										</div>
									{{ Form::close() }}
								</div>
								<div id="tab_5-5" class="tab-pane">
									<form action="#">
										<table class="table table-bordered table-striped">
										<tr>
											<td>
												 Allow patients to comment on my service:
											</td>
											<td>
												<label class="uniform-inline">
												<input type="radio" name="optionsRadios1" value="option1" checked/>
												Yes </label>
												<label class="uniform-inline">
												<input type="radio" name="optionsRadios1" value="option2" />
												No </label>
											</td>
										</tr>
										<tr>
											<td>
												 Allow patients to rate me:
											</td>
											<td>
												<label class="uniform-inline">
												<input type="checkbox" value="" checked/> Yes </label>
											</td>
										</tr>
										<tr>
											<td>
												 Disable my account: </br>[ you can still log but you will no longer be searchable and viewable to your patients ]
											</td>
											<td>
												<label class="uniform-inline">
												<input type="checkbox" value=""/> Yes </label>
											</td>
										</tr>
										</table>
										<!--end profile-settings-->
										<div class="margin-top-10">
											<button type="submit" class="btn red" id='change_password_button' disabled>
												Change Settings <i class="m-icon-swapright m-icon-white"></i>
											</button>
											<button type="submit" class="btn defualt">
												Cancel <i class="m-icon-swapright"></i>
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!--end col-md-9-->
					</div>
				</div>
				<!--end tab-pane-->
				<!--tab_1_3-->
				<div class="tab-pane" id="tab_1_3">
					<div class="row profile-account">
						<div class="col-md-3">
							<ul class="ver-inline-menu tabbable margin-bottom-10">
								<li class="active">
									<a data-toggle="tab" href="#profession_tab_1">
									<i class="fa fa-stethoscope"></i> Specialization </a>
									<span class="after">
									</span>
								</li>
								<li>
									<a data-toggle="tab" href="#profession_tab_2">
									<i class="fa fa-certificate"></i> Insurance </a>
								</li>
							</ul>
						</div>
						<div class="col-md-9">
							<div class="tab-content col-md-12">
								<div id="profession_tab_1" class="tab-pane active">
									<!-- BEGIN SPECIALIZATION PORTLET-->
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
											</div>
									</div>
									<!-- END SPECIALIZATION PORTLET-->
								</div>
								<div id="profession_tab_2" class="tab-pane">
									<!-- BEGIN INSURANCE FORM PORTLET-->
									<div class="portlet box">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i> Add Insurance
											</div>
											<div class="tools">
												<a href="" class="collapse">
												</a>
												<a href="#portlet-config" data-toggle="modal" class="config">
												</a>
												<a href="" class="reload">
												</a>
											</div>
										</div>
										<div class="portlet-body form radius">
											<form role="form">
												<div class="form-body">
													<div class="form-group">
														<label>Input Insurance Company</label>
														<input class="form-control spinner" type="text" placeholder="Insurance"/>
													</div>
												</div>
													
												<div class="form-actions">
													<button type="submit" class="btn red">Submit</button>
													<button type="button" class="btn default">Cancel</button>
												</div>
											</form>
										</div>
									</div>
									<!-- END INSURANCE FORM PORTLET-->
									<!-- BEGIN INSURANCE PORTLET-->
									<div class="portlet box radius">
										<div class="portlet-title radius">
											<div class="caption" style="color:#333 !important;">
												<i class="fa fa-h-square"></i>My current insurance <small> view and remove insurance here</small>
											</div>
										</div>
										<div class="portlet-body radius">
											<table class="table table-striped table-hover radius" id="sample_editable_1">
												<thead>
														<tr>
															<th>Insurance</th>
															<th>Actions</th>
														</tr>
												</thead>
												<tbody>
													<?php
														foreach ($insurances as $insurance) 
														{?>
															<tr>
																<td>
																	 {{ $insurance->insurance }}
																</td>
																<td>
																	<a href="#" class="btn btn-sm red">
																		Remove <i class="fa fa-plus"></i>
																	</a>
																</td>
															</tr>
														<?php
														}
														?>
												</tbody>
											</table>
										</div>
									</div>
									<!-- END HOSPITALS PORTLET-->
								</div>
							</div>
						</div>
						<!--end col-md-9-->
					</div>
				</div>
				<!--end tab-pane-->
				<!--tab_1_4-->
				<div class="tab-pane" id="tab_1_4">
					<div class="row">
						<div class="col-md-3">
							<ul class="ver-inline-menu tabbable margin-bottom-10">
								<li class="active">
									<a data-toggle="tab" href="#tab_1">
									<i class="fa fa-briefcase"></i> General Questions </a>
									<span class="after">
									</span>
								</li>
								<li>
									<a data-toggle="tab" href="#tab_2">
									<i class="fa fa-group"></i> Membership </a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab_3">
									<i class="fa fa-leaf"></i> Terms Of Service </a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab_1">
									<i class="fa fa-info-circle"></i> License Terms </a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab_2">
									<i class="fa fa-tint"></i> Payment Rules </a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab_3">
									<i class="fa fa-plus"></i> Other Questions </a>
								</li>
							</ul>
						</div>
						<div class="col-md-9">
							<div class="tab-content">
								<div id="tab_1" class="tab-pane active">
									<div id="accordion1" class="panel-group">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
												1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
												</h4>
											</div>
											<div id="accordion1_1" class="panel-collapse collapse in">
												<div class="panel-body">
													 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">
												2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
												</h4>
											</div>
											<div id="accordion1_2" class="panel-collapse collapse">
												<div class="panel-body">
													 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
										<div class="panel panel-success">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">
												3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
												</h4>
											</div>
											<div id="accordion1_3" class="panel-collapse collapse">
												<div class="panel-body">
													 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
										<div class="panel panel-warning">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">
												4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
												</h4>
											</div>
											<div id="accordion1_4" class="panel-collapse collapse">
												<div class="panel-body">
													 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
										<div class="panel panel-danger">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">
												5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
												</h4>
											</div>
											<div id="accordion1_5" class="panel-collapse collapse">
												<div class="panel-body">
													 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">
												6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
												</h4>
											</div>
											<div id="accordion1_6" class="panel-collapse collapse">
												<div class="panel-body">
													 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7">
												7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
												</h4>
											</div>
											<div id="accordion1_7" class="panel-collapse collapse">
												<div class="panel-body">
													 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="tab_2" class="tab-pane">
									<div id="accordion2" class="panel-group">
										<div class="panel panel-warning">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1">
												1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
												</h4>
											</div>
											<div id="accordion2_1" class="panel-collapse collapse in">
												<div class="panel-body">
													<p>
														 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</p>
													<p>
														 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</p>
												</div>
											</div>
										</div>
										<div class="panel panel-danger">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2">
												2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
												</h4>
											</div>
											<div id="accordion2_2" class="panel-collapse collapse">
												<div class="panel-body">
													 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
										<div class="panel panel-success">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3">
												3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
												</h4>
											</div>
											<div id="accordion2_3" class="panel-collapse collapse">
												<div class="panel-body">
													 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4">
												4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
												</h4>
											</div>
											<div id="accordion2_4" class="panel-collapse collapse">
												<div class="panel-body">
													 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5">
												5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
												</h4>
											</div>
											<div id="accordion2_5" class="panel-collapse collapse">
												<div class="panel-body">
													 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6">
												6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
												</h4>
											</div>
											<div id="accordion2_6" class="panel-collapse collapse">
												<div class="panel-body">
													 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7">
												7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
												</h4>
											</div>
											<div id="accordion2_7" class="panel-collapse collapse">
												<div class="panel-body">
													 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="tab_3" class="tab-pane">
									<div id="accordion3" class="panel-group">
										<div class="panel panel-danger">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1">
												1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
												</h4>
											</div>
											<div id="accordion3_1" class="panel-collapse collapse in">
												<div class="panel-body">
													<p>
														 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
													</p>
													<p>
														 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
													</p>
													<p>
														 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
													</p>
												</div>
											</div>
										</div>
										<div class="panel panel-success">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2">
												2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ? </a>
												</h4>
											</div>
											<div id="accordion3_2" class="panel-collapse collapse">
												<div class="panel-body">
													 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3">
												3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ? </a>
												</h4>
											</div>
											<div id="accordion3_3" class="panel-collapse collapse">
												<div class="panel-body">
													 Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4">
												4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ? </a>
												</h4>
											</div>
											<div id="accordion3_4" class="panel-collapse collapse">
												<div class="panel-body">
													 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5">
												5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ? </a>
												</h4>
											</div>
											<div id="accordion3_5" class="panel-collapse collapse">
												<div class="panel-body">
													 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6">
												6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ? </a>
												</h4>
											</div>
											<div id="accordion3_6" class="panel-collapse collapse">
												<div class="panel-body">
													 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7">
												7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ? </a>
												</h4>
											</div>
											<div id="accordion3_7" class="panel-collapse collapse">
												<div class="panel-body">
													 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end tab-pane-->
			</div>
		</div>
		<!--END TABS-->
		</div>
		@include('layouts.advertisement.rightsidebar')
	</div>
	<!-- END PAGE CONTENT-->

@endsection

@section('buttom_scripts')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
<script src="{{ URL::to('assets/global/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="{{ URL::to('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ URL::to('assets/global/plugins/select2/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('assets/global/plugins/multiselect/jquery.multi-select.js') }}" type="text/javascript"></script>

<script src="{{ URL::to('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ URL::to('assets/global/plugins/data-tables/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('assets/global/plugins/data-tables/DT_bootstrap.js') }}"></script>
<!-- Maps -->
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="{{ URL::to('assets/global/plugins/gmaps/gmaps.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('assets/admin/pages/scripts/maps-google.js') }}" type="text/javascript"></script>

<script src="{{ URL::to('assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('assets/admin/pages/scripts/form-samples.js') }}"></script>
<script src="{{ URL::to('assets/admin/pages/scripts/table-editable.js') }}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>

	function mapMarker()
	{
        var map = new GMaps({
            div: '#hospital_marker',
            lat: 14.555084,
            lng: 121.047669,
            color: 'blue',
            zoom: 11,
        });
    	<?php foreach($doctor->hospitals as $hospital){ ?>

    	    map.addMarker({
            	lat: '<?php echo $hospital->latitude; ?>',
            	lng: '<?php echo $hospital->longitude; ?>',
            	color: 'blue',
            	title: '<?php echo $hospital->hospital_name; ?>',
            	infoWindow: {
            	    content: '<span style="color:#000">' + '<?php echo $hospital->hospital_name; ?>' + '</span>'
            	}
        	});

    	<?php } ?>
    }

    function validateForm() {
	    var newPassword = document.forms["changepassword"]["new_password"].value;
	    var rePassword = document.forms["changepassword"]["confirm_password"].value;
	    if (newPassword == rePassword) {
	        document.getElementById("change_password_button").disabled=false;
	    }
	    else
	    {
	    	document.getElementById("change_password_button").disabled=true;
	    }
	}

	jQuery(document).ready(function() 
	{       
	   	// initiate layout and plugins
		Metronic.init();	// init metronic core components
		mapMarker();	// init for google map
		Layout.init();		// init current layout
		FormSamples.init(); // init forms
		TableEditable.init();
	});

	var country 	= '{{ $doctor->address5 }}';
	var province 	= '{{ $doctor->address4 }}';
	var city 		= '{{ $doctor->address3 }}';

	if(country != '')
	{
		loadProvince('{{$doctor->address5}}');
	}
	if(province != '')
	{
		loadCity('{{$doctor->address4}}');
	}
	

	$('#specializationList').multiSelect({ 
		keepOrder: true
	});

	$('#hospitalList').multiSelect({ 
		keepOrder: true
	});

	function loadProvince(value)
	{
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
       	        var sel = $("#province_list");
       	       	document.getElementById('province_list').options.length = 0;

       	        // alert(province);
       	        for (var i=0; i<data.length; i++) 
       	        {
       	        	if (province == data[i].id )
       	        	{
       	        		sel.append('<option value="' + data[i].id + '" selected>' + data[i].province + '</option>');
       	        	}
       	        	else
       	        	{
       	        		sel.append('<option value="' + data[i].id + '">' + data[i].province + '</option>');
       	        	}
      				
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
       	        var sel = $("#city_list");
       	        document.getElementById('city_list').options.length = 0;
       	        for (var i=0; i<data.length; i++) 
       	        {
       	        	if (city == data[i].id )
       	        	{
       	        		sel.append('<option value="' + data[i].id + '" selected>' + data[i].City + '</option>');
       	        	}
       	        	else
       	        	{
       	        		sel.append('<option value="' + data[i].id + '">' + data[i].City + '</option>');
       	        	}
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
	
@stop

