@extends('admin.layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="/admin/dashboard" class="d-none d-sm-inline-block btn btn-secondary shadow-sm"><i class="fas fa-home"></i>
                    Dashboard
                </a>
            </div>


            <div class="survey mb-5">
                <div class="row container-fluid mt-4">
                    <!-- Customers -->
                    <div class="col-xl-4 col-md-6 mb-4 p-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class=" font-weight-bold text-info text-uppercase mb-1">
                                            Total Coaches
                                        </div>
                                        <div class="h3 mb-0 font-weight-bold text-gray-800">
                                            {{ $coaches->count() }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Expense -->
                    <div class="col-xl-4 col-md-6 mb-4 p-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold text-warning text-uppercase mb-1">
                                            Player
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div style="margin-left: 12px;" class="h3 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    {{ $players->count() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earning -->
                    <div class="col-xl-4 col-md-6 mb-4 p-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold text-success text-uppercase mb-1">
                                            Primium Players
                                        </div>
                                        <div class="h3 mb-0 font-weight-bold text-gray-800">
                                            {{ $premiums->count() }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
@endsection
