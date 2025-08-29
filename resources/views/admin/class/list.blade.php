@extends('admin.layout.master')

@section('content')
<main class="app-main">
    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h5 class="mb-0" style="color:black;">Class Schedule Management</h5>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Class Schedule List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔹 Page Content -->
    <div class="app-content py-4">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title m-0">Class Schedule List</h5>
                    <a href="{{ url('/admin/class/add') }}" class="btn btn-sm px-4 ms-auto"
                        style="background-color:#fd7e14; color:white;">
                        + Add Schedule
                    </a>
                </div>
                <!-- 🔹 Responsive Table -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle mb-0">
                            <thead class="table-dark text-nowrap">
                                <tr>
                                    <th>#</th>
                                    <th>Class Name</th>
                                    <th>Trainer</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Capacity</th>
                                    <th>Booked</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-nowrap">
                                <tr>
                                    <td>1</td>
                                    <td>Yoga</td>
                                    <td>Rajesh Kumar</td>
                                    <td>25-Aug-2025</td>
                                    <td>07:00 AM - 08:00 AM</td>
                                    <td>30</td>
                                    <td>25</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td class="text-center">
                                        <div class="d-grid gap-1 d-md-flex justify-content-center"
                                            style="grid-template-columns: repeat(2, auto);">
                                            <a href="{{ url('admin/schedule/view/1') }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ url('admin/schedule/edit/1') }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ url('admin/schedule/cancel/1') }}"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure to cancel this class?')">Cancel</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Zumba</td>
                                    <td>Anita Sharma</td>
                                    <td>26-Aug-2025</td>
                                    <td>06:00 PM - 07:00 PM</td>
                                    <td>25</td>
                                    <td>22</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td class="text-center">
                                        <div class="d-grid gap-1 d-md-flex justify-content-center"
                                            style="grid-template-columns: repeat(2, auto);">
                                            <a href="{{ url('admin/schedule/view/2') }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ url('admin/schedule/edit/2') }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ url('admin/schedule/cancel/2') }}"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure to cancel this class?')">Cancel</a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- aur schedules yaha dynamically load honge -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</main>

@endsection