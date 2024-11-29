@extends('admin.layouts.app')

@section('title', 'Page Title')

@section('content')

<style>
    input{
        border: 1px solid #ccc !important;
    }
</style>

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profile :</h1>
            <a href="/admin/dashboard" class="d-none d-sm-inline-block btn btn-secondary shadow-sm"><i class="fas fa-home"></i>
                Dashboard
            </a>
        </div>

        <div class="form">
            @php($admin = App\Models\Admin::first())
            <form method="POST" action="{{ route('admin.profile-update') }}">
                @csrf
                <div class="container">
                    <div class="form-group row">
                        <input type="hidden" name="admin_id", value="{{$admin->id}}">
                        <label for="name" class="col-sm-2 col-form-label">Name : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$admin->name}}" name="name" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email : </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" value="{{$admin->email}}" name="email" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Your Password : </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                        </div>
                    </div>


                    <div class="form-group row mt-5">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">New Password : </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputNewPassword" name="npassword" placeholder="New Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password : </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputConfirmPassword" name="cpassword" placeholder="Confirm Password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
