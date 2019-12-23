<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>arbustore | @yield('title')</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/assets/img/brand/favicon.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/assets-front/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/assets-front/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets-front/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="/assets-front/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="/assets-front/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="/assets-front/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/assets-front/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/assets-front/vendor/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" href="/assets-front/vendor/bootstrap-star-rating/css/star-rating.min.css">
		<link rel="stylesheet" href="/assets-front/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/assets-front/css/theme.css">
		<link rel="stylesheet" href="/assets-front/css/theme-elements.css">
		<link rel="stylesheet" href="/assets-front/css/theme-blog.css">
		<link rel="stylesheet" href="/assets-front/css/theme-shop.css">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="/assets-front/css/skins/default.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/assets-front/css/custom.css">

		<!-- Head Libs -->
		<script src="/assets-front/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
				<div class="header-body border-color-primary border-bottom-0 box-shadow-none" data-sticky-header-style="{'minResolution': 0}" data-sticky-header-style-active="{'background-color': '#f7f7f7'}" data-sticky-header-style-deactive="{'background-color': '#FFF'}">
					{{-- begin:top-header --}}
					<div class="header-top header-top-borders">
						<div class="container h-100">
							<div class="header-row h-100">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item nav-item-borders py-2">
													<span class="pl-0"><i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i> 1234 Street Name, City Name</span>
												</li>
												<li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
													<a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> 123-456-7890</a>
												</li>
												<li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
													<a href="mailto:mail@domain.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> mail@domain.com</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
												</li>
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
												</li>
												<li class="nav-item dropdown nav-item-left-border d-none d-sm-block">
													<a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<img src="/assets-front/img/blank.gif" class="flag flag-us" alt="English" /> English
														<i class="fas fa-angle-down"></i>
													</a>
													<div class="dropdown-menu" aria-labelledby="dropdownLanguage">
														<a class="dropdown-item" href="#"><img src="/assets-front/img/blank.gif" class="flag flag-us" alt="English" /> English</a>
														<a class="dropdown-item" href="#"><img src="/assets-front/img/blank.gif" class="flag flag-es" alt="English" /> Español</a>
														<a class="dropdown-item" href="#"><img src="/assets-front/img/blank.gif" class="flag flag-fr" alt="English" /> Française</a>
													</div>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{-- end:top-header --}}

					{{-- begin:header --}}
					<div class="header-container container">
						@include('front.inc.header')
					</div>
					{{-- end:header --}}

					{{-- begin:menu-bar --}}
					<div class="container">
						@include('front.inc.menu-bar')
					</div>
					{{-- end:menu-bar --}}
				</div>
			</header>
			{{-- begin:content --}}
			<div role="main" class="main shop py-4">

				<div class="container">

					@yield('content')

				</div>

			</div>
			{{-- end:content --}}

			{{-- begin:footer --}}
			<footer id="footer">
				@include('front.inc.footer')
			</footer>
			{{-- end:footer --}}

		</div>

		<!-- Vendor -->
		<script src="/assets-front/vendor/jquery/jquery.min.js"></script>
		<script src="/assets-front/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/assets-front/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/assets-front/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="/assets-front/vendor/popper/umd/popper.min.js"></script>
		<script src="/assets-front/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/assets-front/vendor/common/common.min.js"></script>
		<script src="/assets-front/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="/assets-front/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="/assets-front/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/assets-front/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/assets-front/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/assets-front/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/assets-front/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/assets-front/vendor/vide/jquery.vide.min.js"></script>
		<script src="/assets-front/vendor/vivus/vivus.min.js"></script>
		<script src="/assets-front/vendor/bootstrap-star-rating/js/star-rating.min.js"></script>
		<script src="/assets-front/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/assets-front/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="/assets-front/js/views/view.shop.js"></script>
		
		<!-- Theme Custom -->
		<script src="/assets-front/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/assets-front/js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
