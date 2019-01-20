<!DOCTYPE html>
<html>
<head>
<meta id="token" name="token" content="{{ csrf_token() }}">  
<meta charset="utf-8">
<title>Mentor Gateway | Contact Us</title>
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
                            
                            <li class="current">
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

                            <li ><a href="contact">Contact</a></li>
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
                            <li class="current">
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
    
    <section class="page-title style-two">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon icon-dots-14 now-in-view"></span>
            </div>
            <h1>Our Mentors</h1>
        </div>
    </section>
    <section>
    <div class="auto-container">
        <div class="row">
            @if($mentor)
            <div class="team-block col-md-4 col-sm-6 col-xs-12">
                        <div class="image-box">
                            @if(!empty($mentor->image))
                            <img src="{{ asset('') }}public/images/{{ $mentor->image }} " alt="">
                            @else
                            <img src="{{ asset('') }}public/welcome/images/resource/team-3.jpg" alt="">
                            @endif
                            <div class="overlay-box">
                                <a href="" target="_blank" class="overlay-box-wrap">
                                    <h3 class="name">{{ $mentor->name }}</h3>
                                    <p class="desg">{{ $mentor->designation }}</p>
                                </a>
                            </div>
                        </div>
            </div>
             <div class="team-block col-md-8 col-sm-6 col-xs-12">
                        <div> <label>About me :</label><p class="text-success"> {{ $mentor->about_you }} </p> <label>Objective :</label><p class="text-success"> {{ $mentor->primary_and_secondary_objectives }} </p></div>
                        <table class="table  borderless">
                          <thead>
                            <tr>
                              <th scope="col"></th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Name :</th> <td>{{ $mentor->name }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Email :</th> <td>{{ $mentor->email }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Company Name :</th> <td>{{ $mentor->company_name }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Designation :</th> <td>{{ $mentor->designation }}</td>
                            </tr>
                            <tr>  
                              <th scope="row">Professional Expertise :</th> <td>{{ $mentor->expertise }}</td>
                            </tr>
                            <tr> 
                              <th scope="row">Industry Vertical Experience :</th> <td>{{ $mentor->industry_experience }}</td>
                            </tr>
                            <tr>  
                              <th scope="row">Areas of Business and Management Competence :</th><td>{{ $mentor->areas_of_business }}</td>
                            </tr>
                            
                          </tbody>
                        </table>
            </div>
            @endif
        </div>
    </div>
    </section>

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
                            <p class="alert-success hidden" id="emailmsg"></p>
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

  			$("#startup-login").click(function(){
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
                                        $('#emailmsg').text("A confirmation email has been sent to you. Click on the confirmation link in the email to activate your account");
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