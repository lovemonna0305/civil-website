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

                <h2>Projects</h2>
                <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Projects</li>
                </ol>
                </nav>
            </div>
        </div><!-- End Breadcrumbs -->

        

        <!-- Project Details Section -->
        <section id="project-details" class="project-details section">

          <div class="container" data-aos="fade-up">

            <div class="portfolio-details-slider swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  },
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
              <div class="swiper-wrapper align-items-center">
                @foreach($project->photos as $photo)
                  <div class="swiper-slide">
                    <img src="{{ asset('frontend') }}/img/project/{{$photo->photo}}" alt="">
                  </div>
                @endforeach

              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
              <div class="swiper-pagination"></div>
            </div>

            <div class="row justify-content-between gy-4 mt-4">

              <div class="col-lg-8" data-aos="fade-up">
                <div class="portfolio-description">
                  <h2>{{$project->title}}</h2>
                  <!-- <p>
                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                  </p>
                  <p>
                    Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus doloremque nesciunt molestiae laboriosam.
                  </p> -->
                  <p>
                    {{$project->description1}}
                  </p>
                  

                  <div class="testimonial-item">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>{{$project->testimonial->description}}</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <div>
                      <img src="{{ asset('frontend') }}/img/{{$project->testimonial->photo}}" class="testimonial-img" alt="">
                      <h3>{{$project->testimonial->name}}</h3>
                      <h4>{{$project->testimonial->authority}}</h4>
                    </div>
                  </div>

                  <p>
                    {{$project->description2}}
                  </p>

                  <p>
                    {{$project->description3}}
                  </p>

                </div>
              </div>

              <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-info">
                  <h3>Project information</h3>
                  <ul>
                    <li><strong>Category</strong> {{$project->category->title}}</li>
                    <li><strong>Client</strong> ASU Company</li>
                    <li><strong>Project date</strong> 01 March, 2020</li>
                    <!-- <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                    <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li> -->
                  </ul>
                </div>
              </div>

            </div>

          </div>

        </section><!-- /Project Details Section -->





    </main><!-- End #main -->
@endsection()

@section('js')
@endsection()
