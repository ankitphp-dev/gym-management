@extends('tutor.layouts.master')
@section('body')
    <style>
        table td:nth-child(2),
        table td:nth-child(5),
        table td:nth-child(6),
        table td:nth-child(7),
        table td:nth-child(8),
        table td:nth-child(11),
        table td:nth-child(12) {
            width: 150px;
            white-space: nowrap;
        }
    </style>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Students Manage</h4>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success" id="alert">{{ session('success') }}</div>
                    @endif
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title"></h4>
                            <form action="{{ url('tutor/student') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control form-control-sm p-2 me-2"
                                    placeholder="Search student..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Filter
                                </button>
                            </form>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">City</th>
                                            <th scope="col">State</th>
                                            <th scope="col">Pincode</th>
                                            <th scope="col">Verify</th>
                                            <th scope="col">Date Created</th>
                                            <!-- <th scope="col">Actions</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($users->count() > 0)
                                            @php $i = 1; @endphp
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $user->name ?? 'NA' }}</td>
                                                    <td>{{ $user->email ?? 'NA' }}</td>
                                                    <td>{{ $user->phone ?? 'NA' }}</td>
                                                    <td>
                                                        @if(!empty($user->image) && file_exists(public_path('uploads/user/' . $user->image)))
                                                            <img src="{{ asset('uploads/user/' . $user->image) }}" height="80"
                                                                width="130" alt="Student Image">
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->address ?? 'NA' }}</td>
                                                    <td>{{ $user->city ?? 'NA' }}</td>
                                                    <td>{{ $user->state ?? 'NA' }}</td>
                                                    <td>{{ $user->pincode ?? 'NA' }}</td>
                                                    <td>
                                                        @if($user->verify == 'Approved')
                                                            <span class="btn-sm btn btn-success">Approved</span>
                                                        @elseif($user->verify == 'Rejected')
                                                            <span class="btn-sm btn btn-danger">Rejected</span>
                                                        @else
                                                            <div class="d-flex gap-1">
                                                                <form action="{{ url('tutor/student/verify/' . $user->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-success ">Approved</button>
                                                                </form>
                                                                <form action="{{ url('tutor/student/reject/' . $user->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                                                                </form>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->created_at ?? 'NA' }}</td>
                                                    <!-- <td>
                                                        <a href="{{ url('staff/user/edit/' . $user->id) }}"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="{{ url('staff/user/delete/' . $user->id) }}"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure want to delete this student?')">Delete</a>
                                                    </td> -->
                                                </tr>
                                                @php $i++; @endphp
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="12" class="text-center py-4">No entries found</td>
                                            </tr>
                                        @endif
                                    </tbody>

                                </table>
                                <div class="d-flex justify-content-end mt-3">
                                    {!! $users->withQueryString()->links('vendor.pagination.custom') !!}
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