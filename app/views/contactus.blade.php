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
  <link href="{{ URL::to('assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css">
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
    <div class="row margin-bottom-40">
        <!-- BEGIN CONTENT -->
        <div class="col-md-12">
            <h1>Contacts</h1>
            <div class="content-page">
                <div class="row padding10">
                    <div class="col-md-12">
                        <div id="map" class="gmaps margin-bottom-40" style="height:400px;"></div>
                    </div>
                    <div class="col-md-9 col-sm-9 ">
                        <h2>Contact Form</h2>
                        <p>Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer adipiscing elit, sed diam nonummy nibh euismod tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        <!-- BEGIN FORM-->
                        <form action="#" role="form">
                            <div class="form-group">
                                <label for="contacts-name">Name</label>
                                <input type="text" class="form-control" id="contacts-name">
                            </div>
                            <div class="form-group">
                                <label for="contacts-email">Email</label>
                                <input type="email" class="form-control" id="contacts-email">
                            </div>
                            <div class="form-group">
                                <label for="contacts-message">Message</label>
                                <textarea class="form-control" rows="5" id="contacts-message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Send</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </form>
                        <!-- END FORM-->
                    </div>
                    <div class="col-md-3 col-sm-3 sidebar2">
                        <h2>Our Contacts</h2>
                        <address>
                            <strong>Teknolohiya Philippines</strong><br>
                            2399 Belarmino St. Bangkal<br>
                            1233 Makati City, Metro Manila, RP<br>
                            <abbr title="Mobile">P:</abbr> +63 917 862 5511
                        </address>
                        <address>
                            <strong>Email</strong><br>
                            <a href="mailto:info@email.com">info@teknolohiya.com</a><br>
                            <a href="mailto:support@example.com">hello@teknolohiya.ph</a>
                        </address>
                        <ul class="social-icons margin-bottom-40">
                            <li><a href="#" data-original-title="facebook" class="facebook"></a></li>
                            <li><a href="#" data-original-title="github" class="github"></a></li>
                            <li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
                            <li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>
                            <li><a href="#" data-original-title="rss" class="rss"></a></li>
                        </ul>
                        <h2 class="padding-top-30">About Us</h2>
                        <p>Sediam nonummy nibh euismod tation ullamcorper suscipit</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check"></i> Officia deserunt molliti</li>
                            <li><i class="fa fa-check"></i> Consectetur adipiscing </li>
                            <li><i class="fa fa-check"></i> Deserunt fpicia</li>
                        </ul>        
                    </div>
                </div>
            </div>
        </div>
    <!-- END CONTENT -->
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
    <script src="{{ URL::to('assets/global/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('assets/global/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>      
    <script src="{{ URL::to('assets/frontend/layout/scripts/back-to-top.js') }}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{ URL::to('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script><!-- pop up -->
    <script src="{{ URL::to('assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
    <script src="{{ URL::to('assets/global/plugins/gmaps/gmaps.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('assets/frontend/pages/scripts/contact-us.js') }}" type="text/javascript"></script>

    <script src="{{ URL::to('assets/frontend/layout/scripts/layout.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initUniform();
            ContactUs.init();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
@stop