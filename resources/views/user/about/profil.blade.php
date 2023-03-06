@extends('layout.layout')

<div class="breadcrumbs">
	<div class="container">
		<br>
		<div class="d-flex justify-content-between align-item-center">
			<h2>Profil Pegawai</h2>
			<ol>
				<li> <a href="/">Home </a></li>
				<li>Profil Pegawai</li>
			</ol>
		</div>
	</div>
</div>

@section('content')
<section id="team" class="team">
	<div class="container" data-aos="fade-up">

		<div class="section-header">
			<h2>Profil Pejabat</h2>
			<p>Mengenal lebih dekat Profil Pejabat Pimpinan Kantor Regional XIV Manokwari</p>
		</div>

		<div class="testimonials-slider swiper">
			<div class="swiper-wrapper">
				
					<div class="swiper-slide">
						<div class="testimonial-item">
							<div class="row">
								<div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
									<div class="team-member">
										<div class="member-img">
											<img src="{{asset('bkn/diana.jpg')}}" class="img-fluid" alt="" style="min-height: auto; max-height:auto; min-width:420px;max-width:420px">
										</div>
										<div class="member-info">
											{{-- <div class="social">
												<a href=""><i class="bi bi-twitter"></i></a>
												<a href=""><i class="bi bi-facebook"></i></a>
												<a href=""><i class="bi bi-instagram"></i></a>
												<a href=""><i class="bi bi-linkedin"></i></a>
											</div> --}}
											<h4>Hardianawati,S.E</h4>
											<span>Kepala Kantor Regional XIV</span>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
									<div class="team-member">
										<div class="member-img">
											<img src="{{asset('bkn/matan3.png')}}" class="img-fluid" alt="" style="min-height: 445px; max-height:445px; min-width:410px;max-width:410px">
										</div>
										<div class="member-info">
											<div class="social">
												<a href=""><i class="bi bi-twitter"></i></a>
												<a href=""><i class="bi bi-facebook"></i></a>
												<a href=""><i class="bi bi-instagram"></i></a>
												<a href=""><i class="bi bi-linkedin"></i></a>
											</div>
											<h4>Matan Yosafat Refasi</h4>
											<span>Kepala Bidang Informasi Kepegawaian</span>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
									<div class="team-member">
										<div class="member-img">
											<img src="assets/img/team/team-1.jpg" class="img-fluid" alt="" style="min-height: 445px; max-height:445px; min-width:410px;max-width:410px">
										</div>
										<div class="member-info">
											<div class="social">
												<a href=""><i class="bi bi-twitter"></i></a>
												<a href=""><i class="bi bi-facebook"></i></a>
												<a href=""><i class="bi bi-instagram"></i></a>
												<a href=""><i class="bi bi-linkedin"></i></a>
											</div>
											<h4>Bayu Nugroho</h4>
											<span>Direktur Pengawasan dan Pengendalian IV</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper-slide">
						<div class="testimonial-item">
							<div class="row">
								<div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
									<div class="team-member">
										<div class="member-img">
											<img src="{{asset('bkn/dian.jpg')}}" class="img-fluid" alt="" style="min-height: 445px; max-height:445px; min-width:410px;max-width:410px">
										</div>
										<div class="member-info">
											<div class="social">
												<a href=""><i class="bi bi-twitter"></i></a>
												<a href=""><i class="bi bi-facebook"></i></a>
												<a href=""><i class="bi bi-instagram"></i></a>
												<a href=""><i class="bi bi-linkedin"></i></a>
											</div>
											<h4>Dr.Dian Violora Nainggolan</h4>
											<span>Kepala Kantor Regional VI Medan</span>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
									<div class="team-member">
										<div class="member-img">
											<img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
										</div>
										<div class="member-info">
											<div class="social">
												<a href=""><i class="bi bi-twitter"></i></a>
												<a href=""><i class="bi bi-facebook"></i></a>
												<a href=""><i class="bi bi-instagram"></i></a>
												<a href=""><i class="bi bi-linkedin"></i></a>
											</div>
											<h4>Walter White</h4>
											<span>Chief Executive Officer</span>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
									<div class="team-member">
										<div class="member-img">
											<img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
										</div>
										<div class="member-info">
											<div class="social">
												<a href=""><i class="bi bi-twitter"></i></a>
												<a href=""><i class="bi bi-facebook"></i></a>
												<a href=""><i class="bi bi-instagram"></i></a>
												<a href=""><i class="bi bi-linkedin"></i></a>
											</div>
											<h4>Walter White</h4>
											<span>Chief Executive Officer</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

			</div>
			<div class="swiper-pagination"></div>
		</div>

	</div>
</section>
@endsection
