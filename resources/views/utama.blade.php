<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tekku | Layanan Penyedia Jasa</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Slick slider -->
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <!-- Skills Circle CSS  -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">


    <!-- Main Style -->
    <link href="{{asset('css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Google Fonts Raleway -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
	<!-- Google Fonts Open sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">


	</head>
  <body>

   <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  	<!-- Start Header -->
	@include('layouts.navbar')
	<!-- End Header -->

	<!-- Start slider area -->
	<div id="mu-slider">
		<div class="mu-slide">
			@include('home.slider')
		</div>
	</div>
	<!-- End Slider area -->


	<!-- Start main content -->
	<main>
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				@include('home.about')
			</div>
		</section>
		<!-- End About -->

		<!-- Call to Action -->
		<div id="mu-call-to-action">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-call-to-action-area">
							<div class="mu-call-to-action-left">
								<h2>This is a simple hero unit, a simple jumbotron-style</h2>
								<p>component for calling extra attention to featured content or information.</p>
							</div>
							<a href="#" class="mu-primary-btn mu-quote-btn">Get a Quote <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Start Services -->
		<section id="mu-service">
			<div class="container">
				@include('home.service')
			</div>
		</section>
		<!-- End Services -->

		<!-- Start Video -->
		<div id="mu-video">
			<div class="row">
				<div class="col-md-6">
					<div class="mu-video-left">
						<a href="#" class="mu-video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mu-video-right">
						<p>In this video from our "Talking business" series, our expert discusses the role a business plan can play in the success of your business.</p>
					</div>
				</div>
			</div>

			<!-- Start Video Popup -->
			<div class="mu-video-popup">
				<div class="mu-video-iframe-area">
					<a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
					<iframe width="854" height="480" src="https://www.youtube.com/embed/n9AVEl9764s" allowfullscreen></iframe>
				</div>
			</div>
			<!-- End Video Popup -->

		</div>
		<!-- End Video -->

		<!-- Start Project/Portfolio -->
		<section id="mu-portfolio">
			<div class="container">
				@include('home.project')
			</div>
		</section>
		<!-- End Project/Portfolio -->

		<!-- Start Counter -->
		<section id="mu-counter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-counter-area">

							<div class="mu-counter-block">
								<div class="row">

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<span class="fa fa-suitcase"></span>
											<div class="mu-single-counter-content">
												<div class="counter-value" data-count="250">0</div>
												<h5 class="mu-counter-name">Project</h5>
											</div>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<span class="fa fa-user"></span>
											<div class="mu-single-counter-content">
												<div class="counter-value" data-count="56">0</div>
												<h5 class="mu-counter-name">Clients</h5>
											</div>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<span class="fa fa-coffee"></span>
											<div class="mu-single-counter-content">
												<div class="counter-value" data-count="15">0</div>
												<h5 class="mu-counter-name">Stuff</h5>
											</div>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<span class="fa fa-clock-o"></span>
											<div class="mu-single-counter-content">
												<div class="counter-value" data-count="290">0</div>
												<h5 class="mu-counter-name">Day</h5>
											</div>
										</div>
									</div>
									<!-- / Single Counter -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter -->

		<!-- Start Pricing Table -->
		<section id="mu-pricing">
			<div class="container">
				@include('home.paket')
			</div>
		</section>
		<!-- End Pricing Table -->

		<!-- Start Client Testimonials -->
		<section id="mu-testimonials">
			<div class="container">
				@include('home.testimoni')
			</div>
		</section>
		<!-- End Client Testimonials -->

		<!-- Start from blog -->
		<section id="mu-from-blog">
			<div class="container">
				@include('home.blog')
			</div>
		</section>
		<!-- End from blog -->

		<!-- Start Newsletter -->
		<section id="mu-newsletter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-newsletter-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Subscribe Our newsletter</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mu-newsletter-content">
										<form class="mu-subscribe-form">
											<input type="email" placeholder="Write your e-mail here">
											<button class="mu-subscribe-btn">Subscribe</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Newsletter -->

		<!-- Start Clients -->
		<div id="mu-clients">
			<div class="container">
				@include('home.client')
			</div>
		</div>
		<!-- End Clients -->

	</main>

	<!-- End main content -->


	<!-- Start footer -->
	@include('layouts.footer')
	<!-- End footer -->


	<!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
    <!-- Progress Bar -->
    <script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="{{asset('js/jquery.filterizr.min.js')}}"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="{{asset('js/counter.js')}}"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>


    <!-- Custom js -->
	<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

	<!-- About us Skills Circle progress  -->
	<script>
		// First circle
	    new Circlebar({
        element : "#circle-1",
        type : "progress",
	      maxValue:  "90"
	    });

		// Second circle
	    new Circlebar({
        element : "#circle-2",
        type : "progress",
	      maxValue:  "84"
	    });

	    // Third circle
	    new Circlebar({
        element : "#circle-3",
        type : "progress",
	      maxValue:  "60"
	    });

	    // Fourth circle
	    new Circlebar({
        element : "#circle-4",
        type : "progress",
	      maxValue:  "74"
	    });

	</script>

  </body>
</html>
