<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
				<meta content="width=device-width, initial-scale=1.0" name="viewport">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> --}}
        <meta name="description" content="" />
				<meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('assets2/css/styles.css')}}" rel="stylesheet" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

				{{-- user asset --}}
				<!-- Favicons -->
				<link href="{{asset('assets/img/favicon.png')}}" rel="icon">
				<link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

				<!-- Google Fonts -->
				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

				<!-- Vendor CSS Files -->
				<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
				<link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
				<link href="{{asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
				<link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
				<link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

				<!-- Variables CSS Files. Uncomment your preferred color scheme -->
				<link href="{{asset('assets/css/variables.css')}}" rel="stylesheet">

				<!-- Template Main CSS File -->
				<link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

				@vite(['resources/css/app.css', 'resources/js/app.js'])
				@inertiaHead
    </head>
    <body>
			
            
					@inertia()
            

					<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

					<div id="preloader"></div>
				{{-- user script --}}
				<!-- Vendor JS Files -->
				<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
				<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
				<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
				<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
				<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
				<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

				<!-- Template Main JS File -->
				<script src="{{asset('assets/js/main.js')}}"></script>
				
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets2/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('assets2/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
