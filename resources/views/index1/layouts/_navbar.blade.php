<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
	<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

		<a href="index.html" class="logo d-flex align-items-center">
			<!-- Uncomment the line below if you also wish to use an image logo -->
			<!-- <img src="assets/img/logo.png" alt=""> -->
			<img src="{{asset('bkn/kanreg_hitam.png')}}" alt="" style="min-height: 100px; max-height:100px; min-width:170px;max-width:170px">
			{{-- <h1>BKN XIV MANOKWARI</h1> --}}
		</a>

		<nav id="navbar" class="navbar">
			<ul>
				<li><a href="/">Beranda</a></li>
				<li class="dropdown"><a href="category.html"><span>Profil</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li><a href="search-result.html">Sejarah</a></li>
						<li><a href="search-result.html">Struktur Organisasi</a></li>
					</ul>
				</li>
				<li><a href="single-post.html">Single Post</a></li>

				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav><!-- .navbar -->

		<div class="position-relative">
			{{-- <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
			<a href="#" class="mx-2"><span class="bi-twitter"></span></a> --}}
			{{-- <a href="#" class="mx-2"><span class="bi-instagram"></span></a> --}}
		{{-- <img src="{{asset('bkn/Logo_BerAKHLAK.png')}}" alt="">  --}}


			<a href="#" class="mx-2 js-search-open logo">
				<img src="{{asset('bkn/Logo_BerAKHLAK.png')}}" alt="">  
			</a>
			<i class="bi bi-list mobile-nav-toggle"></i>

			<!-- ======= Search Form ======= -->
			<div class="search-form-wrap js-search-form-wrap">
				<form action="search-result.html" class="search-form">
					<span class="icon bi-search"></span>
					<input type="text" placeholder="Search" class="form-control">
					<button class="btn js-search-close"><span class="bi-x"></span></button>
				</form>
			</div><!-- End Search Form -->

		</div>

	</div>

</header>
<!-- End Header -->