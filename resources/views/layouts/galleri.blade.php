@extends('index')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/breadcrumbs.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>{{ $title }}</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>{{ $title }}</li>
            </ol>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- gallery -->

    <section class="gallery pt-4" id="gallery">


        <div class="gallery-container">

            <a href="img/galleri/galleri1.jpg" class="box">
                <img src="img/galleri/galleri1.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="img/galleri/galleri2.jpg" class="box">
                <img src="img/galleri/galleri2.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="img/galleri/galleri3.jpg" class="box">
                <img src="img/galleri/galleri3.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="img/galleri/galleri4.jpg" class="box">
                <img src="img/galleri/galleri4.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="img/galleri/galleri5.jpg" class="box">
                <img src="img/galleri/galleri5.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="img/galleri/galleri6.jpg" class="box">
                <img src="img/galleri/galleri6.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

        </div>

    </section>

    <!-- gallery end -->
@endsection
