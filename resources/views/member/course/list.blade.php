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
                        <h4 class="mb-sm-0 font-size-18">Course Manage</h4>
                    </div>
                </div>
            </div>
 
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">                            
                            <a href="{{ url('tutor/course/add') }}" class="btn btn-primary">
                                + Add New Course
                            </a>
                            <form action="{{ url('tutor/course') }}" method="GET" class="d-flex">
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
                                            <th scope="col">Name</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Teacher Image</th>
                                            <th scope="col">Banner</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date Created</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($courses->count() > 0)
                                            @php $i = 1; @endphp
                                            @foreach ($courses as $course)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $course->name ?? 'NA' }}</td>
                                                    <td>{{ $course->title ?? 'NA' }}</td>
                                                    <td>{{ $course->designation ?? 'NA' }}</td>
                                                    <td>{{ substr($course->description ?? 'NA', 0, 40) }}...</td>
                                                    <td>
                                                        <img src="{{ asset('uploads/course/' . $course->teacher_image) }}"
                                                            height="80" width="130" alt="Teacher Image">
                                                    </td>
                                                    <td>
                                                        <img src="{{ asset('uploads/course/' . $course->banner) }}" height="80"
                                                            width="130" alt="Banner">
                                                    </td>
                                                    <td>{{ $course->price ?? 'NA' }}</td>
                                                    <td>{{ $course->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                    <td>{{ $course->created_at ?? 'NA' }}</td>
                                                    <td>
                                                        <a href="{{ url('tutor/course/edit/' . $course->id) }}"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="{{ url('tutor/course/delete/' . $course->id) }}"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure want to delete this course?')">Delete</a>
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
                                    {!! $courses->withQueryString()->links('vendor.pagination.custom') !!}
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