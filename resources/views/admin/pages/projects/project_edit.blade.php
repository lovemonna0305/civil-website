@extends('admin.layouts.backend')

@section('title')
@endsection()

@section('css')
@endsection()

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Project</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Project</li>
                    <li class="breadcrumb-item active">Edit Project</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Project</h5>
                            <!-- General Form Elements -->
                            <form method="post" action="{{ route('project.update') }}"  enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="id" value="{{ $project->id }}">

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">İmage</label>
                                    <div class="col-sm-10">
                                        <img width="80px" height="80px" src="../../../frontend/img/project/{{ $project->photo }}" alt="">
                                    </div>
                                </div>

                               <div class="row mb-3">
                                    <label for="inputFile" class="col-sm-2 col-form-label">File Upload</label>
                                    <div class="col-sm-10">
                                        <input name="photo" class="form-control" type="file" id="formFile" multiple>
                                        @error('photo')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" type="text" class="form-control" value="{{ $project->title }}">
                                        @error('title')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputDescription" class="col-sm-2 col-form-label">Brand</label>
                                    <div class="col-sm-10">
                                        <select name = "brand_id" class="form-select" aria-label="Default select example">
                                            @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" <?php if($brand->id == $project->brand->id) echo 'selected'; ?>>{{ $brand->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputDescription" class="col-sm-2 col-form-label">Testimonial</label>
                                    <div class="col-sm-10">
                                        <select name = "testimonial_id" class="form-select" aria-label="Default select example">
                                            @foreach($testimonials as $testimonial)
                                             <option value="{{ $testimonial->id }}" <?php if($testimonial->id == $project->testimonial_id) echo 'selected'; ?>>{{ $testimonial->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('testimonial_id')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="inputDescription" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select name = "category_id" class="form-select" aria-label="Default select example">
                                            @foreach($categorys as $category)
                                             <option value="{{ $category->id }}" <?php if($category->id == $project->category->id) echo 'selected'; ?>>{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Details İmage</label>
                                    <div class="col-sm-10">
                                        @foreach($project->photos as $photo)
                                            <img width="80px" height="80px" src="../../../frontend/img/project/{{ $photo->photo }}" alt="">
                                        @endforeach
                                    </div>
                                </div>

                               <div class="row mb-3">
                                    <label for="inputFile" class="col-sm-2 col-form-label">Details File Upload</label>
                                    <div class="col-sm-10">
                                        <input name="image[]" class="form-control" type="file" id="formFile" multiple>
                                        @error('image')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="inputDescription" class="col-sm-2 col-form-label">Description 1</label>
                                    <div class="col-sm-10">
                                        <textarea name="description1" class="form-control" style="height: 60px" >{{ $project->description1 }}</textarea>
                                        @error('description1')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDescription" class="col-sm-2 col-form-label">Description 2</label>
                                    <div class="col-sm-10">
                                        <textarea name="description2" class="form-control" style="height: 60px" >{{ $project->description2 }}</textarea>
                                        @error('description2')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDescription" class="col-sm-2 col-form-label">Description 3</label>
                                    <div class="col-sm-10">
                                        <textarea name="description3" class="form-control" style="height: 60px" >{{ $project->description3 }}</textarea>
                                        @error('description3')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection()

@section('js')
@endsection()
