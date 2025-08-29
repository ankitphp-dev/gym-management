@extends('admin.layout.master')

@section('content')
<main class="app-main">

    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h5 class="mb-0 text-dark">Member Management</h5>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ url('admin/dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Member List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔹 Page Content -->
    <div class="page-content">
        <div class="container-fluid">

            <div class="row mt-5">
                <!-- Profile Card -->
                <div class="col-lg-4">
                    <div class="card text-center shadow">
                        <div class="card-body">
                            <!-- Profile Image -->
                            <img src="{{ asset('assets/admin/img/user8-128x128.jpg') }}" 
                                 class="rounded-circle avatar-xl mb-3"
                                 alt="Profile Picture">

                            <!-- Name -->
                            <h4 class="mb-1">Admin Name</h4>
                            <p class="text-muted">admin@example.com</p>

                            <a href="{{ url('admin/profile/edit') }}" class="btn btn-primary btn-sm">
                                <i class="mdi mdi-account-edit"></i> Edit Profile
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Profile Details -->
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="mb-3">Profile Information</h5>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th width="30%">Full Name</th>
                                            <td>Admin Name</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>admin@example.com</td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <td>+91 9876543210</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>New Delhi, India</td>
                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td>New Delhi</td>
                                        </tr>
                                        <tr>
                                            <th>State</th>
                                            <td>Delhi</td>
                                        </tr>
                                        <tr>
                                            <th>Pincode</th>
                                            <td>110001</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row end -->

        </div> <!-- container-fluid end -->
    </div> <!-- page-content end -->

</main>
@endsection
