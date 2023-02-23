<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
	<div class="container-fluid d-flex align-items-center justify-content-between">

		<a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0" >
			<!-- Uncomment the line below if you also wish to use an image logo -->
			{{-- <h1>HeroBiz<span>.</span></h1> --}}
			<img src="{{asset('bkn/2.png')}}" style="max-height: 40px" alt=""> 
		</a>

		<nav id="navbar" class="navbar">
			<ul>

				<li><a class="nav-link scrollto" href="/">Home</a></li>
				<li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li><a href="/about">Profil Kantor</a></li>
						<li><a href="/profil">Profil Pegawai</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#"><span>Publikasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li><a href="/#recent_blog_posts" class="nav-link scrollto">Berita Kepegawaian</a></li>
						<li><a href="/#services" class="nav-link scrollto">Kopace</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#"><span>Aplikasi Kanreg</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li><a href="https://www.dashboard.bkn14.site">Dashboard Kepegawaian</a></li>
						<li><a href="https://bit.ly/KOPACE">Kopace</a></li>
						<li><a href="#">e-Kasus</a></li>
						<li><a href="#">V-Office</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#"><span>Hubungi Kami</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li><a href="https://www.lapor.go.id/instansi/badan-kepegawaian-negara" target="_blank">Lapor BKN</a></li>
						<li><a href="https://support-siasn.bkn.go.id/" target="_blank">Helpdesk SIASN</a></li>
						<li><a href="/#contact">Kontak</a></li>
					</ul>
				</li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle d-none"></i>
		</nav><!-- .navbar -->

		<a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
			<!-- Uncomment the line below if you also wish to use an image logo -->
			<img src="{{asset('bkn/Logo_BerAKHLAK.png')}}" alt=""> 
			<img src="{{asset('bkn/3.png')}}" style="min-height: 70px; max-height:70px; min-width:70px;max-width:70px"> 
			{{-- <h1>HeroBiz<span>.</span></h1> --}}
		</a>


	</div>
</header><!-- End Header -->