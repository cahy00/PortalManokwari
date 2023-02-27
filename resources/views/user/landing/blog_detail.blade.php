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
</div><!-- End Breadcrumbs -->
@section('content-blog')
		
    <!-- ======= Breadcrumbs ======= -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img" style="border-radius:10px">
                <img src="../../{{$post->thumbnail}}" alt="Gambar tidak muncul" class="img-fluid" style="min-height: auto; max-height:auto; min-width:100%;max-width:100%">
              </div>

              <h2 class="title">{{$post->title}}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$post->user->name}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$post->created_at->format('F d, Y')}}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                {!!$post->body!!}
              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">{{$post->category->title}}</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

            <div class="post-author d-flex align-items-center">
              <img src="{{asset('assets/img/blog/blog-author.jpg')}}" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4>Bidang Umum dan Humas Kanreg XIV</h4>
                <div class="social-links">
                  {{-- <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a> --}}
                </div>
                <p>
									Semua media yang ada di dokumen ini sudah di filter atas dasar hukum dan tata krama dalam bermedia sosial. Kami berharap dapat memperoleh masukan dalam meningkatkan informasi kami melalui Portal Website ini
                </p>
              </div>
            </div><!-- End post author -->

            <div class="comments">
              <div class="reply-form">
  
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form action="">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*" disabled>
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email*" disabled>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input name="website" type="text" class="form-control" placeholder="Your Website" disabled>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*" disabled></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>
  
                </form>
  
              </div>
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
									@foreach ($allcategory as $item)
										<li><a href="#">{{$item->title}}</a></li>
									@endforeach
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">

									@foreach ($allpost as $allpost)
                  <div class="post-item mt-3">
                    <img src="../../{{$allpost->thumbnail}}" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">{{$allpost->title}}</a></h4>
                      <time datetime="2020-01-01">{{$allpost->created_at->format('F d, Y')}}</time>
                    </div>
                  </div>
									@endforeach
									<!-- End recent post item-->

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
    </section><!-- End Blog Details Section -->
@endsection