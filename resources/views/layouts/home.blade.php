@extends('index')

@section('container')
    <!-- banner -->
    <div class="container-fluid banner">
        <div class="container text-center">
            <h4 class="display-6 text-dark teks">Selamat Datang di toko UDPurnama</h4>
            <p class="teks"></p>
            <a href="/galleri">
                <button type="button" class="btn btn-primary btn-lg mt-4">
                    Tentang Kami
                </button>
            </a>
        </div>
    </div>
    <!-- layanan -->
    <div class="container-fluid layanan py-3">
        <div class="container text-center">
            <h2 class="display-3" id="layanan">Layanan Kami</h2>
            <p>
                Disini kami memberikan layanan yang baik untuk para customer
            </p>
            <div class="row pt-4">
                <div class="col-md-4">
                    <span class="lingkaran"><i class="fas fa-comments fa-5x"></i></span>
                    <h3 class="mt-3">Konsultasi Proyek Personal</h3>
                    <p>
                        Layanan ini memberikan Anda akses ke para ahli kami untuk mendiskusikan detail proyek Anda. Dengan panduan yang tepat, Anda dapat membuat keputusan yang cerdas tentang material dan langkah-langkah yang diperlukan.
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran"><i class="fas fa-truck fa-5x"></i></span>
                    <h3 class="mt-3">Pengiriman Cepat</h3>
                    <p>
                        Kami mengutamakan kenyamanan Anda dengan menyediakan layanan pengiriman cepat dan andal. Pesan produk-produk Anda dari kami, dan kami akan memastikan barang tiba tepat waktu di lokasi yang Anda inginkan.
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran"><i class="fas fa-cut fa-5x"></i></span>
                    <h3 class="mt-3">Pemotongan Material</h3>
                    <p>
                        Setiap proyek memiliki kebutuhan unik. Kami menyediakan layanan pemotongan material seperti kayu, besi, dan lainnya sesuai ukuran yang Anda butuhkan. Ini membantu Anda menghemat waktu dan tenaga dalam mempersiapkan material.    
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- about section -->
    <section class="abouts section-padding mt-5" id="abouts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="abouts-img"><img alt="" class="img-fluid" src="img/about-section.jpg"></div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 ps-lg-5">
                    <div class="abouts-text">
                        <h2 class="mt-2">
                            Berkarya Dengan Kuat, Bangun Dengan Lebih Baik bersama UdPurnama</h2>
                        <p class="mt-2">Dari pondasi hingga atap, kami menyediakan segala yang Anda butuhkan untuk menjalankan proyek dengan kepercayaan diri. Kualitas produk dan pilihan yang luas menjadi pendorong di balik layanan kami. Tim ahli kami siap memberikan panduan yang tajam, memastikan setiap bahan yang Anda pilih sesuai dengan visi Anda.</p><a class="btn btn-primary" href="/about">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->
@endsection
