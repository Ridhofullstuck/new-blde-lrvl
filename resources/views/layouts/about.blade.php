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

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="img/about.jpg" alt="">
            </div>

            <div class="content">
                <h3>good things come to those <span>who bake </span> for others</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit veritatis sunt id modi quis in eveniet at!
                    Vero iusto excepturi.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section>


    <!-- about us end-->
@endsection
