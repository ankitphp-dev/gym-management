@extends('admin.layout.master')

@section('content')
<main class="app-main">
    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                     <h5 class="mb-0" style="color:black;">Attendance Management</h5>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Attendance List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔹 Page Content -->
    <div class="app-content py-4">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <!-- Card Header -->
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title m-0">Attendance List</h5>

                </div>

                <!-- Filters -->
                <div class="card-body border-bottom">
                    <form class="row g-3">
                        <div class="col-md-3">
                            <select class="form-select">
                                <option>User Type</option>
                                <option>Member</option>
                                <option>Trainer</option>
                                <option>Staff</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>

                <!-- 🔹 Responsive Table -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Class/Shift</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>25-08-2025</td>
                                    <td>Aman Verma</td>
                                    <td>Member</td>
                                    <td>Yoga</td>
                                    <td><span class="badge bg-success">Present</span></td>
                                    <td>-</td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm flex-wrap">
                                            <button class="btn btn-info mb-1">View</button>
                                            <button class="btn btn-warning mb-1">Edit</button>
                                            <button class="btn btn-danger mb-1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>25-08-2025</td>
                                    <td>Rajesh Kumar</td>
                                    <td>Trainer</td>
                                    <td>-</td>
                                    <td><span class="badge bg-danger">Absent</span></td>
                                    <td>Personal Work</td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm flex-wrap">
                                            <button class="btn btn-info mb-1">View</button>
                                            <button class="btn btn-warning mb-1">Edit</button>
                                            <button class="btn btn-danger mb-1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- aur records yaha add kar sakte ho -->
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
