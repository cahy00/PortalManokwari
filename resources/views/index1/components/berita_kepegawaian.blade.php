@extends('index1.layouts._layouts')

@section('berita_kepegawaian')
<section class="category-section">
	<div class="container" data-aos="fade-up">

		<div class="section-header d-flex justify-content-between align-items-center mb-5">
			<h2>Berita Kepegawaian</h2>
			<div><a href="category.html" class="more">Berita Terkini</a></div>
		</div>

		<div class="row">
			<div class="col-md-9">

				<div class="d-lg-flex post-entry-2">
					<a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
						<img src="{{asset('bkn/sample.jpg')}}" style="min-height: 350px; max-height:350px; min-width:610px;max-width:610px" alt="" class="img-fluid">
					</a>
					<div>
						<div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
						<h3><a href="single-post.html">What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</a></h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
						<div class="d-flex align-items-center author">
							<div class="photo"><img src="assets/img/person-2.jpg" alt="" class="img-fluid"></div>
							<div class="name">
								<h3 class="m-0 p-0">Wade Warren</h3>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="post-entry-1 border-bottom">
							<a href="single-post.html"><img src="{{asset('bkn/sample.jpg')}}" style="min-height: 215px; max-height:215px; min-width:300px;max-width:300px" alt="" class="img-fluid"></a>
							<div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
							<h2 class="mb-2"><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
							<span class="author mb-3 d-block">Jenny Wilson</span>
							<p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
						</div>

						<div class="post-entry-1">
							<div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
							<h2 class="mb-2"><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
							<span class="author mb-3 d-block">Jenny Wilson</span>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="post-entry-1">
							<a href="single-post.html"><img src="{{asset('bkn/1.jpg')}}" style="min-height: 350px; max-height:350px; min-width:610px;max-width:610px" alt="" class="img-fluid"></a>
							<div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
							<h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
							<span class="author mb-3 d-block">Jenny Wilson</span>
							<p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				@foreach ($post as $item)
						
				<div class="post-entry-1 border-bottom">
					<div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
					<h2 class="mb-2"><a href="single-post.html">{{$item->title}}</a></h2>
					<span class="author mb-3 d-block">Jenny Wilson</span>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
		
@endsection
