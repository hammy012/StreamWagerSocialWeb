@extends('admin.layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List Bets</h1>
            <a href="{{ route('admin.add-new-category') }}" class="d-none d-sm-inline-block btn btn-secondary shadow-sm"><i
                    class="fas fa-home"></i>
                Add Category
            </a>
        </div>

        {{--  <div class="limiter">  --}}
        {{--  <div class="container-table100">  --}}
        {{--  <div class="wrap-table100">  --}}
        <div class="table100">
            <table>
                <thead>
                    <tr class="table100-head">
                        <th class="column1">S No.</th>
                        <th class="column2">Name</th>
                        <th class="column3">Image</th>
                        <th class="column3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($count = 1)
                    @foreach ($category as $project)
                        <tr>
                            <td class="column1">{{ $count++ }}</td>
                            <td class="column2">{{ $project['name'] }}</td>
                            <td class="column3">
                                @if ($project->image)
                                    <img style="width: 40px; height: 40px;" src="{{ asset('storage/productImgs/'.$project->image) }}" alt="">
                                @else
                                    <h6>no image</h6>
                                @endif
                            </td>
                            <td class="column3">
                                <a href="{{ route('admin.category-edit', ['id' => $project['id']]) }}"
                                    class="btn btn-success btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>

                                <form action="{{ route('admin.category-delete', ['id' => $project['id']]) }}" method="POST"
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
