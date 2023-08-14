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
            <h2 class="display-3" id="layanan">Layanan</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate,
                doloribus.
            </p>
            <div class="row pt-4">
                <div class="col-md-4">
                    <span class="lingkaran"><i class="fas fa-code fa-5x"></i></span>
                    <h3 class="mt-3">Programming</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat,
                        a!
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran"><i class="fas fa-palette fa-5x"></i></span>
                    <h3 class="mt-3">Design</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat,
                        a!
                    </p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran"><i class="fas fa-network-wired fa-5x"></i></span>
                    <h3 class="mt-3">Networking</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat,
                        a!
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
                        <h2 class="mt-2">We Provide the Best Quality<br>
                            Services Ever</h2>
                        <p class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, labore reiciendis. Assumenda eos
                            quod animi! Soluta nesciunt inventore dolores excepturi provident, culpa beatae tempora,
                            explicabo corporis quibusdam corrupti. Autem, quaerat. Assumenda quo aliquam vel, nostrum
                            explicabo ipsum dolor, ipsa perferendis porro doloribus obcaecati placeat natus iste odio est
                            non earum?</p><a class="btn btn-primary" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->
@endsection
