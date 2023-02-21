@extends('layout.layout')

@section('content')
		@include('components.hero')

		@include('components.clients')

		@include('components.cta')

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
										<a href="#" class="stretched-link">
											<h3>{{$artikel->title}}</h3>
										</a>
										<p>{{$artikel->excerpt}}</p>
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
				@if ($item->category_id == 1)
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

</section><!-- End Recent Blog Posts Section -->
@endsection

@section('footer')
@include('components.contact')
		
@endsection