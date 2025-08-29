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
                        <li class="breadcrumb-item"><a href="{{ url('admin/trainer/list') }}">Trainer List</a></li>
                        <li class="breadcrumb-item active">Add Trainer</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    

    <!-- 🔹 Page Content -->
    <div class="app-content py-4">
        <div class="container-fluid">
            <div class="row justify-content-center"> <!-- ✅ Center row -->
                <div class="col-md-8"> <!-- ✅ Only 8 column width -->
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h5 class="card-title m-0">Add New Trainer</h5>
                        </div>

                        <!-- 🔹 Form Start -->
                        <form method="POST" action="{{ url('admin/trainer/store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row g-3">
                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" required>
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-md-6">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select id="gender" name="gender" class="form-select">
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <!-- DOB -->
                                    <div class="col-md-6">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" name="dob">
                                    </div>

                                    <!-- Specialization -->
                                    <div class="col-md-6">
                                        <label for="specialization" class="form-label">Specialization</label>
                                        <input type="text" class="form-control" id="specialization" name="specialization" placeholder="e.g., Yoga, Strength Training">
                                    </div>

                                    <!-- Experience -->
                                    <div class="col-md-6">
                                        <label for="experience" class="form-label">Experience (Years)</label>
                                        <input type="number" class="form-control" id="experience" name="experience" min="0" placeholder="e.g., 5">
                                    </div>

                                    <!-- Qualification -->
                                    <div class="col-md-6">
                                        <label for="qualification" class="form-label">Qualification</label>
                                        <input type="text" class="form-control" id="qualification" name="qualification" placeholder="e.g., B.P.Ed, Certified Trainer">
                                    </div>

                                    <!-- Certifications -->
                                    <div class="col-md-6">
                                        <label for="certifications" class="form-label">Certifications</label>
                                        <input type="text" class="form-control" id="certifications" name="certifications" placeholder="e.g., ACE, NASM">
                                    </div>

                                    <!-- Joining Date -->
                                    <div class="col-md-6">
                                        <label for="joining_date" class="form-label">Joining Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="joining_date" name="joining_date" required>
                                    </div>

                                    <!-- Shift / Working Hours -->
                                    <div class="col-md-6">
                                        <label for="shift" class="form-label">Shift / Working Hours</label>
                                        <input type="text" class="form-control" id="shift" name="shift" placeholder="e.g., Morning 6AM - 2PM">
                                    </div>

                                    <!-- Salary -->
                                    <div class="col-md-6">
                                        <label for="salary" class="form-label">Salary (₹) <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">₹</span>
                                            <input type="number" min="0" step="0.01" class="form-control" id="salary" name="salary" placeholder="e.g., 25000" required>
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>

                                    <!-- Status -->
                                    <div class="col-md-6">
                                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                        <select id="status" name="status" class="form-select" required>
                                            <option value="Active" selected>Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>

                                    <!-- Profile Photo -->
                                    <div class="col-md-6">
                                        <label for="photo" class="form-label">Profile Photo</label>
                                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                                    </div>

                                    <!-- Bio -->
                                    <div class="col-12">
                                        <label for="description" class="form-label">Description / Bio</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Write a short bio..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Save button -->
                            <div class="card-footer d-flex gap-2">
                                <button type="submit" class="btn" style="background-color:#fd7e14; color:white;">Save Trainer</button>
                                <a href="{{ url('admin/trainer/list') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                        <!-- 🔹 Form End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
