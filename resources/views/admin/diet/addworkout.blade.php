@extends('admin.layout.master')

@section('content')
<main class="app-main">
    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h5 class="mb-0" style="color:black;">Add Workout</h5>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/workout')}}">Workout List</a></li>
                        <li class="breadcrumb-item active">Add Workout</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔹 Page Content -->
    <div class="app-content py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- ✅ Center content -->
                <div class="col-12 col-lg-8">
                    <!-- ✅ col-8 instead of col-12 -->
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h5 class="card-title m-0">Add New Workout</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('workout.new')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">

                                    <!-- Workout Name -->
                                    <div class="col-md-6">
                                        <label class="form-label">Workout Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="workout_name" value="{{ old('workout_name') }}" class="form-control" required
                                            placeholder="Enter workout name">
                                        @error('workout_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror    
                                    </div>

                                    <!-- Workout Category -->
                                    <div class="col-md-6">
                                        <label class="form-label">Category <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="category_name" value="{{ old('category_name') }}" placeholder="Enter Category Name" required>
                                    
                                        @error('category_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <!-- Workout Duration -->
                                    <div class="col-md-6">
                                        <label class="form-label">Duration<span
                                            class="text-danger"> (in minutes) *</span></label>
                                        <input type="number" name="duration" class="form-control" required
                                            placeholder="e.g. 30">
                                        @error('duration')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror    
                                    </div>

                                    <!-- Workout Status -->
                                    <div class="col-md-6">
                                        <label class="form-label">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-select" required>
                                            <option value="">-- Select Status --</option>
                                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                       
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Workout Image -->
                                    <div class="col-md-6">
                                        <label class="form-label">Workout Image <span
                                                class="text-danger">*</span></label>
                                        <input type="file" name="workout_image" class="form-control" accept="image/*"
                                            required>
                                        @error('workout_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror    
                                    </div>

                                    <!-- Submit Button -->
                                    <div class=" d-flex gap-2">
                                        <button type="submit" class="btn"
                                            style="background-color:#fd7e14; color:white;">Save Workout</button>
                                        <a href="{{ url('admin/diet/workout.blade.php') }}" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- ✅ col-8 end -->
            </div>
        </div>
    </div>
</main>
@endsection