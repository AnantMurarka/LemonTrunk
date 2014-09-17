@extends('layouts.frontend')

@section('head')
	<!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="{{ URL::to('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::to('assets/global/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="{{ URL::to('assets/global/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="{{ URL::to('assets/global/css/components.css') }}" rel="stylesheet">
  <link href="{{ URL::to('assets/frontend/layout/css/style.css') }}" rel="stylesheet">
  <link href="{{ URL::to('assets/frontend/layout/css/style-responsive.css') }}" rel="stylesheet">
  <link href="{{ URL::to('assets/frontend/layout/css/themes/red.css') }}" rel="stylesheet" id="style-color">
  <link href="{{ URL::to('assets/frontend/layout/css/custom.css') }}" rel="stylesheet">
  <!-- Theme styles END -->
@stop

@section('content')

<div class="main">
	
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-11 col-sm-11 padding15">
            <h1>About Us</h1>
            <div class="content-page">
              <div class="row margin-bottom-30">
                <!-- BEGIN INFO BLOCK -->               
                <div class="col-md-7">
                  <h2 class="no-top-space">{{Config::get('app.Name')}}</h2>
                  <p>Is a project developed by Teknolohiya Philippines. It aims to provide doctors clinic gain more patient by making their clinic searchable. And for nurse gain more income by making them searchable and available for private nursing for patient in need for home service.</p> 
                  <p>Teknolohiya Philippines is tech business aiming to connect the world and make everything searchable and accesible online. To make daily living more easily using the power of technology.</p>
                  <!-- BEGIN LISTS -->
                  <div class="row front-lists-v1">
                    <div class="col-md-6">
                      <ul class="list-unstyled margin-bottom-20">
                        <li><i class="fa fa-check"></i> Officia deserunt molliti</li>
                        <li><i class="fa fa-check"></i> Consectetur adipiscing </li>
                        <li><i class="fa fa-check"></i> Deserunt fpicia</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="list-unstyled">
                        <li><i class="fa fa-check"></i> Officia deserunt molliti</li>
                        <li><i class="fa fa-check"></i> Consectetur adipiscing </li>
                        <li><i class="fa fa-check"></i> Deserunt fpicia</li>
                      </ul>
                    </div>
                  </div>
                  <!-- END LISTS -->
                </div>
                <!-- END INFO BLOCK -->   

                <!-- BEGIN CAROUSEL -->            
                <div class="col-md-5 front-carousel">
                  <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="{{ URL::to('assets/frontend/pages/img/pics/img2-medium.jpg') }}" alt="">
                        <div class="carousel-caption">
                          <p>Excepturi sint occaecati cupiditate non provident</p>
                        </div>
                      </div>
                      <div class="item">
                        <img src="{{ URL::to('assets/frontend/pages/img/pics/img1-medium.jpg') }}" alt="">
                        <div class="carousel-caption">
                          <p>Ducimus qui blanditiis praesentium voluptatum</p>
                        </div>
                      </div>
                      <div class="item">
                        <img src="{{ URL::to('assets/frontend/pages/img/pics/img2-medium.jpg') }}" alt="">
                        <div class="carousel-caption">
                          <p>Ut non libero consectetur adipiscing elit magna</p>
                        </div>
                      </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>                
                </div>
                <!-- END CAROUSEL -->
              </div>

              <div class="row margin-bottom-40">
                <!-- BEGIN TESTIMONIALS -->
                <div class="col-md-7 testimonials-v1">
                  <h2>Clients Testimonials</h2>                
                  <div id="myCarousel1" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                      <div class="active item">
                        <blockquote><p>Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met consectetur adipisicing sit amet do eiusmod dolore.</p></blockquote>
                        <div class="carousel-info">
                          <img class="pull-left" src="{{ URL::to('assets/frontend/pages/img/people/img1-small.jpg') }}" alt="">
                          <div class="pull-left">
                            <span class="testimonials-name">Lean Karlo Corpuz</span>
                            <span class="testimonials-post">Founder | CEO</span>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <blockquote><p>Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven't heard of them jean shorts austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p></blockquote>
                        <div class="carousel-info">
                          <img class="pull-left" src="{{ URL::to('assets/frontend/pages/img/people/img5-small.jpg') }}" alt="">
                          <div class="pull-left">
                            <span class="testimonials-name">Kate Ford</span>
                            <span class="testimonials-post">Commercial Director</span>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <blockquote><p>Reprehenderit butcher stache cliche tempor, williamsburg carles vegan helvetica.retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p></blockquote>
                        <div class="carousel-info">
                          <img class="pull-left" src="{{ URL::to('assets/frontend/pages/img/people/img2-small.jpg') }}" alt="">
                          <div class="pull-left">
                            <span class="testimonials-name">Jake Witson</span>
                            <span class="testimonials-post">Commercial Director</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="left-btn" href="#myCarousel1" data-slide="prev"></a>
                    <a class="right-btn" href="#myCarousel1" data-slide="next"></a>
                  </div>
                </div>
                <!-- END TESTIMONIALS --> 

                <!-- BEGIN PROGRESS BAR -->
                <div class="col-md-5 front-skills">
                  <h2 class="block">Performance</h2>
                  <span>Speed</span>
                  <div class="progress">
                    <div role="progressbar" class="progress-bar" style="width: 90%;"></div>
                  </div>
                  <span>Reliability</span>
                  <div class="progress">
                    <div role="progressbar" class="progress-bar" style="width: 80%;"></div>
                  </div>
                  <span>Accuracy of locations</span>
                  <div class="progress">
                    <div role="progressbar" class="progress-bar" style="width: 99%;"></div>
                  </div>
                </div>                       
                <!-- END PROGRESS BAR -->
              </div>

              <div class="row front-team">
                <ul class="list-unstyled">
                  <li class="col-md-3">
                    <div class="thumbnail">
                      <img alt="" src="{{ URL::to('assets/frontend/pages/img/people/img1-large.jpg') }}">
                      <h3>
                        <strong>Lean Karlo Corouz</strong> 
                        <small>Chief Executive Officer / Founder</small>
                      </h3>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                      <ul class="social-icons social-icons-color">
                        <li><a class="facebook" data-original-title="Facebook" href="#"></a></li>
                        <li><a class="twitter" data-original-title="Twitter" href="#"></a></li>
                        <li><a class="googleplus" data-original-title="Goole Plus" href="#"></a></li>
                        <li><a class="linkedin" data-original-title="Linkedin" href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                  <!-- <li class="col-md-3">
                    <div class="thumbnail">
                      <img alt="" src="{{ URL::to('assets/frontend/pages/img/people/img4-large.jpg') }}">
                      <h3>
                        <strong>Carles Puyol</strong> 
                        <small>Chief Executive Officer / CEO</small>
                      </h3>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                      <ul class="social-icons social-icons-color">
                        <li><a class="facebook" data-original-title="Facebook" href="#"></a></li>
                        <li><a class="twitter" data-original-title="Twitter" href="#"></a></li>
                        <li><a class="googleplus" data-original-title="Goole Plus" href="#"></a></li>
                        <li><a class="linkedin" data-original-title="Linkedin" href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="col-md-3">
                    <div class="thumbnail">
                      <img alt="" src="{{ URL::to('assets/frontend/pages/img/people/img2-large.jpg') }}">
                      <h3>
                        <strong>Andres Iniesta</strong> 
                        <small>Chief Executive Officer / CEO</small>
                      </h3>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                      <ul class="social-icons social-icons-color">
                        <li><a class="facebook" data-original-title="Facebook" href="#"></a></li>
                        <li><a class="twitter" data-original-title="Twitter" href="#"></a></li>
                        <li><a class="googleplus" data-original-title="Goole Plus" href="#"></a></li>
                        <li><a class="linkedin" data-original-title="Linkedin" href="#"></a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="col-md-3">
                    <div class="thumbnail">
                      <img alt="" src="{{ URL::to('assets/frontend/pages/img/people/img5-large.jpg') }}">
                      <h3>
                        <strong>Jessica Alba</strong> 
                        <small>Chief Executive Officer / CEO</small>
                      </h3>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
                      <ul class="social-icons social-icons-color">
                        <li><a class="facebook" data-original-title="Facebook" href="#"></a></li>
                        <li><a class="twitter" data-original-title="Twitter" href="#"></a></li>
                        <li><a class="googleplus" data-original-title="Goole Plus" href="#"></a></li>
                        <li><a class="linkedin" data-original-title="Linkedin" href="#"></a></li>
                      </ul>
                    </div>
                  </li> -->
                </ul>            
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
    <script src="{{ URL::to('assets/global/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('assets/global/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>      
    <script src="{{ URL::to('assets/frontend/layout/scripts/back-to-top.js') }}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{ URL::to('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script><!-- pop up -->

    <script src="{{ URL::to('assets/frontend/layout/scripts/layout.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->

@stop