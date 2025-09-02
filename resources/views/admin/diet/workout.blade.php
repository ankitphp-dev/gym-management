@extends('admin.layout.master')

@section('content')
<main class="app-main">
    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h5 class="mb-0 " style="color:black;">Workout Management</h5>
                    @if(session('success'))
                        <div id="success-message" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        <script>
                            setTimeout(function() {
                                var msg = document.getElementById('success-message');
                                if(msg){
                                    msg.style.display = 'none';
                                }
                            }, 3000);
                        </script>
                    @endif
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Workout List</li>
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
                    <h5 class="card-title m-0">Workout List</h5>
                    <a href="{{ url('admin/diet/addworkout') }}" class="btn btn-sm px-4 ms-auto"
                        style="background-color:#fd7e14; color:white;">
                        + Add Workout
                    </a>
                </div>

                <!-- 🔹 Responsive Table -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Workout Name</th>
                                    <th>Category</th>
                                    <th>Duration</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($workout as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->workout_name }}</td>
                                        <td>{{ $item->category_name }}</td>
                                        <td>{{ $item->duration }} minutes</td>
                                        <td>
                                            <span class="badge {{ $item->status == 'Active' ? 'bg-success' : 'bg-danger' }}">
                                                {{ ucfirst($item->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            @if($item->workout_image)
                                                <img src="{{ asset('/public/uploads/workouts/'.$item->workout_image) }}" width="80">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td> 
                                            <a href="#" class="btn btn-warning">
                                                Edit
                                            </a> |
                                            <a href="{{ route('delete.workout', $item->id) }}" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this workout?')">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No workouts found</td>
                                    </tr>
                                @endforelse
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