
<!DOCTYPE html>
<html>
<head>
<title>HotelDeMartin</title>


<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<!--//web-fonts-->
</head>
<body>
<!--/main-header-->
  <div class="w3layouts-top-strip">
			<div class="top-srip-agileinfo">
				<div class="w3ls-social-icons text-left">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					
				</div>
				<div class="agileits-contact-info text-right">
					<ul>
                    <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +880 168 3771011 </li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@info@hoteldemartin.org">info@hoteldemartin.org</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
  <!--/banner-section-->
	<div id="demo-1" class="banner-inner">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
								<nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<h1><a  href="/"><span>Hotel</span>DeMartin<p class="s-log">Website</p></a>
										 
										</h1>
									</div>
									<!-- navbar-header -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										
				 <ul class="nav navbar-nav">
											<li><a href="/">Home</a></li>
												<li><a href="/about">About</a></li>
                                                <li><a href="/gallery">Gallery</a></li>
                                                <li><a href="/login">Login</a></li>
												<li class="active"><a href="/contact">Contact</a></li>

											
										</ul>


									</div>
									<div class="clearfix"> </div>	
								</nav>

					
							</div> 

			
		<!--//header-w3l-->
		</div>
		 </div>
  <!--/banner-section-->
 <!--//main-header-->
	        
						<!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index">Home</a> <i>/</i></li>
				
				<li>Contact</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->
			<!--/content-inner-section-->
				  <div class="w3_content_agilleinfo_inner">
					    <div class="container">
							<div class="inner-agile-w3l-part-head">
					           <h2 class="w3l-inner-h-title">Contact</h2>
								
							</div>
									<div class="w3_mail_grids">
									{!! Form::open(['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
										<div class="form-group">
											{{Form::label('name', 'Name')}}
											{{Form::text('name', '', ['id' =>'name', 'class' => 'form-control', 'placeholder' => 'Name'])}}
										</div>
										<div class="form-group">
											{{Form::label('email', 'Email')}}
											{{Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'email'])}}
										</div>
										<div class="form-group">
											{{Form::label('phoneno', 'Phone No')}}
											{{Form::number('phoneno', '', ['id' => 'phone no', 'class' => 'form-control', 'placeholder' => 'phoneno'])}}
										</div>
										<div class="form-group">
											{{Form::label('msg', 'Message')}}
											{{Form::text('msg', '', ['id' => 'msg', 'class' => 'form-control', 'placeholder' => 'msg'])}}
										</div>

										{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
									{!! Form::close() !!}
							</div>
					   </div>
							<div class=" map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118830.37498009244!2d91.932860599034!3d21.450883578282923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adc7ea2ab928c3%3A0x3b539e0a68970810!2sCox&#39;s+Bazar!5e0!3m2!1sen!2sbd!4v1533243433769" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
				  </div>
			<!--//content-inner-section-->
			<div class="w3l_contact-bottom">
		<div class="container">
			
			<div class="w3ls_con_grids">
				
				<div class="w3ls_footer_grid">
					<div class="col-md-4 con-ions-left">
						<div class="con-ions-left-w3l">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="con-grid-w3l-leftr">
							<h4>Location</h4>
							<p>420 Hotel Motel Road, Cox's Bazar,Bangladesh</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 con-ions-left">
						<div class="con-ions-left-w3l">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="con-grid-w3l-leftr">
							<h4>Email</h4>
							<a href="mailto:info@hoteldemartin.org">info@hoteldemartin.org</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 con-ions-left">
						<div class="con-ions-left-w3l">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="con-grid-w3l-leftr">
							<h4>Call Us</h4>
							<p>(+880) 168 377 1011</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
 <!-- Footer -->
 <div class="w3l-footer">
		<div class="container">
         <div class="footer-info-agile">
				<div class="col-md-2 footer-info-grid links">
					<h4>Quick links</h4>
					<ul>
						       <li><a href="/">Home</a></li> 
								<li><a href="/about">About</a></li> 
								<li><a href="/gallery">Gallery</a></li> 
								<li><a href="/login">Login</a></li> 
								<li><a href="/contact">Contact</a></li> 
					</ul>
				</div>
				<div class="col-md-3 footer-info-grid address">
					<h4>Address</h4>
					<address>
						<ul>
							<li>42o, Hotel Motel Road</li>
							<li>Kolatoli Beach, Cox's Bazar</li>
							<li>Chittagong, Bangladesh</li>
							<li>Telephone : +420 00112233</li>
							<li>Email : <a class="mail" href="mailto:info@hoteldemartin.org">info(at)hoteldemartin.org</a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-3 footer-grid">
				   <h4>Instagram</h4>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f1.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f2.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
						<a href="#"><img src="images/f3.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/f4.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 footer-info-grid">
				<div class="connect-social">
					<h4>Connect with us</h4>
					<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
							
							
							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</section>

				</div>
					

					
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="connect-agileits newsletter">
				<h4>Newsletter</h4>
					<p>Subscribe to our newsletter and we will inform you about newest projects and promotions.
					</p>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email address..." required="">
						<input type="submit" class="submit" value="Subscribe">
					</form>
			</div>
	   </div>
     </div>

		
			<div class="w3agile_footer_copy">
				    <p>© 2018 HOTELDEMARTIN. All rights reserved | Design by <a href="http://hoteldemartin.org/">CODEQUUAD</a></p>
			</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
		<!-- search-jQuery -->
				<script src="js/main.js"></script>

<!--/script-->
	<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
			<!-- flexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
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

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>