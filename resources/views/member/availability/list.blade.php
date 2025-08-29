@extends('tutor.layouts.master')
@section('body')
    <style>
        table td:nth-child(2),
        table td:nth-child(3),
        table td:nth-child(4),
        table td:nth-child(5),
        table td:nth-child(10),
        table td:nth-child(11) {
            width: 150px;
            white-space: nowrap;
        }
    </style>
    <div class="page-content">
        <div class="container-fluid">
	    @if (session('success'))
            <div class="alert alert-success" id="alert">{{ session('success') }}</div>
        @endif
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Availability Manage</h4>
                    </div>
                </div>
            </div>
 
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">                            
                            <a href="{{ url('tutor/availability/add') }}" class="btn btn-primary">
                                + Add New Availability
                            </a>
                            <form action="{{ url('tutor/availability') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control me-2" placeholder="Search course..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tutor name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Start Time</th>
                                            <th scope="col">End Time</th>
                                            <th scope="col">Date Created</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($availabilitys->count() > 0)
                                            @php $i = 1; @endphp
                                            @foreach ($availabilitys as $availability)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $availability->tutor_name ?? 'NA' }}</td>
                                                    <td>{{ $availability->date ?? 'NA' }}</td>
                                                    <td>{{ $availability->start_time ?? 'NA' }}</td>
                                                    <td>{{ $availability->end_time ?? 'NA' }}</td>
                                                    <td>{{ $availability->created_at ?? 'NA' }}</td>
                                                    <td>
                                                        <a href="{{ url('tutor/availability/edit/' . $availability->id) }}"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="{{ url('tutor/availability/delete/' . $availability->id) }}"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure want to delete this availability?')">Delete</a>
                                                    </td>
                                                </tr>
                                                @php $i++; @endphp
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="11" class="text-center py-4">No entries found</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end mt-3">
                                   {{  $availabilitys->withQueryString()->links('vendor.pagination.custom') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


    </div>
    

    <script>
        setTimeout(function () {
            document.getElementById("alert").style.display = "none";
        }, 3000);
    </script>
@endsection