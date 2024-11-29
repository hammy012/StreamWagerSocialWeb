@extends('admin.layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List of All Users</h1>
        </div>

        <div class="table100">
            <table>
                <thead>
                    <tr class="table100-head">
                        <th class="column1">S No.</th>
                        <th class="column2">User Name</th>
                        <th class="column2">Email</th>
                        <th class="column2">Premium Member</th>
                        <th class="column3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($count = 1)
                    @foreach ($users as $project)
                        <tr>
                            <td class="column1">{{ $count++ }}</td>
                            <td class="column2">{{ $project['username'] }}</td>
                            <td class="column2">{{ $project['email'] }}</td>
                            <td class="column2">{{ $project['membership'] === 1 ? "Yes" : "No" }}</td>
                            <td class="column3">
                                <a href="{{ route('admin.user-view', ['id' => $project['id']]) }}"
                                    class="btn btn-success btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <form action="{{ route('admin.user-delete', ['id' => $project['id']]) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
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
