<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="welcome" class="logo"><strong>CtrlDrive Auto Escapes</strong> <span>Website</span></a>
					<nav>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li> <a href="welcome">Home </a> </li>

		            

		                <li> <a href="Offers">Offers</a> </li>

		                <li> <a href="AboutUs">About Us</a> </li>

		               

		                <li><a href="ContactUs">Contact Us</a></li>

		                <li class="dropdown active">
		                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
		                    
		                    <ul class="dropdown-menu">
		                        <li><a href="Team">Team</a></li>
				                <li><a href="Testimonials">Testimonials</a></li>
				                <li><a href="Faqs">FAQ</a></li>
				                <li class="active"><a href="Terms">Terms</a></li>
		                    </ul>
		                </li>
            		</ul>
				</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<section id="one">
							<div class="inner">
								<header class="major">
									<h1>Terms</h1>
								</header>

								<h4>Driver's License and Age Requirements:</h4>
								
								<p>The renter must present a valid driver's license held for at least [Minimum Driving Experience] years. The minimum rental age is [Minimum Age] years, and additional fees may apply for drivers under [Minimum Age + Additional Fee Age] years.</p>

								<br>

								<h4>Reservation and Payment:</h4>
								<p>Full payment for the rental period is due upon vehicle pickup.

								</p>
								
								<br>

								<h4>  Rental Duration:</h4>
								<p>The rental duration is calculated on a 24-hour basis from the agreed pickup time. Late returns may incur additional charges. Extensions can be requested in advance and are subject to availability.</p>
								
								<br>

								<h4> Fuel and Mileage</h4>
								<p>Vehicles are provided with a full tank of fuel and should be returned in the same condition. Most rentals include unlimited mileage, but some special rates may have mileage limits. Please inquire when booking.</p>
									
								<br>

								<h4>  Insurance and Liability:</h4>
								<p>All vehicles are covered by basic liability insurance. Additional insurance options are available for purchase. The renter is responsible for any damage, loss, or theft up to the deductible amount.</p>

								
							</div>
						</section>
						
					</div>

				<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="icons">
							<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						</ul>
						<ul class="copyright">
							<li>Copyright © 2023 CtrlDrive Auto Escapes</li>
							<li> <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
						</ul>
					</div>
				</footer>

			</div>

		<!-- Scripts -->
			<script src="{{asset('/js/jquery.min.js')}}"></script>
			<script src="{{asset('/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
			<script src="{{asset('/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('/js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('/js/browser.min.js')}}"></script>
			<script src="{{asset('/js/breakpoints.min.js')}}"></script>
			<script src="{{asset('/js/util.js')}}"></script>
			<script src="{{asset('/js/main.js')}}"></script>
	</body>
</html>