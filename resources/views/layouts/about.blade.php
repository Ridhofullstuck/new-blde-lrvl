@extends('index')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/breadcrumbs.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>{{ $title }}</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>{{ $title }}</li>
            </ol>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- about us -->

    <section class="about" id="about">

        <h1 class="heading"> <span>Tentang</span> UDpurnama </h1>

        <div class="row">

            <div class="image">
                <img src="img/about.jpg" alt="">
            </div>

            <div class="content">
                <p>Kami adalah destinasi utama Anda untuk segala kebutuhan bangunan dan perbaikan rumah. Dengan pengalaman puluhan tahun dalam industri ini, kami bangga menjadi mitra terpercaya bagi para kontraktor, pemilik rumah, dan tukang untuk memenuhi segala kebutuhan proyek konstruksi dan renovasi.</p>
            </div>

        </div>

    </section>


    <!-- about us end-->
@endsection
