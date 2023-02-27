@extends('layout.layout')

@section('content-hero')
<section id="hero">
	<div id="heroCarousel" data-bs-interval="1000" class="carousel slide carousel-fade" data-bs-ride="carousel">

		<div class="carousel-inner" role="listbox">

			<!-- Slide 1 -->
			<div class="carousel-item active" style="background-image: url(bkn/ba.png);" class="img-fluid">
				<div class="carousel-container">
					
				</div>
			</div>

			@foreach ($hero as $hero)
			<div class="carousel-item" style="background-image: url({{asset($hero->picture)}});" class="img-fluid">
				
			</div>
			@endforeach
			<!-- Slide 3 -->
			<div class="carousel-item" style="background-image: url(bkn/MOTTO.jpg);" class="img-fluid">
				{{-- <div class="carousel-container">
					<div class="carousel-content">
						<h2>Welcome to <span>Company</span></h2>
						<p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
						<div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
					</div>
				</div> --}}
			</div>

		</div>

		<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
			<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
		</a>

		<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
			<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
		</a>
		
	</div>
</section>
@endsection

@section('content')

		@include('components.clients')

@endsection
		
@section('content-cta')
<section id="cta" class="cta">
	<div class="container" data-aos="zoom-out">

		<div class="section-header">
			<h2><b>Berita Utama</b></h2>
			<h3>Professional & Berintegritas Bangga Melayani Untuk Negeri</h3>
		</div>

		<div class="row g-5">

			@foreach ($headline as $headline)
				

			<div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
				<h3>{{$headline->title}}</h3>
				<p>{{$headline->excerpt}}</p>
				<a class="cta-btn align-self-start" href="{{route('blog.show', $headline->id)}}">Selengkapnya</a>
			</div>

			<div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
				<div class="img">
					<img src="{{$headline->thumbnail}}" alt="" class="img-fluid" style="min-height: 320px; max-height:320px; min-width:340px;max-width:340px">
				</div>
			</div>

			@endforeach


		</div>

	</div>
</section>
@endsection

@section('content-feature')
	@include('components.feature')
@endsection

@section('content-service')
		<!-- ======= Services Section ======= -->
<section id="services" class="services">
<div class="container" data-aos="fade-up">

<div class="section-header">
	<h2>Artikel Kepegawaian</h2>
	<p>Kami siap melayani dengan sepenuh hati</p>
</div>

<div class="row gy-5">

@foreach ($artikel as $artikel)
	@if ($artikel->category_id == 2)
		<div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
			<div class="service-item">
				<div class="img" style="overflow: hidden">
					<img src="{{$artikel->thumbnail}}" class="img-fluid" style="min-height: 316px; max-height:316px; min-width:420px;max-width:420px">
				</div>
				
				<div class="details position-relative">
					<div class="icon">
						<i class="bi bi-broadcast"></i>
					</div>
					<a href="{{route('blog.show', $artikel->id)}}" class="stretched-link">
						<h3>{{$artikel->title}}</h3>
						<p>{{$artikel->excerpt}}</p>
					</a>
				</div>
			</div>
		</div>
	@endif
@endforeach

</div>

</div>
</section><!-- End Services Section -->
@endsection

@section('content-blog')
		<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

	<div class="container" data-aos="fade-up">

		<div class="section-header">
			<h2>Publikasi BKN</h2>
			<p>Media sarana publikasi dan informasi dari Badan Kepegawaian Negara Republik Indonesia</p>
		</div>

		<div class="row">

			@foreach ($post as $item)
				@if ($item->is_headline == false)
					<div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
						<div class="post-box">
							<div class="post-img">
								<img src="{{$item->thumbnail}}" class="img-fluid" alt="" style="min-height: 320px; max-height:320px; min-width:420px;max-width:420px">
							</div>
							<div class="meta">
								<span class="post-date">{{$item->created_at->format('F d, Y')}}</span>
								<span class="post-author"> / {{$item->user->name}}</span>
							</div>
							<h3 class="post-title"> <a href=""></a> {{$item->title}} </h3>
							<p>{{$item->excerpt}}</p>
							<a href="{{route('blog.show', $item->id)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				@endif
			@endforeach

		</div>

	</div>

@section('content-survey')
<section id="onfocus" class="onfocus">
	<div class="container-fluid p-0" data-aos="fade-up">

		<div class="section-header">
			<h2>Survey Pelayanan</h2>
			<p>Bantu kami untuk menjadi lebih baik lagi melalui Layanan Informasi Website BKN Kanreg XIV</p>
		</div>

		<div class="row g-0">
			<div class="col-lg-6 video-play position-relative">
				{{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> --}}
			</div>
			<div class="col-lg-6">
				<div class="content d-flex flex-column justify-content-center h-100">
					<h3>Survey Pelayanan <span style="color:aqua">Layanan Informasi Website BKN Kanreg XIV</span></h3>
					<blockquote>
					<p class="fst-italic">
						"Kami berharap dapat memperoleh masukan dalam meningkatkan pelayanan informasi kami melalui website ini"
					</p>
				</blockquote>
				<p>
					Anda dapat memberikan survei pelayanan kami melalui formulir dengan klik tombol di bawah ini
				</p>
					<a href="#" class="read-more align-self-start"><span>Isi Formulir Survey</span><i class="bi bi-arrow-right"></i></a>
				</div>
			</div>
		</div>

	</div>
</section>
@endsection

</section><!-- End Recent Blog Posts Section -->
@endsection

@section('footer')
@include('components.contact')
		
@endsection