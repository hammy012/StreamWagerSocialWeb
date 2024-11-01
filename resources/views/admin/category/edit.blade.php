@extends('admin.layouts.app')

@section('title', 'Page Title')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <style>
        input {
            border: 1px solid #bbb !important;
        }
    </style>

    <div class="container">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Category</h1>
            <a href="/admin/dashboard" class="d-none d-sm-inline-block btn btn-secondary shadow-sm"><i class="fas fa-home"></i>
                Dashboard
            </a>
        </div>
        @php($currentImagePath = $category->image ? asset('storage/productImgs/'.$category->image) : null)
        {{--  @php($imagePath = asset('assets/img/img2.jpg'))  --}}
        <form method="POST" action="{{ route('admin.category-update', ['id' => $category->id]) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" value="{{ $category->name }}" name="name" class="form-control"
                            id="name">
                    </div>
                </div>

                <div class="col-12 col-md-4 from_part_2">
                    <div class="form-group">
                        <label for="currentImage">Current Image</label>
                        @if ($currentImagePath)
                            <img style="width: 200px; height: 200px; border: 1px solid; border-radius: 10px;" id="viewer"
                                src="{{ $currentImagePath }}" alt="current image" />
                        @else
                            <p>No current image</p>
                        @endif
                    </div>
                </div>

                <div class="col-12 col-md-4 from_part_2">
                    <label>New Image</label><small style="color: red">* Ratio 1:1 </small>
                    <div class="custom-file" style="text-align: left">
                        <input type="file" name="image" id="customFileEg1" class="custom-file-input"
                            accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                        <label class="custom-file-label" for="customFileEg1">Choose file</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-secondary mt-4">Submit</button>
        </form>


    </div>



@endsection
