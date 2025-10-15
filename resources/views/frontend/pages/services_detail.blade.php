@extends('../frontend.layouts.../frontend')

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

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <article class="blog-details">
                            <h2 class="title">{{ $servicesdetail->title }}</h2>
                            <div class="content">
                                <img src="../frontend/img/{{ $servicesdetail->photo }}" class="img-fluid" alt="">
                                <br><br>
                                {!! $servicesdetail->description !!}

                            </div><!-- End post content -->
                        </article><!-- End blog post -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Section -->
    </main>
    <!-- End #main -->
@endsection()

@section('js')
@endsection()
