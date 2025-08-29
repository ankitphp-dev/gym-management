@extends('admin.layout.master')

@section('content')
<main class="app-main">
    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                     <h5 class="mb-0 "  style="color:black;">Diet Management</h5>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Diet List</li>
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
                    <h5 class="card-title m-0">Diet List</h5>
                    <a href="{{ url('admin/diet/add') }}" class="btn btn-sm px-4 ms-auto"
                        style="background-color:#fd7e14; color:white;">
                        + Add Diet
                    </a>
                </div>

                <!-- 🔹 Responsive Table -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Diet Image</th>
                                    <th>Diet Name</th>
                                    <th>Category</th>
                                    <th>Calories</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="{{asset('assets/admin/img/kito diet.webp')}}" 
                                             class="rounded" width="60" height="60" alt="Diet Image">
                                    </td>
                                    <td>Keto Plan</td>
                                    <td>Low Carb</td>
                                    <td>1800 kcal</td>
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
                                    <td>
                                        <img src="{{asset('assets/admin/img/waitgain.avif')}}" 
                                             class="rounded" width="60" height="60" alt="Diet Image">
                                    </td>
                                    <td>Weight Gain Plan</td>
                                    <td>High Protein</td>
                                    <td>2500 kcal</td>
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
                                    <td>
                                        <img src="{{asset('assets/admin/img/diet.png')}}" 
                                             class="rounded" width="60" height="60" alt="Diet Image">
                                    </td>
                                    <td>Diabetic Diet</td>
                                    <td>Low Sugar</td>
                                    <td>1600 kcal</td>
                                    <td><span class="badge bg-danger">Inactive</span></td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm flex-wrap">
                                            <button class="btn btn-info mb-1">View</button>
                                            <button class="btn btn-warning mb-1">Edit</button>
                                            <button class="btn btn-danger mb-1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- aur diets yaha add kar sakte ho -->
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