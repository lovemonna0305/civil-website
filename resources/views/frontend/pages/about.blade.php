@extends('frontend.layouts.frontend')

@section('title')
    About
@endsection()

@section('css')
@endsection()

@section('content')
    <main id="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(frontend/img/breadcrumbs-bg.jpg);">
            <div class="container position-relative">
                <h1>About</h1>
                <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">About</li>
                </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row position-relative">
                    <div class="col-lg-7 about-img" style="background-image: url(frontend/img/about.jpg);"></div>
                    
                    
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <h2>{{ $about->title }}</h2>
                        <div class="our-story">
                            <h4>Est 1988</h4>
                            <h3>Our Story</h3>
                            <p>{{ $about->description }}</p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                            </ul>
                            <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>
                            <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-play-circle"></i>
                                <a href="{{ $about->video_link }}" class="glightbox stretched-link">Watch Video</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->


        <!-- Stats Counter Section -->
        <section id="stats-counter" class="stats-counter section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
            <h2>Stats</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                @foreach($aboutservices as $services)
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="{{ $services->icon }} flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="{{ $services->number }}" data-purecounter-duration="3" class="purecounter"></span>
                                <p>{{ $services->title }}</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->
                @endforeach
            </div>
            </div>
        </section><!-- /Stats Counter Section -->




        <!-- Alt Services Section -->
        <section id="alt-services" class="alt-services section">
            <div class="container">
            <div class="row justify-content-around gy-4">
                <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="frontend/img/alt-services.jpg" alt=""></div>

                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-easel flex-shrink-0"></i>
                    <div>
                    <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-patch-check flex-shrink-0"></i>
                    <div>
                    <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                    <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                    <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
                    </div>
                </div><!-- End Icon Box -->

                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                    <h4><a href="" class="stretched-link">Tride clov</a></h4>
                    <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
                    </div>
                </div><!-- End Icon Box -->

                </div>
            </div>
            </div>
        </section><!-- /Alt Services Section -->

        <!-- Alt Services 2 Section -->
        <section id="alt-services-2" class="alt-services-2 section">
            <div class="container">
            <div class="row justify-content-around gy-4">

                <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <h3>Enim quis est voluptatibus aliquid consequatur</h3>
                <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

                <div class="row">

                    <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-easel flex-shrink-0"></i>
                    <div>
                        <h4>Lorem Ipsum</h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias </p>
                    </div>
                    </div><!-- End Icon Box -->

                    <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-patch-check flex-shrink-0"></i>
                    <div>
                        <h4>Nemo Enim</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiise</p>
                    </div>
                    </div><!-- End Icon Box -->

                    <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                        <h4>Dine Pad</h4>
                        <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit</p>
                    </div>
                    </div><!-- End Icon Box -->

                    <div class="col-lg-6 icon-box d-flex">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                        <h4>Tride clov</h4>
                        <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit</p>
                    </div>
                    </div><!-- End Icon Box -->

                </div>

                </div>

                <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                <img src="frontend/img/features-3.jpg" alt="">
                </div>

            </div>
        </div>
        </section><!-- /Alt Services 2 Section -->

        <!-- Team Section -->
        <section id="team" class="team section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
            <div class="container">
            <div class="row gy-5">
                @foreach($aboutteam as $team)
                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="frontend/img/{{ $team->photo }}" class="img-fluid" alt="">
                        <div class="social">
                            <a target="_blank" href="{{ $team->twitter_link }}"><i class="bi bi-twitter"></i></a>
                            <a target="_blank" href="{{ $team->facebook_link }}"><i class="bi bi-facebook"></i></a>
                            <a target="_blank" href="{{ $team->instagram_link }}"><i class="bi bi-instagram"></i></a>
                            <a target="_blank" href="{{ $team->linkedin_link }}"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>{{ $team->name }}</h4>
                        <span>{{ $team->authority }}</span>
                        <p>{{ $team->description }}</p>
                    </div>
                </div><!-- End Team Member -->
                @endforeach
            </div>
            </div>
            </section><!-- /Team Section -->

            <!-- Testimonials Section -->
            <section id="testimonials" class="testimonials section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div><!-- End Section Title -->
                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                            "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                            },
                            "breakpoints": {
                            "320": {
                                "slidesPerView": 1,
                                "spaceBetween": 40
                            },
                            "1200": {
                                "slidesPerView": 2,
                                "spaceBetween": 20
                            }
                            }
                        }
                        </script>
                        <div class="swiper-wrapper">
                            @foreach($aboutestimonials as $testimonials)
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="frontend/img/{{ $testimonials->photo }}" class="testimonial-img" alt="">
                                        <h3>{{ $testimonials->name }}</h3>
                                        <h4>{{ $testimonials->authority }}</h4>
                                        <div class="stars">
                                            @for ($i=1;$i<=$testimonials->point; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor
                                        </div>
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                            {{ $testimonials->description }}
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End testimonial item -->
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section><!-- /Testimonials Section -->


    </main><!-- End #main -->
    @endsection()

@section('js')
@endsection()
