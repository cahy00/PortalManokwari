@extends('layout.layout')

@section('content')
<section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
	<div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
		<h2>e - <span>Kasus</span></h2>
		<p>Berisi Kasus-kasus yang ada didalam KOPACE	</p>
		<div class="faq-search-wrap">
			<div class="container">
				<h1 class="display-5 text-white mb-30">
					Ask a question or browse by category below.
				</h1>
				<div class="form-group w-100 mb-">
					<div class="input-group">
						<input
							class="form-control form-control-lg filled-input bg-white"
							placeholder="Search by keywords"
							type="text"
						/>
						<div class="input-group-append">
							<span class="input-group-text"
								><span class="feather-icon"
									><svg
										xmlns="http://www.w3.org/2000/svg"
										width="24"
										height="24"
										viewBox="0 0 24 24"
										fill="none"
										stroke="currentColor"
										stroke-width="2"
										stroke-linecap="round"
										stroke-linejoin="round"
										class="feather feather-arrow-right"
									>
										<line x1="5" y1="12" x2="19" y2="12"></line>
										<polyline
											points="12 5 19 12 12 19"
										></polyline></svg></span
							></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="featured-services" class="featured-services">
	<div class="container">

		<div class="row gy-4">

			<div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
				<div class="service-item position-relative">
					<div class="icon"><i class="bi bi-activity icon"></i></div>
					<h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
					<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
				</div>
			</div><!-- End Service Item -->

			<div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
				<div class="service-item position-relative">
					<div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
					<h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
				</div>
			</div><!-- End Service Item -->

			<div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
				<div class="service-item position-relative">
					<div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
					<h4><a href="" class="stretched-link">Magni Dolores</a></h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
				</div>
			</div><!-- End Service Item -->

			<div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
				<div class="service-item position-relative">
					<div class="icon"><i class="bi bi-broadcast icon"></i></div>
					<h4><a href="" class="stretched-link">Nemo Enim</a></h4>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
				</div>
			</div><!-- End Service Item -->

		</div>

	</div>
</section>

{{-- <h2>Badan Kepegawaian <span>Negara</span></h2>
<p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p> --}}

@endsection
