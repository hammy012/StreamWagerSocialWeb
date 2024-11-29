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
            <h1 class="h3 mb-0 text-gray-800">View User Details</h1>
            <a href="/admin/dashboard" class="d-none d-sm-inline-block btn btn-secondary shadow-sm"><i class="fas fa-home"></i>
                Dashboard
            </a>
        </div>
        {{--  @php($imagePath = asset('assets/img/img2.jpg'))  --}}
        <form method="POST" class="my-5" action="{{ route('admin.category-update', ['id' => $user->id]) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">First Name</label>
                        <input type="text" value="{{ $user->first_name }}" name="name" class="form-control"
                            id="name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Last Name</label>
                        <input type="text" value="{{ $user->last_name }}" name="name" class="form-control"
                            id="name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="text" value="{{ $user->username }}" name="name" class="form-control"
                            id="name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Email</label>
                        <input type="text" value="{{ $user->email }}" name="name" class="form-control"
                            id="name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Type</label>
                        <input type="text" value="{{ $user->type }}" name="name" class="form-control"
                            id="name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Premium Member</label>
                        <input type="text" value="{{ $user->membership === 1 ? "Yes" : "No" }}" name="name" class="form-control"
                            id="name">
                    </div>
                </div>


            </div>
            {{--  <button type="submit" class="btn btn-outline-secondary mt-4">Submit</button>  --}}
        </form>


    </div>



@endsection
