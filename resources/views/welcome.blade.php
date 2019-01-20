<!doctype html>
<!DOCTYPE html>
<html>
<head>
<meta id="token" name="token" content="{{ csrf_token() }}">  
<meta charset="utf-8">
<title>Mentor Gateway</title>
<!-- Stylesheets -->
<link href="{{ asset('') }}public/welcome/css/bootstrap.css" rel="stylesheet">
<link href="{{ asset('') }}public/welcome/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('') }}public/welcome/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('') }}public/welcome/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ asset('') }}public/welcome/css/style.css" rel="stylesheet">
<link href="{{ asset('') }}public/welcome/css/responsive.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="{{ asset('') }}public/welcome/images/favicon.png" type="image/x-icon">
<link rel="icon" href="{{ asset('') }}public/welcome/images/title.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="../../https@cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
    .clients-section .image-box img {
        width: 220px !important;
    }
</style>
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
                            <li class="current dropdown"><a href="/">Home</a>
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
                                    <a class="startup-login" href="#">Startup</a>
                                    </li>
                                    @endif
                                    <li><a href="https://mentorgateway.com/mentor/login">Mentor</a></li>
                                </ul>
                            </li>
                            @if(Auth::user())
                            <!--<li>
                                <a href="/home">Startup</a>
                            </li>-->
							@else
                            <!--<li>
                                <a id="startup-login" href="#">Startup</a>
                            </li>-->
							@endif
							
                            
                            <!--<li>
                                <a href="{{route('admin.login')}}">Admin</a>
                            </li>-->

                            <li><a href="contact">Contact</a></li>
                            
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
                            <li class="current dropdown"><a href="/">Home</a>
                            </li>
                            <li class="dropdown"><a href="#">About Us</a>
                                <ul>
                                    <li><a href="https://mentorgateway.com/#vision">Vision | Mission | Outcome</a></li>
                                    <li><a href="https://mentorgateway.com/#gvfl">About GVFL</a></li>
                                    <li><a href="https://mentorgateway.com/#cradle">About CrAdLE</a></li>
                                </ul>
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
                                    <a class="startup-login" href="#">Startup</a>
                                    </li>
                                    @endif
                                    <li><a href="https://mentorgateway.com/mentor/login">Mentor</a></li>
                                </ul>
                            </li>
                            @if(Auth::user())
                            <!--<li>
                                <a href="/home">Startup</a>
                            </li>-->
							@else
                            <!--<li>
                                <a id="startup-login" href="#">Startup</a>
                            </li>-->
							@endif
                            <!--<li>
                                <a href="{{route('admin.login')}}">Admin</a>
                            </li>-->
                            <li><a href="/contact">Contact</a></li>
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
    
    <!--Appointment Box-->
    <section class="appointment-box">
    	<div class="inner-box">
            <div class="cross-icon"><span class="fa fa-close"></span></div>
            <div class="title">
                <h2>Get Appointment</h2>
            </div>
            
            <!--Appointment Form-->
            <div class="appointment-form">
                <form method="post" action="">
                    <div class="form-group">
                        <input type="text" name="text" value="" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" value="" placeholder="Phone no." required>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="theme-btn btn-style-one">Submit now</button>
                    </div>
                </form>
            </div>
            
            <!--Contact Info Box-->
            <div class="contact-info-box">
            	<ul class="info-list">
                	<li>contact@abcus.com</li>
                    <li>+(123) 456 7890</li>
                </ul>
                <ul class="social-list clearfix">
                	<li><a href="#">Facebook</a></li>
                    <li><a href="#">Linkedin</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Google +</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Consulting Form-->
    
    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('') }}public/welcome/images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('') }}public/welcome/images/slider1.jpg"> 

                        <div class="tp-caption gradient-layer" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="100%"
                        data-width="100%"
                        data-whitespace="normal"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['0','0','0','0']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":100,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="position: absolute;"></div>

                        <div class="tp-caption overlay-layer" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="100%"
                        data-width="100%"
                        data-whitespace="normal"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['0','0','0','0']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":100,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="position: absolute; z-index: 0 !important;"></div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-150','-150','-150','-80']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <!-- <h5>know your digital media company</h5> -->
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-textalign="center"
                        data-whitespace="nowrap"
                        data-fontsize="['64','40','36','24']"
                        data-width="auto"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-50','-50','-50','0']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <h2>Mentors from more than <br> 30 different sectors of area expertise</h2>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['100','100','100','100']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="#vision" class="theme-btn btn-style-one">learn more</a>
                                <a href="#vision" class="theme-btn btn-style-two">explore</a>
                            </div>
                        </div>
                    </li>

                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('') }}public/welcome/images/main-slider/image-1.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('') }}public/welcome/images/slider2.jpg"> 

                        <div class="tp-caption tp-resizeme big-ipad-hidden" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="shape"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['-300','-40','-40','-40']"
                        data-voffset="['20','0','0','0']"
                        data-x="['left','left','right','right']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"delay":4000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <figure class="content-image"><img src="{{ asset('') }}public/welcome/images/icons/three-lines-3.png" alt=""></figure>
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-whitespace="normal"
                        data-width="['650','650','750','450']"
                        data-hoffset="['-35','20','20','20']"
                        data-voffset="['-145','-145','-145','-80']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           <!--  <div class="text" style="text-transform: uppercase;">know your digital media company</div> -->
                        </div>

                        <div class="tp-caption" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="auto"
                        data-hoffset="['-35','20','20','20']"
                        data-voffset="['-40','-40','-40','0']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                           
                            <h2>Transform your idea into <br> a scalable business</h2>
                        </div>
                        
                        <div class="tp-caption tp-resizeme" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['-35','20','20','20']"
                        data-voffset="['100','100','100','90']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="#vision" class="theme-btn btn-style-one">learn more</a>
                                <a href="#vision" class="theme-btn btn-style-two">explore</a>
                            </div>
                        </div>

                        <div class="tp-caption tp-resizeme big-ipad-hidden" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="shape"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['-65','-40','-40','-40']"
                        data-voffset="['-180','0','0','0']"
                        data-x="['right','right','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <figure class="content-image"><img src="{{ asset('') }}public/welcome/images/icons/dots-3.png" alt=""></figure>
                        </div>

                        <div class="tp-caption tp-resizeme big-ipad-hidden" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="shape"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['210','-40','-40','-40']"
                        data-voffset="['-210','0','0','0']"
                        data-x="['center','center','right','right']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"delay":3500,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <figure style="transform: rotate(-45deg);"><img src="{{ asset('') }}public/welcome/images/icons/icon-twist-4.png" alt=""></figure>
                        </div>

                        <div class="tp-caption tp-resizeme big-ipad-hidden" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="shape"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['-255','-255','-255','-255']"
                        data-voffset="['30','0','0','0']"
                        data-x="['right','right','right','right']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <figure class="content-image"><img src="{{ asset('') }}public/welcome/images/main-slider/content-img-3.jpg" alt=""></figure>
                        </div>

                        <div class="tp-caption tp-resizeme big-ipad-hidden" 
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="shape"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-hoffset="['100','0','-255','-255']"
                        data-voffset="['235','0','0','0']"
                        data-x="['center','middle','right','right']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <figure class="content-image"><img src="{{ asset('') }}public/welcome/images/main-slider/content-img-4.jpg" alt=""></figure>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- Features Section -->
    <section class="features-section">
        <div class="auto-container">
            <div class="inner-container" id="vision" name="vision">            
                <div class="row clearfix">
                    <!-- Feature Block -->
                    <div class="feature-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box"><i class="fa fa-eye" aria-hidden="true"></i></div>
                            <h3><a href="#">Vision</a></h3>
                            <div class="text">To bring inspiration and encouragement to every entrepreneur in the world through our one stop exclusive mentoring platform that ensures maximum startup success ratio through its vast mentoring offers.</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block active col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></div>
                            <h3><a href="#">Mission</a></h3>
                            <div class="text">Connect the budding and aspiring entrepreneurs to a vast pool of mentors and guides from various industries that are just a click away.</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="{{ asset('') }}public/welcome/images/outcome-icon.png" /></div>
                            <h3><a href="#">Outcome</a></h3>
                            <div class="text">To deliver a one stop solution for all startup related mentoring and guidance across all facets of operations & management, ensuring that the Startups enjoy success and overcome hurdles in their journey with comprehensive support of the larger ecosystem.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section -->

    <!-- About Us -->
    <section class="about-us" id="gvfl" name="gvfl">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon icon-block"></span>
                <span class="icon icon-star"></span>
                <span class="icon icon-twist"></span>
                <span class="icon icon-dots"></span>
                <span class="icon icon-dots-8"></span>
            </div>
            <div class="row clearfix">
                <div class="content-column col-md-9 col-sm-12 col-xs-12">
                    <div class="inner-column">                                     
                        <h2>About GVFL</h2>
                        <div class="text">
                            <p>Founded in the year 1990, GVFL or Gujarat Venture Finance Limited is regarded as one of pioneers of Venture Capital in India. It has carved a niche for itself by making marquee investments in early stage companies across sectors through various funds. In an endeavour to back the first generation entrepreneurs, GVFL has launched &#39;GVFL Startup Fund&#39;. The fund focuses on highly scalable, innovative business models, across, sectors, which use technology as an enabler or differentiator and are backed by credible teams.</p>
                          
                        </div>
                        <div class="link-box">
                        <a href="http://www.gvfl.com/" target="_blank" class="mt20 theme-btn btn-style-four">read more</a>
                        </div>
                    </div>
                </div>

                <div class="image-column pull-right col-md-3 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="image-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{ asset('') }}public/welcome/images/gvfl-logo.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Us -->

    <section class="about-us about-us-wrapping" id="cradle" name="cradle">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon icon-block"></span>
                <span class="icon icon-star"></span>
                <span class="icon icon-twist"></span>
                <span class="icon icon-dots"></span>
                <span class="icon icon-dots-8"></span>
            </div>
            <div class="row clearfix">
                <div class="image-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column" style="margin-top: 85px;margin-right:0px !important;">
                        <div class="image-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{ asset('') }}public/welcome/images/about-cradle.png" alt=""></div>
                    </div>
                </div>
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">                                     
                        <h2>About CrAdLE</h2>
                        <div class="text">
                            <p>Launched on 2nd December 2016, CrAdLE or Centre for Advancing and Launching Enterprises is a technology business incubator with multiple focus areas into manufacturing, healthcare, renewable energy and food/agri business. Catalysed and supported by National Science and Technology Entrepreneurship Development Board, CrAdLE has been catering to more than 25 Startups and the numbers are rising. The incubator offers the Startups to access a range of services including workspace, technical support, networking and fund raising opportunities as well.</p>
                        </div>
                        <div class="link-box">
                        <a href="https://cradle-edii.in/" target="_blank" class="mt20 theme-btn btn-style-four">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section>
    <div class="auto-container">
        <div class="row">
            <div class="col-md-6">
                <h1>What we do?</h1>
                <p>As amazing as it sounds, being an entrepreneur is not an easy task. Building a company is hard, especially when you have no prior experience, limited resources and almost no external support. The only thing that makes you going is your gut feeling and a belief that you can do great things but that’s not enough. This is when Mentorgateway comes to the rescue.</p>
                <p>Mentorgateway acts as a bridging gap between the aspiring entrepreneurs and the mentors and experts from different industries aimed towards supporting the Startups at every aspect of their entrepreneurial journey through guidance and support on various business decisions.</p>
                <p>CrAdLE (Centre for Advancing and Launching Enterprises), the incubator at EDII, Gandhinagar joined hands with GVFL(Gujarat Venture Finance Limited) to give birth to an advanced online mentoring platform especially for the next-gen aspiring entrepreneurs.
                
                <div class="link-box">
                    @if(Auth::user())
                            <li>
                                <a href="/home" style="color: #006cb5;"  class="mt20 theme-btn btn-style-four">Startup Login</a>
                                
                            </li>
							@else
                            <a href="#" style="color: #006cb5;"  class="startup-login" class="mt20 theme-btn btn-style-four">Startup Login</a>
							@endif
                    
                </div>
                <div class="link-box">
                    <a href="https://mentorgateway.com/mentor/login" class="mt20 theme-btn btn-style-four">Mentor Login </a>
                </div>
                
            </div>
            <div class="col-md-6">
                <h1>Why is mentoring important?</h1>
                <div class="">“A good plan implemented today is better than a perfect plan implemented tomorrow.”— George Patton</div>
                <p>There’s a huge difference between setting up a business venture and running it successfully over years. No matter how great the idea is or the product but if is not executed in the right way, might fail. Mentors and industry experts have been there and done all that you are struggling with. From ideation stage to execution to prototyping and a market ready product, they know the minute details of what needs to be done and when. They have been in your dream place for years and they know what you lack.</p>
                <p>Some of the benefits that you will get from mentorship are:</p>
                <ul class="listing">
                    <li>Gain from their experience</li>
                    <li>Probability to succeed increases</li>
                    <li>Widen your network and increase opportunities</li>
                    <li>Develop all the technical and managerial skills</li>
                    <li>Constant assurance that you are in the right path</li>
                    <li>Ensure your business stays longer</li>
                    <li>Equip better skills in dealing with customers or vendors</li>
                    <li>Constant encouragement to do better even during the worse times</li>
                    <li>Improvise on numbers and help make a better business plan that would ensure getting funds</li>
                    <li>Look through the mentor’s perspective and develop a successful business model</li>
                </ul>
            </div>
        </div>
     </div>
    </section>
    <!-- End Video Section -->
    <section class="ready-to-start" id=about_us>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column pull-right col-md-7 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h3>About Us</h3>
                        <div class="text">Innovation is defined as the ability to view an idea as an opportunity towards building better solutions that meet new requirements in the existing market needs. Experimentations, trials and research are much needed steps to convert this idea into a scalable opportunity.</div>
                        <div class="text">Mentorgateway is a platform focused towards fostering growth in the aspiring entrepreneurs through guidance delivered by experienced mentors from different sectors in the ecosystem to convert their ideas into successful Startups.
                        </div>
                    </div>
                </div>

                <!-- image Column -->
                <div class="image-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image wow fadeInDown animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInDown;"><img src="{{ asset('') }}public/welcome/images/resource/image-3.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="video-section">
        <div class="sec-title text-center">
         <h2 class="gif-title">Mentorgateway has come up with a five stage process which covers all the crucial steps of a Mentoring.</h2>
         <img src="{{ asset('') }}public/welcome/images/steps.gif" alt="" style="width: 80%;">
        </div>
    </section>

    
    <section class="team-section">
        <div class="anim-icons">
            <span class="icon icon-dots-9"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Mentors</h2>
               <!--  <span class="sub-title">Thanks for choosing our services</span> -->
                <div class="text">Just a click away! <br> Startups can now connect to mentors from diversified industry sectors from all over the world. </div>
                
            </div>

            <div class="row clearfix">
                <!-- Team Block -->
                 @if($mentor)
                @foreach($mentor as $ment)
                <div class="team-block col-md-4 col-sm-6 col-xs-12">
                            <div class="image-box">
                                @if(!empty($ment->image))
                                <img src="{{ asset('') }}public/images/{{ $ment->image }} " alt="">
                                @else
                                <img src="{{ asset('') }}public/welcome/images/resource/team-3.jpg" alt="">
                                @endif
                                <div class="overlay-box">
                                    <a href="/mentor/info/{{$ment->id}}" target="_blank" class="overlay-box-wrap">
                                        <h3 class="name">{{ $ment->name }}</h3>
                                        <p class="desg">{{ $ment->designation }}</p>
                                    </a>
                                </div>
                            </div>
                </div>
                @endforeach
                @endif
            </div>
            <div class="link-box">
                <a href="{{route('mentors.list')}}" class="mt20 theme-btn centr-btn btn-style-four">view more</a>
            </div>
        </div>
    </section>
    <!--End Team Section -->


    <!-- Testimonial Section -->
    <section class="testimonial-section mt20">
        <div class="anim-icons">
            <span class="icon icon-star-4"></span>
        </div>
        <div class="inner-container">
            <div class="row clearfix">
                <div class="title-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Testimonials</h2>
                            <span class="sub-title">The Startups Speak!</span>
                            <div class="text">What our Startups have to say about the guidance and support they have been getting from the mentors at Mentor Gateway!</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="text">J B Patel Sir guided us on how a food startup should be managing there limited resources and bring maximum output. He guided us on sectors like Food manufacturing, Quality control, Product proposition, resource identification. Such guidance is very crucial for us to run our startup successfully and reducing risk elements in early stages.</div>
                                    <div class="info">
                                        <h4>Vedant Kaila - <span>FitLicks</span></h4>
                                        <div class="rating">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="text">The team at CRADLE has facilitated mentors for our team from a diverse portfolio, whose advice has proven to be strategic and invaluable for our team. One such mentorship session was with Mr. Peter Wierenga, ex-CEO of Philips Research. Mr. Wierenga's advice was critical in shaping our R&D and business strategy, especially in the way that we should project ourselves as a solution driven company as opposed to simply a product driven company. Also his inputs regarding IP protection were crucial for us.</div>
                                    <div class="info">
                                        <h4>Sumeet Mohanty - <span>Phycolinc Technologies</span></h4>
                                        <div class="rating">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="text">Our interaction with Mr. Peter Wierenga was very helpful. He guided us to make our business plan better and advised us on how to make good financial models. He is also an expert in patents and legal and hence helped us in patent filing.</div>
                                    <div class="info">
                                        <h4> Sumitabh Tiwari  - <span>HybRed Energy Solution Pvt. Ltd</span></h4>
                                        <div class="rating">
                                            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

   
    <!--Clients Section-->
    <section class="clients-section">
        <div class="inner-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('') }}public/welcome/images/about-cradle.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('') }}public/welcome/images/gvfl-logo_new.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('') }}public/welcome/images/edii_logo.png" alt=""></a></figure></li>
                    
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- Call To Action -->
    <section class="call-to-action">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h2>Subscribe to our newsletter</h2>
                    <p>Join our subscribers list to get the latest news, updates special offers delivered directly in your inbox.</p>
                      <input type="email" class="email-subscribe" id="subscriberEmail" placeholder="Enter your Email" name="Email" value="">
                     <button style="background: top;" id="trigerSubscribtion" class="btn-subscribe theme-btn btn-style-two">Subscribe</button>
                     <p class="text=danger hidden" id="subscriptionError"></p>
                     <p class="text-success hidden" id="subscriptionSuccess"></p>
              
                </div>
                <div class="btn-box">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action -->

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
<!--Revolution Slider-->
<script src="{{ asset('') }}public/welcome/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset('') }}public/welcome/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('') }}public/welcome/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ asset('') }}public/welcome/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{ asset('') }}public/welcome/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ asset('') }}public/welcome/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{ asset('') }}public/welcome/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ asset('') }}public/welcome/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ asset('') }}public/welcome/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{ asset('') }}public/welcome/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ asset('') }}public/welcome/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{ asset('') }}public/welcome/js/main-slider-script.js"></script>
<script src="{{ asset('') }}public/welcome/js/bootstrap.min.js"></script>
<!-- <script src="js/jquery.fancybox.js"></script> -->
<script src="{{ asset('') }}public/welcome/js/jquery-ui.js"></script>
<script src="{{ asset('') }}public/welcome/js/owl.js"></script>
<!-- <script src="js/appear.js"></script> -->
<!-- <script src="js/knob.js"></script> -->
<script src="{{ asset('') }}public/welcome/js/wow.js"></script>
<!-- <script src="js/element-in-view.js"></script> -->
<script src="{{ asset('') }}public/welcome/js/script.js"></script>

<!--Startup Login  - ---------------------------- -->
 <div class="modal fade" id="startup_login_dialog" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content boxd" id="signin_toggle_">
                <div class="modal-header" style="padding:35px 50px;">
                    <h4><i class="fa fa-power-off"></i> <strong> StartUp Login</strong>
                    <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
                </div>
                <div class="modal-body pt-2" style="padding:20px 50px;">
                    <form role="form" class="mb-3">
                        <div class="form-group">
                            <span class="alert-danger hidden" id="login_error_msg"></span>
                        </div>
                        <div class="form-group">
                            <label for="l_email" style="font-weight: 600;" class="mb-1"><i class="fa fa-envelope fa" aria-hidden="true"></i> Email Id</label>
                            <input type="text" class="form-control" id="l_email" name="l_email" placeholder="Enter your email Id">
                            <span class="help-block hidden" id="error_l_email">
                            </span>     
                        </div>
                        <div class="form-group">
                            <label for="l_password" style="font-weight: 600;" class="mb-1"><i class="fa fa-eye"></i> Password</label>
                            <input type="password" class="form-control" id="l_password" name="l_password" placeholder="Enter password">
                            <span class="help-block hidden" id="error_l_password">
                            </span>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="l_remember" {{ old('remember') ? 'checked' : '' }} style="margin-right:15px" >Remember me</label>
                        </div>
                    </form>
                    <button id="stup-login" class="btn btn-success btn-block"><i class="fa fa-power-off"></i> Login</button>
                </div>
                <div class="modal-footer text-center">
                    <p>Not a member? <a id="show_signUp" href="#">Sign Up</a></p>
                    <p>Forgot <a href="{{ route('password.request') }}">Password?</a></p> 
                </div>
            </div>  
            <!-- End Modal Content -->

            <!-- SignUp Modal content-->
            <div class="modal-content boxd hidden" id="signup_toggle_">
                <div class="modal-header" style="padding:35px 50px;">
                    <h4><strong> Sign Up</strong>
                    <button type="button" class="close" data-dismiss="modal">&times;</button></h4>
                </div>
                <div class="modal-body pt-4" style="padding:20px 50px;">
                    <form role="form" class="mb-3">
                        <div class="form-group">
                            <p class="alert-danger hidden" id="reg_error_msg"></p>
                            <p class="text-success hidden" id="successmsg"></p>
                            <p class="alert-success hidden" id="emailmsg" style="padding: 2vh;"></p>
                        </div>
                        <div class="form-group send">
                            <label for="s_name" style="font-weight: 600;" class="mb-1"><i class="fa fa-user"></i> Name</label>
                            <input type="text" class="form-control" id="s_name" name="s_name" placeholder="Enter your name">
                            <span class="help-block hidden" id="error_s_name">
                            </span>     
                        </div>
                        <div class="form-group send">
                            <label for="s_email" style="font-weight: 600;" class="mb-1"><i class="fa fa-envelope fa" aria-hidden="true"></i> Email Id</label>
                            <input type="text" class="form-control" id="s_email" name="s_email" placeholder="Enter your email Id">
                            <span class="help-block hidden" id="error_s_email">
                            </span>     
                        </div>
                        <div class="form-group send">
                            <label for="s_password" style="font-weight: 600;" class="mb-1"><i class="fa fa-eye"></i> Password</label>
                            <input type="password" class="form-control" id="s_password" name="s_password" placeholder="Enter password">
                            <span class="help-block hidden" id="error_s_pass">
                            </span>
                        </div>
                        <div class="form-group send">
                            <label for="sc_password" style="font-weight: 600;" class="mb-1"><i class="fa fa-eye"></i> Confirm Password</label>
                            <input type="password" class="form-control" id="sc_password" name="sc_password" placeholder="Confirm password">
                            <span class="help-block hidden" id="error_s_pass">
                            </span>
                        </div>
                        <div class="checkbox hidden">
                            <label><input type="checkbox" name="s_remember" {{ old('s_remember') ? 'checked' : '' }} style="margin-right:15px" >Remember me</label>
                        </div>
                    </form>
                    <button id="stup-signup" class="btn btn-success btn-block"><i class="fa fa-power-off"></i> Sign Up</button>
                </div>
                <div class="modal-footer text-center">
                    <p>Already a member? <a id="show_login" href="#">Login</a></p>
                </div>
            </div>  
            <!-- End Modal Content -->
        </div>
  </div>

	<!-- Modal -->
	<div id="contact_us" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Cradle</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="https://www.indiaflowermall.com/blog/wp-content/uploads/2018/07/8461.jpg" class="img-fluid" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. </p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal -->

            
    <!-- js -->
	<script src="{{ asset('') }}public/welcome/js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!--banner-slider-->
	<script src="{{ asset('') }}public/welcome/js/JiSlider.js"></script>
	<script> 
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 1,
				reverse: false
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->
	<!-- stats -->
	<script src="{{ asset('') }}public/welcome/js/jquery.waypoints.min.js"></script>
	<script src="{{ asset('') }}public/welcome/js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

	<!-- FlexSlider-JavaScript -->
	<script defer src="{{ asset('') }}public/welcome/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
<!-- //FlexSlider-JavaScript -->
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	 <script src="{{ asset('') }}public/welcome/js/bootstrap.js"></script>

<script>
    // Sunscriber
    $(document).ready(function(){
            
	 	$("#trigerSubscribtion").click(function(){
              
                $('#trigerSubscribtion').text(""); 
                $('#trigerSubscribtion').append('<i class="fa fa-spinner fa-spin"></i>  Please wait...');

                var data = new FormData();

                data.append('email', $('input[id=subscriberEmail]').val());

                $("#subscriptionError").text(''); 
                $("#subscriptionError").addClass('hidden'); 

                $("#subscriptionSuccess").text(''); 
                $("#subscriptionSuccess").addClass('hidden');

                $.ajax({
                   type : 'POST',
                   url : '/subscribe',
                   data: data,
                   contentType: false,
                   processData: false,
                   beforeSend: function(xhr){ xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content')); },
                   success: function(data) {

                        if(data.errors.email){
                            $("#subscriptionError").removeClass('hidden');
                            $('#subscriptionError').text(data.errors.email);
                          	$('#stup-login').text(""); 
                        	$('#stup-login').append('<i class="fa fa-power-off"></i> Login');
                 
                        } else{
                            $("#subscriptionSuccess").removeClass('hidden');
                            $('#subscriptionSuccess').text(""); 
                            $('#subscriptionSuccess').html('Thank you for subscribing');
                            
                        }
                        $('#trigerSubscribtion').text(""); 
                        $('#trigerSubscribtion').append('Subscribe');
                         
                   }
               }).fail(function (jqXHR, textStatus, error) {
                         $("#subscriptionError").removeClass('hidden');
                           
                        $('#subscriptionError').text('Error ! '+error);
                        $('#trigerSubscribtion').text(""); 
                        $('#trigerSubscribtion').append('Subscribe');
                 });
            });
        });
  </script>
  
     <script>
    // Startup Ajax Login
    $(document).ready(function(){
            
	 	$("#stup-login").click(function(){
              
                $('#stup-login').text(""); 
                $('#stup-login').append('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Processing ...');

                var data = new FormData();

                data.append('email', $('input[name=l_email]').val());
                data.append('password', $('input[name=l_password]').val());
                data.append('remember', $('input[name=l_remember]').val());
                $("#login_error_msg").text(''); 
                $("#login_error_msg").addClass('hidden'); 

                $.ajax({
                   type : 'POST',
                   url : 'starup/login',
                   data: data,
                   contentType: false,
                   processData: false,
                   beforeSend: function(xhr){ xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content')); },
                   success: function(data) {
                  //      $('#stup-login').text(""); 
                 //       $('#stup-login').append('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Connecting ...');
                        console.log(data);
                        if(data.errors.email){
                        //    alert("err");
                            $("#login_error_msg").removeClass('hidden'); 
                            $('#login_error_msg').text(data.errors.email);
                          	$('#stup-login').text(""); 
                        	$('#stup-login').append('<i class="fa fa-power-off"></i> Login');
                 
                        }else if(data.errors){
							$("#login_error_msg").removeClass('hidden'); 
                            $('#login_error_msg').text(data.errors);
                          	$('#stup-login').text(""); 
							  $('#stup-login').append('<i class="fa fa-power-off"></i> Login');
						} else{
                            $('#std-login').text(""); 
                            $('#std-login').append('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Redirecting ...');
                            window.location.replace("/home");
                        }
                   }
               }).fail(function (jqXHR, textStatus, error) {
                        
                        $('#login_error_msg').text('Error ! '+error);
                 });
            });
        });
  </script>

  <!-- Startup Register -->

  <script>

			// toggle Signup and Login
			$("#show_login").click(function(){
					$('#signin_toggle_').removeClass('hidden'); 
					$('#signup_toggle_').addClass('hidden'); 
			});

			$("#show_signUp").click(function(){
					$('#signin_toggle_').addClass('hidden'); 
					$('#signup_toggle_').removeClass('hidden'); 
			});

  			$(".startup-login").click(function(){
                $('#startup_login_dialog').modal('show');
                $('.form-horizontal').show();
            });
			// Register
			$(document).ready(function(){
					
						$("#stup-signup").click(function(){     
							$('#stup-signup').text(""); 
							$('#stup-signup').append('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Processing ...');

							var data = new FormData();

							data.append('name', $('input[name=s_name]').val());
							data.append('email', $('input[name=s_email]').val());
							data.append('password', $('input[name=s_password]').val());
							data.append('password_confirmation', $('input[name=sc_password]').val());
							data.append('remember', $('input[name=s_remember]').val());
					//		$("#error_msg").text(''); 
				//			$("#error_msg").addClass('hidden'); 
						$.ajax({
							type : 'POST',
							url : 'register/new_startup',
							data: data,
							contentType: false,
							processData: false,
							beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
							
							success: function(data) {
								
									$('#stup-signup').text(""); 
									$('#stup-signup').append('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Connecting ...');
							      console.log(data);
									if(data.errors){
								//     alert("err");
                                $('#stup-signup').text(""); 
                                $('#stup-signup').append('<i class="fa fa-power-off"></i> Sign Up');
                                $('#reg_error_msg').text("");
								//alert(data.errors.email);
										$("#reg_error_msg").removeClass('hidden'); 
										if(data.errors.name)
											$('#reg_error_msg').text(data.errors.name);
										else if (data.errors.email)
											$('#reg_error_msg').text(data.errors.email);
										else if(data.errors.password)
											$('#reg_error_msg').text(data.errors.password);
										else if(data.errors.password_confirmation)
											$('#reg_error_msg').text(data.errors.password_confirmation);
										else 
											$('#reg_error_msg').text("Unknown Error! pls fill proper detail");

										
									} else if(data.msg){
										$("#reg_error_msg").removeClass('hidden'); 
										$('#reg_error_msg').text("NOW ! You Can Login !");
										
									} else{
                                        $("#reg_error_msg").addClass('hidden');
                                        $(".send").addClass('hidden');
                                        $("#successmsg").removeClass('hidden');
                                        $('#successmsg').text("Confirm Your Email Address");
                                        $('#emailmsg').removeClass('hidden');
                                        $('#emailmsg').html("A confirmation email has been sent to you. Click on the confirmation link in the email to activate your account, <br> Please check spam folder if not finding the mail in your inbox");
										$('#stup-signup').text(""); 
                                        $('#stup-signup').append('Sign Up');
									
									//	$('#stup-signup').append('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Redirecting ...');
									//	window.location.replace("/home");
									}
							}
						}).fail(function (jqXHR, textStatus, error) {
								$('#stup-signup').text("Error ! "+error);
								$('#stup-signup').text(""); 
                                $('#stup-signup').append('<i class="fa fa-power-off"></i> Sign Up');
                             
									
							});
						});
					});
			</script>


			<script>
				// Admin - login
				$(document).ready(function(){
						
						$("#adminlogin").click(function(){
						
							$('#adminlogin').text(""); 
							$('#adminlogin').append('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Processing ...');

							var data = new FormData();

							data.append('email', $('input[name=loginemail]').val());
							data.append('password', $('input[name=loginpassword]').val());
							data.append('remember', $('input[name=remember]').val());
							$("#error_msg").text(''); 
							$("#error_msg").addClass('hidden'); 
						$.ajax({
							type : 'POST',
							url : '/admin/login',
							data: data,
							contentType: false,
							processData: false,
							beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
							
							success: function(data) {
								
									
									$('#adminlogin').text(""); 
									$('#adminlogin').append('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Connecting ...');
							//     console.log(data);
									if(data.errors){
										$("#error_msg").removeClass('hidden'); 
										$('#error_msg').text("credentials are not correct");
										$('#adminlogin').text(""); 
										$('#adminlogin').append('Login');
									} else{
										$('#adminlogin').text(""); 
										$('#adminlogin').append('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Redirecting ...');
										window.location.replace("/admin");
									//   console.log("ABC");
									}
							}
						}).fail(function (jqXHR, textStatus, error) {
									$('#adminlogin').text(""); 
									$('#adminlogin').append('Login');
									
									
							});
						});
					});
			</script>

<script>
$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
</script>
</body>
</html>





























