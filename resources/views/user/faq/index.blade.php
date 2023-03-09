@extends('layout.layout')

<div class="breadcrumbs">
	<div class="container">
		<br>
		<div class="d-flex justify-content-between align-items-center">
			<h2>Pertanyaan - Pertanyaan</h2>
			<ol>
				<li><a href="/">Home</a></li>
				<li>FaQ</li>
			</ol>
		</div>

	</div>
</div>
@section('content')
<section id="faq" class="faq">
	<div class="container-fluid" data-aos="fade-up">

		<div class="row gy-4">

			<div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

				<div class="content px-xl-5">
					<h3>Frequently Asked <strong>Questions</strong></h3>
					<p>
						Pertanyaan-pertanyaan yang sering ditanyakan akan muncul dibawah sini, pertanyaan diambil dari KOPACE
					</p>
				</div>

				<div class="accordion accordion-flush px-xl-5" id="faqlist">

					<div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
								<i class="bi bi-question-circle question-icon"></i>
								Apa itu kenaikan pangkat Reguler?
							</button>
						</h3>
						<div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
							<div class="accordion-body">
								Kenaikan Pangkat adalah penghargaan bagi PNS yang tidak menduduki jabatan Fungsional Tertentu atau jabatan Struktural. Kenaikan pangkat menjadi salah satu layanan dari Bidang Mutasi dan Status Kepegawaian. Bidang Mutasi dan Status Kepegawaian akan memberikan persetujuan atas usulan kenaikan pangkat PNS yang diajukan oleh instansi pusat maupun instansi daerah. Kantor Regional I BKN melayani kenaikan pangkat mulai golongan ruang I/b sampai dengan IV/b. Kenaikan pangkat golongan IV/b ke atas dilayani di BKN Pusat.
							</div>
						</div>
					</div><!-- # Faq item-->

					<div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
								<i class="bi bi-question-circle question-icon"></i>
								Apa saja syarat-syarat untuk bisa naik pangkat Reguler?
							</button>
						</h3>
						<div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
							<div class="accordion-body">
								Tidak melampaui pangkat atasan langsungnya,
								Sekurang-kurangnya telah 4 (empat) tahun dalam pangkat terakhir,
								Setiap unsur penilaian prestasi kerja sekurang-kurangnya bernilai baik dalam 2 (dua) tahun terakhir,
								Diberikan dalam batas jenjang pendidikan terakhir yang dimiliki,
								Surat pengantar dari instansi,
							</div>
						</div>
					</div><!-- # Faq item-->

					<div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
								<i class="bi bi-question-circle question-icon"></i>
								Apa itu CLTN?
							</button>
						</h3>
						<div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
							<div class="accordion-body">
								CLTN adalah cuti yang diberikan pada PNS karena alasan pribadi dan mendesak setelah memenuhi persyaratan. Dalam hal proses ini kanreg menerbitkan nota persetujuan
							</div>
						</div>
					</div><!-- # Faq item-->

					<div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
								<i class="bi bi-question-circle question-icon"></i>
								Apa yang dimaksud alasan mendesak pada CLTN?
							</button>
						</h3>
						<div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
							<div class="accordion-body">
								<i class="bi bi-question-circle question-icon"></i>
								mengikuti atau mendampingi suami/istri tugas negara/tugas belajar di dalam/luar negeri  mendampingi suami/istri bekerja di dalam/luar negeri;
								menjalani program untuk mendapatkan keturunan;
								mendampingi anak yang berkebutuhan khusus;
								mendampingi suami/istri/anak yang memerlukan perawatan khusus; dan/atau
								mendampingi/merawat orang tua/mertua yang sakit/uzur
							</div>
						</div>
					</div><!-- # Faq item-->

					<div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
						<h3 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
								<i class="bi bi-question-circle question-icon"></i>
								Syarat-syarat pengajuan CLTN
							</button>
						</h3>
						<div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
							<div class="accordion-body">
								Telah bekerja 5 tahun terus menerus,
								Memiliki alasan yang mendesak dan dituangkan dalam surat keterangan,
								Fotocopy sah SK CPNS,
								Fotocopy sah SK KP Terakhir,
								Surat ijin dari atasan langsung,
								Surat pengantar dari instansi;
							</div>
						</div>
					</div><!-- # Faq item-->

				</div>

			</div>

			<div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
		</div>

	</div>
</section>
@endsection
