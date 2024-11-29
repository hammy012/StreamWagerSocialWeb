@extends('admin.layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List of Payments</h1>
        </div>

        <div class="table100">
            <table>
                <thead>
                    <tr class="table100-head">
                        <th class="column1">S No.</th>
                        <th class="column2">User Name</th>
                        <th class="column3">Payment Method</th>
                        <th class="column3">Trx ID</th>
                    </tr>
                </thead>
                <tbody>
                    @php($count = 1)
                    @foreach ($payments as $project)
                        @php($user = App\Models\User::where('id', $project->user_id)->first())
                        <tr>
                            <td class="column1">{{ $count++ }}</td>
                            <td class="column2">{{ $user['username'] }}</td>
                            <td class="column3">Stripe</td>
                            <td class="column3">{{ $project['trx_id'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{--  </div>  --}}
        {{--  </div>  --}}
        {{--  </div>  --}}

    </div>
@endsection
