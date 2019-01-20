<!DOCTYPE html>
<html>
<head>
<meta id="token" name="token" content="{{ csrf_token() }}">  
<meta charset="utf-8">
<title>Mentorgateway | Contact Us</title>
<!-- Stylesheets -->
<link href="{{ asset('') }}public/welcome/css/bootstrap.css" rel="stylesheet">
<link href="{{ asset('') }}public/welcome/css/style.css" rel="stylesheet">
<link href="{{ asset('') }}public/welcome/css/responsive.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="{{ asset('') }}public/welcome/images/favicon.png" type="image/x-icon">
<link rel="icon" href="{{ asset('') }}public/welcome/images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="../../https@cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="nav-outer clearfix">
                <div class="logo-outer pull-left">
                    <div class="logo"><a href="/"><img src="{{ asset('') }}public/welcome/images/cradle-logo.png" alt="" title=""></a></div>
                </div>

        		<!-- Main Menu -->
                <nav class="main-menu pull-right">
                    <div class="navbar-header">
                        <!-- Toggle Button -->    	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li><a href="/">Home</a>
                            </li>
                            <li class="dropdown"><a href="#">About Us</a>
                                <ul>
                                    <li><a href="https://mentorgateway.com/#vision">Vision | Mission | Outcome</a></li>
                                    <li><a href="https://mentorgateway.com/#gvfl">About GVFL</a></li>
                                    <li><a href="https://mentorgateway.com/#cradle">About CrAdLE</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="{{route('mentors.list')}}">Mentor</a>
                            </li>
                            <li class="dropdown"><a href="#">Login</a>
                                <ul>
                                    @if(Auth::user())
                                    <li>
                                    <a href="/home">Startup</a>
                                    </li>
                                    @else
                                    <li>
                                    <a id="startup-login" href="#">Startup</a>
                                    </li>
                                    @endif
                                    <li><a href="https://mentorgateway.com/mentor/login">Mentor</a></li>
                                </ul>
                            </li>
                            <!--<li>
                                <a href="{{route('admin.login')}}">Admin</a>
                            </li>-->

                            <li class="current"><a href="contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>
               
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="sticky-inner-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="/" class="img-responsive"><img src="{{ asset('') }}public/welcome/images/cradle-logo.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu pull-right">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                            <li><a href="/">Home</a>
                            </li>
                            <li class="dropdown"><a href="#">About Us</a>
                                <ul>
                                    <li><a href="https://mentorgateway.com/#vision">Vision | Mission | Outcome</a></li>
                                    <li><a href="https://mentorgateway.com/#gvfl">About GVFL</a></li>
                                    <li><a href="https://mentorgateway.com/#cradle">About CrAdLE</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('mentors.list')}}">Mentor</a>
                            </li>
                            <li class="dropdown"><a href="#">Login</a>
                                <ul>
                                    @if(Auth::user())
                                    <li>
                                    <a href="/home">Startup</a>
                                    </li>
                                    @else
                                    <li>
                                    <a id="startup-login" href="#">Startup</a>
                                    </li>
                                    @endif
                                    <li><a href="https://mentorgateway.com/mentor/login">Mentor</a></li>
                                </ul>
                            </li>
                            <!--<li>
                                <a href="{{route('admin.login')}}">Admin</a>
                            </li>-->
                            <li class="current"><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    
                    <!-- Main Menu End-->
                  
                </div>
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->
    
    <!--Form Back Drop-->
    <div class="form-back-drop"></div>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('') }}public/welcome/images/background/14.jpg)">
        <div class="auto-container">
            <span class="sub-title">@if($status) {{$msg}} @else Oops User Unidentified @endif</span>
          
        </div>
    </section>
    <!--End Page Title-->

    


    <!--Main Footer-->
    <footer class="main-footer">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    
                    <!--big column-->
                    <div class="big-column col-md-4 col-sm-5 col-xs-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="footer-column col-md-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="#"><img src="{{ asset('') }}public/welcome/images/logo.png" alt="" /></a>
                                        <span>&copy; Copyright 2018, All Right Reserved</span>
                                    </div>
                                    <ul class="social-icon-two">
                                        <li><a href="https://twitter.com/CrAdLE_EDII_TBI"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="https://www.facebook.com/cradle.edi/"><span class="fa fa-facebook"></span></a></li>
                                        <!--<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-vimeo"></span></a></li>-->
                                    </ul>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    
                    <!--big column-->
                    <div class="big-column pull-right col-md-8 col-sm-7 col-xs-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <div class="widget-content">
                                        <ul class="list clearfix">
                                            <li><a href="{{ asset('') }}">Home</a></li>
                                             <li><a href="https://cradle-edii.in/" target="_blank">CrAdLE</a></li>
                                            <li><a href="{{ asset('') }}contact" >Contact</a></li>
                                            <li><a href="http://gvfl.com/" target="_blank">GVFL</a></li>
                                            <li><a href="{{route('mentors.list')}}">Mentors</a></li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget contact-widget">
                                    <div class="widget-content">
                                        <ul class="contact-info-list">
                                         
                                            <li><span class="fa fa-location-arrow"></span>CrAdLE<br>
                 Entrepreneurship Development Institute of India (EDII)<br>
                 P.O. Bhat - 382 428, <br>
                 Gandhinagar, <br>
                 Gujarat, INDIA.</li>
                 <li><span class="fa fa-envelope-open"></span><a href="mailto:mentorgateway@cradle-edii.in">mentorgateway@cradle-edii.in</a></li>
                                        <li><span class="fa fa-headphones"></span>+91  98250 13774<br>+91 - 79 - 2396 9151 </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>
<script src="{{ asset('') }}public/welcome/js/jquery.js"></script> 
<script src="{{ asset('') }}public/welcome/js/bootstrap.min.js"></script>
<script src="{{ asset('') }}public/welcome/js/jquery.fancybox.js"></script>
<script src="{{ asset('') }}public/welcome/js/jquery-ui.js"></script>
<script src="{{ asset('') }}public/welcome/js/owl.js"></script>
<script src="{{ asset('') }}public/welcome/js/appear.js"></script>
<script src="{{ asset('') }}public/welcome/js/knob.js"></script>
<script src="{{ asset('') }}public/welcome/js/validate.js"></script>
<script src="{{ asset('') }}public/welcome/js/wow.js"></script>
<script src="{{ asset('') }}public/welcome/js/element-in-view.js"></script>
<script src="{{ asset('') }}public/welcome/js/script.js"></script>
<!--Google Map APi Key-->
<script src="../../maps.google.com/maps/api/js@key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="{{ asset('') }}public/welcome/js/map-script.js"></script>
<!--End Google Map APi-->

</body>
</html>