@extends('layout.layout')

@section('content')
		@include('components.hero')

		@include('components.clients')

		@include('components.cta')

		@include('components.feature')

		@include('components.services')

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
				<div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
					<div class="post-box">
						<div class="post-img"><img src="{{$item->thumbnail}}" class="img-fluid" alt="" height="120px"></div>
						<div class="meta">
							<span class="post-date">Tue, December 12</span>
							<span class="post-author"> / Julia Parker</span>
						</div>
						<h3 class="post-title"> {{$item->title}} </h3>
						<p>{{$item->excerpt}}</p>
						<a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			@endforeach

		</div>

	</div>

</section><!-- End Recent Blog Posts Section -->
@endsection

@section('footer')
@include('components.contact')
		
@endsection