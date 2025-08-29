@extends('admin.layout.master')

@section('content')
<main class="app-main">
    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h5 class="mb-0" style="color:black;">Add Diet Plan</h5>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/diet/list') }}">Diet List</a></li>
                        <li class="breadcrumb-item active">Add Diet</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔹 Page Content -->
    <div class="app-content py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- Center row -->
                <div class="col-12 col-lg-8">
                    <!-- ✅ col-8 form container -->
                    <div class="card shadow-sm">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title m-0">Add New Diet Plan</h5>
                        </div>

                        <div class="card-body">
                            <form action="{{ url('admin/diet/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Diet Name -->
                                <div class="mb-3">
                                    <label for="diet_name" class="form-label">Diet Name</label>
                                    <input type="text" id="diet_name" name="diet_name" class="form-control"
                                        placeholder="Enter diet name" required>
                                </div>

                                <!-- Diet Image -->
                                <div class="mb-3">
                                    <label for="diet_image" class="form-label">Diet Image</label>
                                    <input type="file" id="diet_image" name="diet_image" class="form-control"
                                        accept="image/*" required>
                                </div>

                                <!-- Duration -->
                                <div class="mb-3">
                                    <label for="duration" class="form-label">Duration (Weeks)</label>
                                    <input type="number" id="duration" name="duration" class="form-control"
                                        placeholder="Enter duration in weeks" required>
                                </div>

                                <!-- Calories -->
                                <div class="mb-3">
                                    <label for="calories" class="form-label">Calories</label>
                                    <input type="number" id="calories" name="calories" class="form-control"
                                        placeholder="Enter calories per day" required>
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" name="description" rows="4" class="form-control"
                                        placeholder="Enter diet description" required></textarea>
                                </div>

                                <!-- Status -->
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select id="status" name="status" class="form-select" required>
                                        <option value="Active" selected>Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>

                                <!-- Submit -->
                                <div class="     d-flex gap-2">
                                    <button type="submit" class="btn"
                                        style="background-color:#fd7e14; color:white;">Save </button>
                                    <!-- <a href="{{ url('admin/diet/list') }}" class="btn btn-secondary">Cancel</a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- col-8 end -->
            </div>
        </div>
    </div>
</main>
@endsection