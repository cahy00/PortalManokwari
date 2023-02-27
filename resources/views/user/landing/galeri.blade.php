@extends('layout.layout')

<div class="breadcrumbs">
	<div class="container">
		<br>
		<div class="d-flex justify-content-between align-items-center">
			<h2>Berita Kepegawaian</h2>
			<ol>
				<li><a href="/">Home</a></li>
				<li>Berita Kepegawaian</li>
			</ol>
		</div>

	</div>
</div>

@section('content')
<section id="portfolio" class="portfolio" data-aos="fade-up">

    <div class="container">

    <div class="section-header">
        <h2>Galeri Kegiatan</h2>

    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

    <ul class="portfolio-flters">
        <li data-filter="*" class="filter-active">All</li>
    </ul><!-- End Portfolio Filters -->

    <div class="row g-0 portfolio-container">

        @foreach ($post as $item)
        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{$item->thumbnail}}" class="img-fluid" alt="" style="min-height: 320px; max-height:320px; min-width:350px;max-width:350px">
        <div class="portfolio-info">
            <h4>App 1</h4>
            <a href="assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="{{route('blog.show', $item->id)}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
        </div>
            
        @endforeach



    </div><!-- End Portfolio Container -->

    </div>

    </div>
</section>
@endsection