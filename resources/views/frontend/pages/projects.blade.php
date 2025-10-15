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

        <!-- Projects Section -->
      <section id="projects" class="projects section">

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
    </main><!-- End #main -->
@endsection()

@section('js')
@endsection()
