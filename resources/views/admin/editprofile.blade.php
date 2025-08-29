@extends('admin.layout.master')

@section('content')
<main class="app-main">

    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h5 class="mb-0 text-dark">Edit Profile</h5>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ url('admin/dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ url('admin/profile') }}">Profile</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔹 Page Content -->
    <div class="page-content">
        <div class="container-fluid">

            <div class="row mt-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="mb-3">Update Your Profile</h5>
                            
                            <form action="{{ url('admin/profile/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <!-- Profile Image -->
                                <div class="mb-3 text-center">
                                    <img src="{{ asset('assets/admin/img/user8-128x128.jpg') }}" 
                                         class="rounded-circle avatar-xl mb-3"
                                         alt="Profile Picture">
                                    <div>
                                        <input type="file" name="profile_image" class="form-control w-50 mx-auto">
                                    </div>
                                </div>

                                <!-- Full Name -->
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control" value="Admin Name">
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="admin@example.com">
                                </div>

                                <!-- Phone -->
                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" value="+91 9876543210">
                                </div>

                                <!-- Address -->
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea name="address" class="form-control" rows="2">New Delhi, India</textarea>
                                </div>

                                <!-- City, State, Pincode -->
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" name="city" class="form-control" value="New Delhi">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">State</label>
                                        <input type="text" name="state" class="form-control" value="Delhi">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label">Pincode</label>
                                        <input type="text" name="pincode" class="form-control" value="110001">
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="text-end">
                                    <a href="{{ url('admin/profile') }}" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div> <!-- row end -->

        </div> <!-- container-fluid end -->
    </div> <!-- page-content end -->

</main>
@endsection
