<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>moverspackersdubai.org</title></title>
	
	<!-- Responsive Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- main stylesheet -->
	<link rel="stylesheet" href="{{url('/')}}/frontend/css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="{{url('/')}}/frontend/css/responsive.css">
    


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="{{url('/')}}/frontend/js/respond.js"></script>
	<![endif]-->


</head>
<body>

	

	<!-- #topbar -->
	<section id="topbar" class="mover">
		<div class="container">
			<div class="row">
				<div class="contact-info pull-left">
					<ul>
						<li><a href="tel:+1234567890"><i class="fa fa-map-marker"></i>UAE </a></li>
						<li><a href="#"><i class="fa fa-envelope"></i>info@moverspackersdubai.org</a></li>
					</ul>
				</div> <!-- /.contact-info -->
				<div class="phone-number">
					<p><span>Call us Now:</span> +971 55 84 46 123</p>
				</div>

			</div>
		</div>
	</section> <!-- /#topbar -->

	<!-- header -->
	<header class="mover">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-lg-offset-0 col-md-offset-4 logo">
					<a href="index.html">
						<img src="{{url('/')}}/frontend/img/resources/1.png" alt="Plumberx">
					</a>
				</div>
				<nav class="col-lg-9 col-md-12 col-lg-pull-0 col-md-pull-1 mainmenu-container">
					<button class="mainmenu-toggler">
						<i class="fa fa-bars"></i>
					</button>
					<ul class="mainmenu pull-right">
						<li class="current"> <a href="{{url('/')}}">Home</a> </li>
						<li class="dropdown">
							<a href="{{ URL::to('about-us') }}">About Us</a>

						</li>

						<li class="dropdown"><a href="{{ URL::to('our-Services') }}">Our Services</a>
						</li>

						<li class="dropdown">
							<a href="{{ URL::to('blog') }}">Blog</a>

						</li>
						<li><a href="{{ URL::to('contact-us') }}">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header> <!-- /header -->



	<!-- #page-title -->
	<section id="page-title">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- .title -->
					<div class="title pull-left">
						<h1>About Us</h1>
					</div> <!-- /.title -->
					<!-- .page-breadcumb -->
					<div class="page-breadcumb pull-right">
						<i class="fa fa-home"></i> <a href="{{url('/')}}">Home</a> <i class="fa fa-angle-right"></i> <span>About Us</span>
					</div> <!-- /.page-breadcumb -->
				</div>
			</div>
		</div>
	</section> <!-- /#page-title -->
	
	<!-- #our-mission -->
	<section id="our-mission">
		<div class="container">
			<div class="section-title">
				<h1>Our Mission</h1>
			</div>
			<div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="mission-left-img-holder">
                        <img src="{{url('/')}}/frontend/img/about/about-1.jpg" alt="">
                    </div>
                </div>
				<div class="col-lg-6 col-md-6 col-sm-12 mission-right">
					RT Movers and Packers LLC is a Registered Company in Dubai, We providing professional and affordable moving and shifting services all over the UAE. We are working since 2010 in UAE and have lot of satisfied customers who used our services. Our trained and professional staff can move any office, apartment, or home in a safe and efficient manner
					<div class="row">
						<div class="col-lg-6 col-md-6 col-xs-6">
							<ul>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section> <!-- /#our-mission -->


	{{--<section id="featured">--}}
		{{--<div class="container">--}}
			{{--<div class="row">--}}
				{{--<div class="col-lg-8 col-md-12 pull-left">--}}
					{{--<div class="col-lg-6 col-md-6">--}}
						{{--<div class="content clearfix">--}}
							{{--<div class="img-wrap pull-left  fadeIn" data--offset="3">--}}
								{{--<img src="{{url('/')}}/frontend/img/about/icon/1.png" alt="">--}}
							{{--</div>--}}
							{{--<div class="content-wrap pull-right">--}}
								{{--<h2>24/7 availality</h2>--}}
								{{--<p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="content clearfix">--}}
							{{--<div class="img-wrap pull-left  fadeIn" data--delay=".3s" data--offset="3">--}}
								{{--<img src="{{url('/')}}/frontend/img/about/icon/2.png" alt="">--}}
							{{--</div>--}}
							{{--<div class="content-wrap pull-right">--}}
								{{--<h2>No hidden cost</h2>--}}
								{{--<p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="col-lg-6 col-md-6 ">--}}
						{{--<div class="content clearfix">--}}
							{{--<div class="img-wrap pull-left  fadeIn" data--delay=".6s" data--offset="3">--}}
								{{--<img src="{{url('/')}}/frontend/img/about/icon/3.png" alt="">--}}
							{{--</div>--}}
							{{--<div class="content-wrap pull-right">--}}
								{{--<h2>Certified Mechanics</h2>--}}
								{{--<p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="content clearfix">--}}
							{{--<div class="img-wrap pull-left  fadeIn" data--delay=".9s" data--offset="3">--}}
								{{--<img src="{{url('/')}}/frontend/img/about/icon/4.png" alt="">--}}
							{{--</div>--}}
							{{--<div class="content-wrap pull-right">--}}
								{{--<h2>Affordable prices</h2>--}}
								{{--<p>Lorem ipsum dolor sit amet, consectetur elit. Vestibulum nec odio ipsum. Suspe ndisse cursus malesuada facilisis.</p>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<div class="col-lg-4 col-md-4 about-right-image pull-right  slideInRight" data--offset="10">--}}
					{{--<img src="{{url('/')}}/frontend/img/about/2.jpg" alt="">--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</section>--}}


	<!-- #our-specialist -->



	<section id="great-moving-team-mover">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2><b>Great</b> Moving Company</h2>
					<p class="emergency24hour">If you have any Move  need, simply call our 24 hour<br> emergecny number.</p>
					<p class="has-btn"><b>+971 55 84 46 123</b> <a href="#" class="hvr-bounce-to-right">Contact Us</a></p>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer class="mover">
		<div class="container">
			<div class="row">
				<!-- .widget -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
					<img class="positioned wow slideInLeft " src="{{url('/')}}/frontend/img/resources/footer-man.png" alt="">
				</div> <!-- /.widget -->
				<!-- .widget -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
					<h3>About Us</h3>
					<p> RT Movers and Packers LLC is a Registered Company in Dubai, We providing professional and affordable moving and shifting services all over the UAE. We are working since 2010 in UAE and have lot of satisfied customers who used our services. Our trained and professional staff can move any office, apartment, or home in a safe and efficient manner.: </p>
					<a href="#" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
					<ul class="social">
						<li><a href="#" class="hvr-radial-out"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="hvr-radial-out"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="hvr-radial-out"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="hvr-radial-out"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div> <!-- /.widget -->
				<!-- .widget -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget clearboth-tab">
					<h3>our services</h3>
					<ul class="popular-post">
						<li>
							<a href="#"><h5><i class="fa fa-angle-right angle-right-icon"></i>Packers & Movers</h5></a>
						</li>
						<li>
							<a href="#"><h5><i class="fa fa-angle-right angle-right-icon"></i>Home/Office relocation</h5></a>
						</li>
						<li>
							<a href="#"><h5><i class="fa fa-angle-right angle-right-icon"></i>Storage services</h5></a>
						</li>
						<li>
							<a href="#"><h5><i class="fa fa-angle-right angle-right-icon"></i>Furniture Installation</h5></a>
						</li>

					</ul>
				</div> <!-- /.widget -->
				<!-- .widget -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
					<h3>Get in Touch</h3>
					<ul class="contact-info">
						<li><i class="fa fa-map-marker"></i> UAE</li>
						<li><i class="fa fa-phone"></i>+971 55 84 46 123</li>
						<li><i class="fa fa-envelope-o"></i> info@moverspackersdubai.org</li>
						<li><i class="fa fa-globe"></i> http://moverspackersdubai.org</li>
					</ul>
				</div> <!-- /.widget -->

			</div>
		</div>
	</footer> <!-- /footer -->
	
	<!-- #bottom-bar -->
<!-- /#bottom-bar -->


	
	<script src="{{url('/')}}/frontend/js/jquery.min.js"></script> <!-- jQuery JS -->
	<script src="{{url('/')}}/frontend/js/bootstrap.min.js"></script> <!-- BootStrap JS -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script> <!-- Gmap Helper -->
	<script src="{{url('/')}}/frontend/js/gmap.js"></script> <!-- gmap JS -->
	<script src="{{url('/')}}/frontend/js/wow.js"></script> <!-- wow JS -->
	<script src="{{url('/')}}/frontend/js/owl.carousel.min.js"></script> <!-- OWL Carousle JS -->
	<script src="{{url('/')}}/frontend/js/jquery.fancybox.pack.js"></script> <!-- FancyBox -->
	<script src="{{url('/')}}/frontend/js/jquery.easing.min.js"></script> <!-- EaseIng JS -->
	<script src="{{url('/')}}/frontend/js/custom.js"></script> <!-- Custom JS -->

</body>
</html>