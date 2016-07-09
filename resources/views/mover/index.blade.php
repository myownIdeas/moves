<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>moverspackersdubai.org</title>

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
				<a href="{{url('/')}}">
					<img src="{{url('/')}}/frontend/img/resources/1.png" alt="Plumberx">

				</a>
			</div>
			<nav class="col-lg-9 col-md-12 col-lg-pull-0 col-md-pull-1 mainmenu-container">
				<button class="mainmenu-toggler">
					<i class="fa fa-bars"></i>
				</button>
				<ul class="mainmenu pull-right">
					<li class="current"> <a href="{{ URL::to('/') }}">Home</a> </li>
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

@if(Session::has('message'))
	<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<section class="rev_slider_wrapper mover-banner">
	<div id="slider1" class="rev_slider"  data-version="5.0">
		<ul>
			<li data-transition="parallaxvertical">
				<img src="{{url('/')}}/frontend/img/slides/image3.jpg"  alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >



			</li>
			<li data-transition="parallaxvertical">
				<img src="{{url('/')}}/frontend/img/slides/image2.jpg"  alt="" width="1920" height="705" data-bgposition="top right" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" >

			</li>
			<li data-transition="parallaxvertical">
				<img src="{{url('/')}}/frontend/img/slides/image1.jpg"  alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" >

			</li>
		</ul>
	</div>

	<div class="query">
		<h2>Get a Free Quote</h2>
		<div class="query-contact">

			{!! Form::open(['url' => 'store']) !!}
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="f_name" class="form-control" placeholder="First Name" value="">
				</div>

				<div class="form-group">
					<label>Mobile Number:</label>
					<input type="text" name="mobile" class="form-control" placeholder="Mobile No" value="">
				</div>

				<div class="form-group">
					<label>Email:</label>
					<input type="text" name="email" class="form-control" placeholder="Email Address" value="">
				</div>

				<div class="form-group">
					<label>Text</label>
					<textarea  class="form-control" placeholder="Your text" name="text"></textarea>
				</div>
			{!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}

			{!! Form::close() !!}
		</div>
	</div>

</section>


<section id="our-services-mover">
	<div class="container">
		<div class="section-title">
			<h1>Services we provide</h1>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 thm-image-hover single-our-service-mover">
				<div class="img-holder">
					<img src="{{url('/')}}/frontend/img/our-service-mover/1.jpg" alt="">
				</div>
				<a href="#"><h2 class="hvr-bounce-to-right">Packers & Movers</h2></a>
				<p>We are Professional Movers and Packers and understand that moving to a new Home, Villa and Apartment represents a hopeful new start for you and your familyand we are just one step away. Professional Services for Friendly Peoples. We offer you the best & very care full handling services at cost.</p>
				<a href="#" class="readmore hvr-bounce-to-right	">Know More</a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 thm-image-hover single-our-service-mover">
				<div class="img-holder">
					<img src="{{url('/')}}/frontend/img/our-service-mover/2.jpg" alt="">
				</div>
				<a href="#"><h2 class="hvr-bounce-to-right">Home/Office</h2></a>
				<p>For businesses, moving is a costly and difficult process, since it requires moving not just office furniture but also fragile equipment, the business is at a standstill. We understand that you would like to finish the move as quickly as possible so that you can start working again.</p>
				<a href="#" class="readmore hvr-bounce-to-right	">Know More</a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 thm-image-hover single-our-service-mover">
				<div class="img-holder">
					<img src="{{url('/')}}/frontend/img/our-service-mover/3.jpg" alt="">
				</div>
				<a href="#"><h2 class="hvr-bounce-to-right">Storage	services</h2></a>
				<p>RT Movers have Storage facility also because everyone has different storage needs;we have a customized storage system.
					RT Movers & Packers a famous name in moving and shifting as well as in luggage storage services in Dubai. If you are looking for a reliable and affordable service for storage.
					.</p>
				<a href="#" class="readmore hvr-bounce-to-right	">Know More</a>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 thm-image-hover single-our-service-mover">
				<div class="img-holder">
					<img src="{{url('/')}}/frontend/img/our-service-mover/4.jpg" alt="">
				</div>
				<a href="#"><h2 class="hvr-bounce-to-right">Furniture Installation</h2></a>
				<p>RT Mover have fully trained and professional Carpenters and Handymen for installation of all kind of furniture, we also offered to customers for all kind of furniture moving or installation in very affordable and good budget Moving Forward Relocation is equipped for ever commercial move..</p>
				<a href="#" class="readmore hvr-bounce-to-right	">Know More</a>
			</div>
		</div>
	</div>
</section>


<section id="welcome-to-mover">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-12">
				<h2>WELCOME TO RT MOVERS & PACKERS</h2>
				<p>Are you looking for a company that will help you complete your move without any stress, RT Movers LLC is the name that you should trust.: </p>
				<div class="list-box clearfix">
					<ul>
						<li><i class="fa fa-hand-o-right"></i> Flexible & Affordable</li>
						<li><i class="fa fa-hand-o-right"></i> Easy Tracking</li>
					</ul>
					<ul>
						<li><i class="fa fa-hand-o-right"></i> save and secure move</li>
						<li><i class="fa fa-hand-o-right"></i> Delivery on time</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 thm-image-hover">
				<div class="img-holder">
					<img src="{{url('/')}}/frontend/img/welcome-to-mover/1.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="our-process">
	<div class="container">
		<div class="section-title">
			<h1>our process</h1>
		</div>
		<div class="row">
			<div class="col-lg-12 clearfix">
				<div class="single-process">
					<div class="box">
						<i class="flaticon-2440"></i>
						<span>1</span>
					</div>
					<p>Book Our Service</p>
				</div>
				<div class="single-process">
					<div class="box">
						<i class="flaticon-packaging"></i>
						<span>2</span>
					</div>
					<p>We pack things</p>
				</div>
				<div class="single-process">
					<div class="box">
						<i class="flaticon-trolley6"></i>
						<span>3</span>
					</div>
					<p>we move things</p>
				</div>
				<div class="single-process">
					<div class="box">
						<i class="flaticon-stickman87"></i>
						<span>4</span>
					</div>
					<p>we move things</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="blog-mover">
	<div class="container">
		<div class="section-title">
			<h1>Blogs</h1>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thm-image-hover single-blog-post">
				<div class="img-holder">
					<img src="{{url('/')}}/frontend/img/blog-mover/1.png" alt="">
					<div class="date">
						<b>05</b> <br> Aug
					</div>
				</div>
				<a href="#"><h2>My of Blog</h2></a>
				<p>How you move decides the efficiency of your moving system. If you are insufficient of ideas as to how to relocate to a new place in advance, the actual process of moving becomes tougher.</p>
				<ul>
					<li><span><b>By: </b> Anjori Meyami</span></li>
					<li><a href="#">Read More</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thm-image-hover single-blog-post">
				<div class="img-holder">
					<img src="{{url('/')}}/frontend/img/blog-mover/2.png" alt="">
					<div class="date">
						<b>05</b> <br> Aug
					</div>
				</div>
				<a href="#"><h2>Heading of Blog</h2></a>
				<p>How you move decides the efficiency of your moving system. If you are insufficient of ideas as to how to relocate to a new place in advance, the actual process of moving becomes tougher.</p>
				<ul>
					<li><span><b>By: </b> Anjori Meyami</span></li>
					<li><a href="#">Read More</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thm-image-hover single-blog-post">
				<div class="img-holder">
					<img src="{{url('/')}}/frontend/img/blog-mover/3.png" alt="">
					<div class="date">
						<b>05</b> <br> Aug
					</div>
				</div>
				<a href="#"><h2>Heading of Blog</h2></a>
				<p>How you move decides the efficiency of your moving system. If you are insufficient of ideas as to how to relocate to a new place in advance, the actual process of moving becomes tougher.</p>
				<ul>
					<li><span><b>By: </b> Anjori Meyami</span></li>
					<li><a href="#">Read More</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- #clients -->
<section id="clients">
	<div class="container">
		<div class="section-title">
			<h1>our clients</h1>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="owl-carousel owl-theme">
					<div class="item">
						<img src="{{url('/')}}/frontend/img/clients/1.png" alt="">
					</div>
					<div class="item">
						<img src="{{url('/')}}/frontend/img/clients/2.png" alt="">
					</div>
					<div class="item">
						<img src="{{url('/')}}/frontend/img/clients/3.png" alt="">
					</div>
					<div class="item">
						<img src="{{url('/')}}/frontend/img/clients/4.png" alt="">
					</div>
					<div class="item">
						<img src="{{url('/')}}/frontend/img/clients/5.png" alt="">
					</div>
					<div class="item">
						<img src="{{url('/')}}/frontend/img/clients/3.png" alt="">
					</div>
					<div class="item">
						<img src="{{url('/')}}/frontend/img/clients/4.png" alt="">
					</div>
					<div class="item">
						<img src="{{url('/')}}/frontend/img/clients/5.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section> <!-- /#clients -->



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
				<p>RT Movers and Packers LLC is a Registered Company in Dubai, We providing professional and affordable moving and shifting services all over the UAE. We are working since 2010 in UAE and have lot of satisfied customers who used our services. Our trained and professional staff can move any office, apartment, or home in a safe and efficient manner.: </p>
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
<script src="{{url('/')}}/frontend/http://maps.google.com/maps/api/js?sensor=true"></script> <!-- Gmap Helper -->
<script src="{{url('/')}}/frontend/js/gmap.js"></script> <!-- gmap JS -->
<script src="{{url('/')}}/frontend/js/wow.js"></script> <!-- wow JS -->
<script src="{{url('/')}}/frontend/js/isotope.pkgd.min.js"></script> <!-- iSotope JS -->
<script src="{{url('/')}}/frontend/js/owl.carousel.min.js"></script> <!-- OWL Carousle JS -->

<script src="{{url('/')}}/frontend/revolution/js/jquery.themepunch.tools.min.js"></script> <!-- Revolution Slider Tools -->
<script src="{{url('/')}}/frontend/revolution/js/jquery.themepunch.revolution.min.js"></script> <!-- Revolution Slider -->
<script type="text/javascript" src="{{url('/')}}/frontend/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/frontend/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/frontend/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/frontend/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/frontend/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/frontend/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/frontend/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/frontend/revolution/js/extensions/revolution.extension.video.min.js"></script>

<script src="{{url('/')}}/frontend/js/jquery.fancybox.pack.js"></script> <!-- FancyBox -->
<script src="{{url('/')}}/frontend/js/validate.js"></script> <!-- Form Validator JS -->
<script src="{{url('/')}}/frontend/js/jquery.easing.min.js"></script> <!-- jquery easing JS -->
<script src="{{url('/')}}/frontend/js/custom.js"></script> <!-- Custom JS -->

</body>

</html>