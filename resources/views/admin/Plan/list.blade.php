@extends('admin.layout.master')

@section('content')
<main class="app-main">
    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                     <h5 class="mb-0 "  style="color:black;">Plan Management</h5>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Plan List</li>
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
                    <h5 class="card-title m-0">Plan List</h5>
                    <a href="{{ url('admin/plan/add') }}" class="btn btn-sm px-4 ms-auto"
                        style="background-color:#fd7e14; color:white;">
                        + Add Plan
                    </a>
                </div>
                <!-- 🔹 Responsive Table -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Plan Name</th>
                                    <th>Duration</th>
                                    <th>Price (₹)</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Gold Plan</td>
                                    <td>12 Months</td>
                                    <td>₹ 12,000</td>
                                    <td><span class="badge bg-success">Active</span></td>
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
                                    <td>Silver Plan</td>
                                    <td>6 Months</td>
                                    <td>₹ 6,500</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm flex-wrap">
                                            <button class="btn btn-info mb-1">View</button>
                                            <button class="btn btn-warning mb-1">Edit</button>
                                            <button class="btn btn-danger mb-1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Monthly Plan</td>
                                    <td>1 Month</td>
                                    <td>₹ 1,200</td>
                                    <td><span class="badge bg-danger">Inactive</span></td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm flex-wrap">
                                            <button class="btn btn-info mb-1">View</button>
                                            <button class="btn btn-warning mb-1">Edit</button>
                                            <button class="btn btn-danger mb-1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- aur plans yaha add kar sakte ho -->
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