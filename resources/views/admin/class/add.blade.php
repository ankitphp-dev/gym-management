@extends('admin.layout.master')

@section('content')
<main class="app-main">
    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h5 class="mb-0" style="color:black;">Add Class Schedule</h5>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/schedule/list') }}">Class Schedule List</a>
                        </li>
                        <li class="breadcrumb-item active">Add Schedule</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔹 Page Content -->
    <div class="app-content py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- ✅ Form col-8 me center -->
                <div class="col-lg-8 col-md-10">
                    <div class="card shadow-sm">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title m-0">Add New Class Schedule</h5>
                        </div>

                        <div class="card-body">
                            <form action="{{ url('admin/schedule/store') }}" method="POST">
                                @csrf
                                <!-- Class Name -->
                                <div class="mb-3">
                                    <label for="class_name" class="form-label">Class Name</label>
                                    <select id="class_name" name="class_name" class="form-select" required>
                                        <option value="">-- Select Class --</option>
                                        <option value="Yoga">Yoga</option>
                                        <option value="Zumba">Zumba</option>
                                        <option value="CrossFit">CrossFit</option>
                                        <option value="Pilates">Pilates</option>
                                    </select>
                                </div>

                                <!-- Trainer -->
                                <div class="mb-3">
                                    <label for="trainer" class="form-label">Trainer</label>
                                    <select id="trainer" name="trainer" class="form-select" required>
                                        <option value="">-- Select Trainer --</option>
                                        <option value="1">Rajesh Kumar</option>
                                        <option value="2">Anita Sharma</option>
                                        <option value="3">Vikram Singh</option>
                                    </select>
                                </div>

                                <!-- Date -->
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" id="date" name="date" class="form-control" required>
                                </div>

                                <!-- Time -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="start_time" class="form-label">Start Time</label>
                                        <input type="time" id="start_time" name="start_time" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="end_time" class="form-label">End Time</label>
                                        <input type="time" id="end_time" name="end_time" class="form-control" required>
                                    </div>
                                </div>

                                <!-- Capacity -->
                                <div class="mb-3">
                                    <label for="capacity" class="form-label">Capacity</label>
                                    <input type="number" id="capacity" name="capacity" class="form-control"
                                        placeholder="Enter max capacity" required>
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
                                <div class=" d-flex gap-2">
                                    <button type="submit" class="btn"
                                        style="background-color:#fd7e14; color:white;">Save Schedule</button>
                                    <a href="{{ url('admin/schedule/list') }}" class="btn btn-secondary">Cancel</a>
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