@extends('frontend.layouts.frontend')

@section('title')
    Home
@endsection()

@section('css')
@endsection()

@section('content')
    <!-- Main -->
    <main id="main">

        <!-- Get Started Section -->
        <section id="get-started" class="get-started section">
            <div class="container">

                <div class="row justify-content-between gy-4">

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <div class="content">
                    <h3>Live out your creative vision by adding more space in your home!</h3>
                    <p>Ready to expand? Our professionals at Nessim Renovations will guide you through every step of the process. Nessim Renovations ensures perfection from initial demolition down to the finishing touch.                    </p>
                    </div>
                </div>


                <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
                    <form action="{{ route('quotepost') }}" method="post" class="php-email-form">
                        @csrf
                        <h3>Get a quote</h3>
                        <!-- <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p> -->
                        <div class="row gy-3">

                            <div class="col-12">
                            <input type="text" name="name" class="form-control" placeholder="Name" required="">
                            </div>

                            <div class="col-12 ">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                            </div>

                            <div class="col-12">
                            <input type="text" class="form-control" name="phone" placeholder="Phone" required="">
                            </div>

                            <div class="col-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                            <button type="submit">Get a quote</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Quote Form -->

                </div>

            </div>
        </section><!-- /Get Started Section -->

        <!-- Constructions Section -->
        <section id="constructions" class="constructions section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
            <h2>Constructions</h2>
            <p>His needs result from something escape him indeed are consectetur will</p>
            </div><!-- End Section Title -->

            <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card-item">
                    <div class="row">
                    <div class="col-xl-5">
                        <div class="card-bg"><img src="frontend/img/constructions-1.jpg" alt=""></div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-center">
                        <div class="card-body">
                        <h4 class="card-title">All truths are to be chosen.</h4>
                        <p>Escape in pains and this and guilt. Convenient we can not know the ways pleasure pleases mellow obtain. With delight pains not truth. Offices times great that. Pain them and.</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card-item">
                    <div class="row">
                    <div class="col-xl-5">
                        <div class="card-bg"><img src="frontend/img/constructions-2.jpg" alt=""></div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-center">
                        <div class="card-body">
                        <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                        <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card-item">
                    <div class="row">
                    <div class="col-xl-5">
                        <div class="card-bg"><img src="frontend/img/constructions-3.jpg" alt=""></div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-center">
                        <div class="card-body">
                        <h4 class="card-title">Error beatae dolor inventore aut</h4>
                        <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla culpa.</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card-item">
                    <div class="row">
                    <div class="col-xl-5">
                        <div class="card-bg"><img src="frontend/img/constructions-4.jpg" alt=""></div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-center">
                        <div class="card-body">
                        <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                        <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores libero nobis.</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div><!-- End Card Item -->

            </div>

            </div>

        </section><!-- /Constructions Section -->

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

        <!-- ======= Home Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-around gy-4">
                    <!-- ======= Home About Section ======= -->
                    <div class="col-lg-6 img-bg" style="background-image: url(frontend/img/{{ $homeabout->photo }});" data-aos="zoom-in" data-aos-delay="100"></div>
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>{{ $homeabout->title }}</h3>
                        <p>{{ $homeabout->description }}</p>
                    <!-- ======= Home About Section ======= -->
                    <!-- ======= Home Services Section ======= -->
                    @foreach($homeservice as $service)
                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="{{ $service->icon }} flex-shrink-0"></i>
                            <div>
                                <h4><span class="stretched-link">{{ $service->title }}</span></h4>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    @endforeach
                    <!-- ======= Home Services Section ======= -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Alt Services Section -->

        <!-- ======= Home Features Section ======= -->
        <section id="features" class="features section-bg">
            <div class="container" data-aos="fade-up">
                <ul class="nav nav-tabs row  g-2 d-flex">
                    <!-- Start tab nav item -->
                    @foreach($homefeatures as $features)
                    <li class="nav-item col-3">
                        <a class="nav-link {{ $features->id == 1 ? 'active show' : '' }}" data-bs-toggle="tab" data-bs-target="#tab-{{ $features->id }}">
                            <h4>{{ $features->title }}</h4>
                        </a>
                    </li>
                    <!-- End tab nav item -->
                    @endforeach
                </ul>
                <!-- Start tab content item -->
                <div class="tab-content">
                    @foreach($homefeatures as $features)
                    <div class="tab-pane {{ $features->id == 1 ? 'active show' : '' }}" id="tab-{{ $features->id }}">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <h3>{{ $features->title }}</h3>
                                {{ $features->description }}
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="frontend/img/{{ $features->photo }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- End tab content item -->
                    @endforeach



                </div>
                <!-- End tab content item -->
            </div>
        </section>
        <!-- End Features Section -->

        <!-- Projects Section -->
        <section id="projects" class="projects section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
            <h2>Projects</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach($categorys as $category)
                        <li data-filter=".filter-{{$category->slug}}">{{$category->title}}</li>
                    @endforeach
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach($projects as $project)
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{$project->category->slug}}">
                        <div class="portfolio-content h-100">
                        <img src="frontend/img/project/{{$project->photos[0]->photo}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$project->brand->title}}</h4>
                            <p>{{$project->title}}</p>
                            <a href="frontend/img/project/{{$project->photos[0]->photo}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="{{route('project.detail',$project->id)}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </section><!-- /Projects Section -->




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
                        @foreach($hometestimonials as $testimonials)
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
    </main>
    <!-- End #main -->
@endsection()

@section('js')
@endsection()
