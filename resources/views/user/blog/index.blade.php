@extends('layout.layout')

{{-- @section('head')
	<meta
  http-equiv="Content-Security-Policy"
  content="upgrade-insecure-requests" />
		
@endsection --}}

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
@section('content-blog')
<section id="blog" class="blog">
	<div class="container" data-aos="fade-up">

		<div class="row g-5">

			<div class="col-lg-8">

				<div class="row gy-4 posts-list">
					@foreach ($allpost as $item)
							
					<div class="col-lg-6">
						<article class="d-flex flex-column">

							<div class="post-img">
								<img src="{{$item->thumbnail}}" alt="" class="img-fluid" style="min-height: 320px; max-height:320px; min-width:120%;max-width:120%">
							</div>

							<h2 class="title">
								<a href="{{route('blog.show', [$hash->encodeHex($item->id)])}}">{{$item->title}}</a>
							</h2>

							<div class="meta-top">
								<ul>
									<li class="d-flex align-items-center"><i class="bi bi-person"></i> <a >{{$item->user->name}}</a></li>
									<li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time datetime="2022-01-01">{{$item->created_at->format('F d, Y')}}</time></a></li>
									{{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> --}}
								</ul>
							</div>

							<div class="content">
								<p>
									{{$item->excerpt}}
								</p>
							</div>

							<div class="read-more mt-auto align-self-end">
								<a href="{{route('blog.show', [$hash->encodeHex($item->id)])}}">Read More</a>
							</div>

						</article>
					</div>

					@endforeach
					<!-- End post list item -->

				</div>

					<div class="blog-pagination">
						<ul class="justify-content-center">
							<li><a href="#">1</a></li>
						</ul>
					</div>
					
			</div>

			<div class="col-lg-4">

				<div class="sidebar">

					<div class="sidebar-item search-form">
						<img src="{{asset('bkn/2.png')}}" alt="" class="img-fluid">
						<h3 class="sidebar-title">Search</h3>
						<form action="" class="mt-3">
							<input type="text">
							<button type="submit"><i class="bi bi-search"></i></button>
						</form>
					</div><!-- End sidebar search formn-->

					<div class="sidebar-item categories">
						<h3 class="sidebar-title">Categories</h3>
						<ul class="mt-3">
							@foreach ($category as $category)
							<li><a href="#">{{$category->title}}</a></li>
							@endforeach
							
						</ul>
					</div><!-- End sidebar categories-->

					<div class="sidebar-item recent-posts">
						<h3 class="sidebar-title">Artikel Kepegawaian</h3>

						<div class="mt-3">

							@foreach ($articel as $articel)
									
							<div class="post-item mt-3">
								<img src="{{$articel->thumbnail}}" alt="" class="flex-shrink-0">
								<div>
									<h4><a href="blog-post.html">{{$articel->title}}</a></h4>
									<time datetime="2020-01-01">{{$articel->created_at->format('F d, Y')}}</time>
								</div>
							</div><!-- End recent post item-->
							
							@endforeach
						</div>

					</div><!-- End sidebar recent posts-->

					<div class="sidebar-item tags">
						<h3 class="sidebar-title">Tags</h3>
						<ul class="mt-3">
							<li><a href="#">ASNkinibeda</a></li>
							<li><a href="#">ASNPelayanPublik</a></li>
							<li><a href="#">PPPK2023</a></li>
							<li><a href="#">AgenPerubahan</a></li>
							<li><a href="#">Sekdin2022</a></li>
							<li><a href="#">ReformasiBKN</a></li>
							<li><a href="#">SatuDataASN</a></li>
							<li><a href="#">ASNBelajarMandiri</a></li>
						</ul>
					</div><!-- End sidebar tags-->

				</div><!-- End Blog Sidebar -->

			</div>

		</div>

	</div>
</section>
@endsection