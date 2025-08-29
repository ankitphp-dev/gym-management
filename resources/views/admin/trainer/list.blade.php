@extends('admin.layout.master')

@section('content')
<main class="app-main">
    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h5 class="mb-0" style="color:black;">Trainer Management</h5>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Trainer List</li>
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
                    <h5 class="card-title m-0">Trainer List</h5>
                    <a href="{{ url('admin/trainer/add') }}" class="btn btn-sm px-4 ms-auto"
                        style="background-color:#fd7e14; color:white;">
                        + Add Trainer
                    </a>
                </div>
                <!-- 🔹 Responsive Table -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle mb-0">
                            <thead class="table-dark text-nowrap ">
                                <tr>
                                    <th>#</th>
                                    <th>Profile</th>
                                    <th>Name</th>
                                    <th>Specialization</th>
                                    <th>Experience</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    <th>Assigned Members</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-nowrap ">
                                <tr>
                                    <td>1</td>
                                    <td><img src="{{asset('assets/admin/img/avatar4.png')}}" class="rounded-circle"
                                            width="40" height="40" alt="Profile"></td>
                                    <td>Rajesh Kumar</td>
                                    <td>Yoga</td>
                                    <td>5 Years</td>
                                    <td>+91 9876543210</td>
                                    <td>rajesh@gmail.com</td>
                                    <td>₹ 25,000</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><span class="badge bg-info">12 Members</span></td>
                                    <td class="text-center">
                                        <div class="d-grid gap-1 d-md-flex justify-content-center"
                                            style="grid-template-columns: repeat(2, auto);">
                                            <a href="{{ url('admin/trainer/view/2') }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ url('admin/trainer/edit/2') }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ url('admin/trainer/assign/2') }}"
                                                class="btn btn-secondary btn-sm">Assign</a>
                                            <a href="{{ url('admin/trainer/delete/2') }}" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure to delete this trainer?')">Delete</a>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="{{asset('assets/admin/img/avatar3.png')}}" class="rounded-circle"
                                            width="40" height="40" alt="Profile"></td>
                                    <td>Anita Sharma</td>
                                    <td>Zumba</td>
                                    <td>3 Years</td>
                                    <td>+91 9123456789</td>
                                    <td>anita@email.com</td>
                                    <td>₹ 20,000</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><span class="badge bg-info">8 Members</span></td>
                                    <td class="text-center">
                                        <div class="d-grid gap-1 d-md-flex justify-content-center"
                                            style="grid-template-columns: repeat(2, auto);">
                                            <a href="{{ url('admin/trainer/view/2') }}"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="{{ url('admin/trainer/edit/2') }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ url('admin/trainer/assign/2') }}"
                                                class="btn btn-secondary btn-sm">Assign</a>
                                            <a href="{{ url('admin/trainer/delete/2') }}" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure to delete this trainer?')">Delete</a>
                                        </div>
                                    </td>

                                </tr>
                                <!-- aur trainers yaha dynamically load honge -->
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