@extends('admin.layout.master')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<main class="app-main">
    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h5 class="mb-0"  style="color:black;">Plan Management</h5>
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
                                    <th>Discount (₹)</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($membership->count() > 0)
                                    @foreach($membership as $index => $plan)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $plan->plan_name }}</td>
                                            <td>{{ $plan->duration }} Months</td>
                                            <td>{{ $plan->price }} (₹)</td>
                                            <td>{{ $plan->discount }} (₹)</td>
                                            <td>
                                                @if($plan->status == 'active')
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-warning">Edit</a> | 
                                                <a href="{{ route('plan.delete', $plan->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center">No membership plans found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end mt-3" style="margin-right: 10px;">
                            {{ $membership->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</main>

@endsection