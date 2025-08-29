@extends('admin.layout.master')

@section('content')
<main class="app-main">
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h5 class="mb-0" style="color:black;">Plan Management</h5>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/plan/list') }}">Plan List</a></li>
                        <li class="breadcrumb-item active">Add Plan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔹 Page Content -->
    <div class="app-content py-4">
        <div class="container-fluid">
            <div class="row justify-content-center"> 
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h5 class="card-title m-0">Add New Plan</h5>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <!-- 🔹 Form Start -->
                        <form method="POST" action="{{ route('admin.plan') }}">
                            @csrf
                            <div class="card-body">
                                <div class="row g-3">
                                    <!-- Plan Name -->
                                    <div class="col-md-6">
                                        <label for="plan_name" class="form-label">Plan Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="plan_name" name="plan_name"
                                            placeholder="Plan Name" required>
                                        
                                        @error('plan_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror    
                                    </div>

                                    <!-- Duration -->
                                    <div class="col-md-6">
                                        <label for="duration" class="form-label">Duration <span class="text-danger">*</span></label>
                                        <select id="duration" name="duration" class="form-select" required>
                                            <option value="" disabled selected>Select duration</option>
                                            <option value="1">1 Month</option>
                                            <option value="3">3 Months</option>
                                            <option value="6">6 Months</option>
                                            <option value="12">12 Months</option>
                                        </select>

                                        @error('duration')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="price" class="form-label">Price (₹) <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">₹</span>
                                            <input type="number" min="1"  class="form-control" id="price"
                                                name="price" placeholder="Price" required>
                                            <!-- <span class="input-group-text">.00</span> -->
                                        </div>

                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Discount -->
                                    <div class="col-md-6">
                                        <label for="discount" class="form-label">Discount (₹)</label>
                                        <input type="number" min="0" class="form-control" id="discount"
                                            name="discount" placeholder="Discount">
                                        @error('discount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror    
                                    </div>

                                    <div class="col-md-12">
                                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                        <select id="status" name="status" class="form-select" required>
                                            <option value="0">Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>

                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3"
                                            placeholder="Write short description about the plan ..."></textarea>

                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror    
                                    </div>
                                </div>
                            </div>

                            <!-- save button -->
                            <div class="card-footer d-flex gap-2">
                                <button type="submit" class="btn" style="background-color:#fd7e14; color:white;">Save Plan</button>
                                <a href="{{ url('admin/plan/list') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                        <!-- 🔹 Form End -->
                    </div>
                </div>
            </div> <!-- row end -->
        </div>
    </div>
</main>
@endsection
