@extends('frontend.layouts.frontend')

@section('title')
@endsection()

@section('css')
@endsection()

@section('content')
    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
        <div class="page-title dark-background" style="background-image: url('frontend/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative">

                <h2>Contact</h2>
                <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>
                </nav>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-map"></i>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street
                                NY 535022, USA</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@example.com1</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">


                    <div class="col-lg-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12030.987580764267!2d29.0137607!3d41.0745249!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x870db3e0dbf7eb01!2zWmluY2lybGlrdXl1IE1lemFybMSxxJ_EsQ!5e0!3m2!1str!2str!4v1665167958392!5m2!1str!2str" width="100%" height="384px" style="border:0;" allowfullscreen></iframe>

                    </div>
                    <div class="col-lg-6">
                        <form method="post" action="{{ route('contactpost') }}"  enctype="multipart/form-data" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection()

@section('js')
@endsection()
