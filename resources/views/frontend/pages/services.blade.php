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

                <h2>Services</h2>
                <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Services</li>
                </ol>
                </nav>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section light-background">
            <div class="container">

                <div class="row gy-4">

                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fa-solid {{ $service->icon }}"></i>
                            </div>
                            <h3>{{ $service->title }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($service->description,120,'...') }}</p>
                            <a href="{{ route('services.detail',$service->slug) }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </section><!-- End Services Section -->

        <!-- Features Cards Section -->
        <section id="features-cards" class="features-cards section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <h3>Quasi eaque omnis</h3>
                    <p>Eius non minus autem soluta ut ui labore omnis quisquam corrupti autem odit voluptas quos commodi magnam occaecati.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check2"></i> <span>Ullamco laboris nisi ut aliquip</span></li>
                        <li><i class="bi bi-check2"></i> <span>Duis aute irure dolor in reprehenderit</span></li>
                        <li><i class="bi bi-check2"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                    </ul>
                    </div><!-- End feature item-->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <h3>Et nemo dolores consectetur</h3>
                    <p>Ducimus ea quam et occaecati est. Temporibus in soluta labore voluptates aut. Et sit soluta non repellat sed quia dire plovers tradoria</p>

                    <ul class="list-unstyled">
                        <li><i class="bi bi-check2"></i> <span>Enim temporibus maiores eligendi</span></li>
                        <li><i class="bi bi-check2"></i> <span>Ut maxime ut quibusdam quam qui</span></li>
                        <li><i class="bi bi-check2"></i> <span>Officiis aspernatur in officiis</span></li>
                    </ul>
                    </div><!-- End feature item-->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <h3>Staque laboriosam modi</h3>
                    <p>Velit eos error et dolor omnis voluptates nobis tenetur sed enim nihil vero qui suscipit ipsum at magni. Ipsa architecto consequatur aliquam</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check2"></i> <span>Quis voluptates laboriosam numquam</span></li>
                        <li><i class="bi bi-check2"></i> <span>Debitis eos est est corrupti</span></li>
                    </ul>
                    </div><!-- End feature item-->

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <h3>Dignissimos suscipit iste</h3>
                    <p>Molestiae occaecati assumenda quia saepe nobis recusandae at dicta ducimus sequi numquam commodi est in consequatur ea magnam quia itaque</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check2"></i> <span>Veritatis qui reprehenderit quis</span></li>
                        <li><i class="bi bi-check2"></i> <span>Accusantium vel numquam sunt minus</span></li>
                        <li><i class="bi bi-check2"></i> <span>Voluptatem pariatur est sationem</span></li>
                    </ul>
                    </div><!-- End feature item-->

                </div>

            </div>

        </section><!-- /Features Cards Section -->

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
                        @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="frontend/img/{{ $testimonial->photo }}" class="testimonial-img" alt="">
                                    <h3>{{ $testimonial->name }}</h3>
                                    <h4>{{ $testimonial->authority }}</h4>
                                    <div class="stars">
                                        @for ($i=1;$i<=$testimonial->point; $i++)
                                            <i class="bi bi-star-fill"></i>
                                        @endfor
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        {{ $testimonial->description }}
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
