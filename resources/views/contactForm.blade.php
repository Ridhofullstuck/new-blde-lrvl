@extends('index')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('img/breadcrumbs.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Contact</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Contact</li>
            </ol>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="fa-solid fa-map"></i>
                            <h3>Alamat</h3>
                            <p>Jalan Banyu Urip Lor V / 110, Surabaya</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="fa-regular fa-envelope"></i>
                            <h3>Email</h3>
                            <p>ridhoprogrammer@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="fa-solid fa-phone"></i>
                            <h3>Call</h3>
                            <p>+62 852 3041 0366</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">

                    <div class="col-lg-6 ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7429179868805!2d112.7224021!3d-7.270068599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbfdb3941121%3A0xa72e3542651ec7a3!2sBanyu%20Urip%20Lor%20V%20No.110%2C%20Kupang%20Krajan%2C%20Kec.%20Sawahan%2C%20Surabaya%2C%20Jawa%20Timur%2060253!5e0!3m2!1sid!2sid!4v1691563253676!5m2!1sid!2sid"
                            frameborder="0" width="100%" height="384" style="border:0;" allowfullscreen></iframe>
                    </div><!-- End Google Maps -->

                    <div class="col-lg-6">
                        <form action={{ route('send.email') }} method="POST" class="php-email-form">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject">
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="text-center"><button type="submit">send</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
