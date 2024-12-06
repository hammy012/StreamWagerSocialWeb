@extends('admin.layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List of All Coaches</h1>
            <p class="text-gray-800">You Can Update the Status by selecting</p>
        </div>

        <div class="table100">
            <table>
                <thead>
                    <tr class="table100-head">
                        <th class="column1">S No.</th>
                        <th class="column2">Username</th>
                        <th class="column2">Email</th>
                        <th class="column2">Update</th>
                        <th class="column3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($count = 1)
                    @foreach ($coaches as $project)
                        <tr>
                            <td class="column1">{{ $count++ }}</td>
                            <td class="column2">{{ $project['username'] }}</td>
                            <td class="column2">{{ $project['email'] }}</td>
                            <td>
                                <form action="{{ route('admin.coach-update', ['id' => $project['id']]) }}" method="POST">
                                    @csrf
                                    <select class="form-control" name="status" onchange="this.form.submit()">
                                        <option value="Pending" {{ $project->status == 'Pending' ? 'selected' : '' }}>
                                            Pending</option>
                                        <option value="Rejected" {{ $project->status == 'Rejected' ? 'selected' : '' }}>
                                            Rejected</option>
                                        <option value="Verified" {{ $project->status == 'Verified' ? 'selected' : '' }}>
                                            Verified</option>
                                    </select>
                                </form>
                            </td>
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


    <script>
        $(document).ready(function() {
            $('select[name="status"]').change(function() {
                var status = $(this).val();
                var userId = $(this).data('user-id'); // Add the user ID to the select element

                $.ajax({
                    url: '/admin/coach-update/' + userId,
                    method: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        status: status
                    },
                    success: function(response) {
                        alert('Status updated successfully!');
                    },
                    error: function() {
                        alert('An error occurred.');
                    }
                });
            });
        });
    </script>
@endsection
