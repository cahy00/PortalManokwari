@extends('layout.layout')

<div class="breadcrumbs">
	<div class="container">
		<br>
		<div class="d-flex justify-content-between align-items-center">
			<h2>Tentang Kantor</h2>
			<ol>
				<li><a href="/">Home</a></li>
				<li>Tentang</li>
			</ol>
		</div>

	</div>
</div>

@section('content')
<section id="about" class="about">
	<div class="container" data-aos="fade-up">

		<div class="section-header">
			<h2>Profil Kantor</h2>
			<p>Kanreg XIV adalah sebuah kantor yang berdedikasi untuk memberikan layanan yang terbaik dalam bidang Kepegawaian, dengan fokus pada kepuasan pelanggan dan kualitas yang tinggi.</p>
		</div>

		<div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

			<div class="col-lg-5">
				<div class="about-img">
					<img src="{{asset('bkn/bknedit.jpg')}}" class="img-fluid" alt="">
				</div>
			</div>

			<div class="col-lg-7">
				<h3 class="pt-0 pt-lg-5">Sejarah dan perjalanan BKN Kantor Regional XIV Manokwari</h3>

				<!-- Tabs -->
				<ul class="nav nav-pills mb-3">
					<li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Sejarah</a></li>
					<li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Perjalanan</a></li>
					<li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Saat Ini</a></li>
				</ul>
				<!-- End Tabs -->

				<!-- Tab Content -->
				<div class="tab-content">

					<div class="tab-pane fade show active" id="tab1">

						<p style="text-align: justify" class="fst-italic">
							Berdirinya Kantor Regional XIV BKN Manokwari dilatar belakangi oleh faktor geografis dimana jarak daerah-daerah tertentu khususnya di Papua Barat dengan Kantor Regional IX BKN Jayapura terbilang jauh dengan akses tranportasi yang minim. Hal ini tentu menjadi hambatan bagi instansi-instansi di daerah untuk mengurus hal-hal yang berkaitan dengan kepegawaian. Belum lagi di Papua, untuk bepergian dari satu daerah ke daerah lain kebanyakan harus menggunakan pesawat termasuk dari daerah-daerah di Papua Barat menuju Jayapura. Tentunya hal ini tidak efisien terutama dalam hal anggaran dan juga tidak efisien dalam hal tenaga, waktu, dan resiko yang bisa timbul. Oleh karena itu pada Tanggal 22 Januari 2014 Unit Percepatan Pembangunan Provinsi Papua dan Provinsi Papua Barat (UP4B) bersurat kepada Menpan RB agar mendirikan satu Kantor Regional Badan Kepegawaian Negara di Provinsi Papua Barat.
						</p>

						<p style="text-align: justify" class="fst-italic">Pada tanggal 28 April 2014 Menpan RB dalam suratnya Nomor : B/1575/M.PANRB/4/2014 menyetujui pembentukan dua Kantor Regional BKN yang baru termasuk Kantor Regional Badan Kepegawaian Negara yang akan didirikan di Provinsi Papua Barat. Surat Menpan RB tersebut ditindaklanjuti secara teknis oleh internal Badan Kepegawaian Negara dengan bersurat kepada Gubernur Papua Barat yang isinya antara lain agar Gubernur menunjuk satu daerah di Papua Barat yang dirasa tepat sebagai tempat untuk mendirikan Kantor Regional BKN di Papua Barat. Usul tersebut disambut baik oleh Gubernur dan menunjuk Kota Sorong Sebagai lokasi yang tepat untuk mendirikan Kantor Regional BKN. Kemudian ada pertimbangan bahwa lokasi tersebut ternyata tidak mendukung efiseinsi sehingga lokasi pendirian dipindahkan ke Manokwari yang merupakan Ibu Kota Papua Barat.</p>

					</div><!-- End Tab 1 Content -->

					<div class="tab-pane fade show" id="tab2">

						<p style="text-align:justify" class="fst-italic">Pada tanggal 25 Juli 2014 Badan Kepegawaian Negara Mengerluarkan Peraturan Kepala BKN Nomor 20 Tahun 2014 tentang Pembentukan Kantor Regional XIII BKN Banda Aceh dan Kantor Regional XIV BKN Manokwari. Sesaat setelah regulasi tersebut dikeluarkan, dua pejabat dari Kantor Regional IX BKN Jayapura yaitu Bapak Sumaryono yang saat itu menjabat sebagai Kepala Kantor Regional dan Bapak Jaap Tanlain yang saat itu menjabat sebagai Kepala Sub Bagian Perencanaan dan Keuangan segera mengurus dan membenahi pendirian Kantor Regional XIV BKN Manokwari. Karena masih bertugas di Kantor Regional IX BKN Jayapura maka Bapak Sumaryono dan Bapak Jaap Tanlain harus bolak balik Jayapura-Manokwari selama beberapa bulan. Gubernur Papua Barat menunjuk gedung juang yang berlokasi di komplek Perkantoran Gubernur Bukit Arfai sebagai tempat operasional Kantor Regional XIV BKN Manokwari. Sejak didirikan tahun 2009 gedung juang tidak pernah digunakan sehingga kondisinya membutuhkan pembenahan fisik saat akan digunakan di tahun 2014. Bapak Sumaryono dan Bapak Jaap Tanlain dibantu oleh pegawai-pegawai dari BKD Kabupaten Manokwari selama dua hari untuk membenahi gedung.</p>

					</div><!-- End Tab 2 Content -->

					<div class="tab-pane fade show" id="tab3">

						<p class="fst-italic" style="text-align: justify">
							Pada tanggal 3 Desember 2014 Kantor Regional XIV BKN Manokwari diresmikan oleh Kepala Badan Kepegawaian Negara yang saat itu dijabat oleh Bapak Eko Sutrisno dan Gubernur Papua Barat yang saat itu masih dijabat Brigjen TNI Marinir Abraham Oktavianus Atururi (Almarhum). Acara peresmian kantor dirangkaikan dengan acara pelantikan beberapa Pejabat Eselon III dan Eselon IV yang akan bertugas di Kantor Regional XIV BKN Manokwari. Untuk memenuhi kebutuhan pegawai secara bertahap dilakukan mutasi pegawai dari Kantor Regional IV BKN Makassar, Kantor Regional VIII Banjarmasin, Kantor Regional IX Jayapura, dan Kantor Regional X Denpasar ke Kantor Regional XIV BKN Manokwari.

							Kantor Regional XIV BKN Manokwari beroperasi efektif pada Bulan Maret 2015 melayani 14 Instansi Daerah yang terdiri dari 12 Kabupaten, 1 Kota, dan 1 Provinsi.
						</p>

					</div><!-- End Tab 3 Content -->

				</div>

			</div>

		</div>

	</div>
</section>
@endsection