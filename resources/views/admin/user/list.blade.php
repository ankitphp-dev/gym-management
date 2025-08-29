@extends('admin.layout.master')
@section('content')
<style>
table thead th.text-center,
table tbody td.text-center {
    width: 260px;
    /* jitna chahiye utna set karlo */
}

@media (max-width: 576px) {
    td .btn {
        flex: 1 1 100%;
    }
}
</style>
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
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Member List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> <!-- 🔹 Page Content -->
    <div class="app-content py-4">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-header d-flex align-items-center flex-wrap">
                    <h5 class="card-title m-0">Member List</h5>
                    <!-- <a href="{{ url('admin/members/add') }}" class="btn btn-sm px-4 ms-auto mt-2 mt-sm-0" style="background-color:#fd7e14; color:white;"> + Add Member </a> -->
                </div> <!-- 🔹 Filters -->
                <div class="card-body border-bottom">
                    <form class="row g-2">
                        <div class="col-12 col-sm-6 col-md-3"> <input type="text" class="form-control"
                                placeholder="Search by name/email"> </div>
                        <!-- <div class="col-6 col-md-2"> <select class="form-select"> <option>Status</option> <option>Active</option> <option>Expired</option> <option>Expiring Soon</option> <option>Suspended</option> <option>Freezed</option> </select> </div> -->
                        <!-- <div class="col-6 col-md-2"> <select class="form-select"> <option>Plan Type</option> <option>Gold</option> <option>Silver</option> <option>Platinum</option> </select> </div> -->
                        <!-- <div class="col-6 col-md-2"> <select class="form-select"> <option>Trainer</option> <option>All</option> <option>Rahul</option> <option>Priya</option> </select> </div> -->
                        <!-- <div class="col-6 col-md-2"> <input type="date" class="form-control" placeholder="Start Date"> </div> -->
                        <div class="col-12 col-md-1 d-grid"> <button type="submit"
                                class="btn btn-dark w-100">Filter</button> </div>
                    </form>
                </div> <!-- 🔹 Responsive Table -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle mb-0">
                            <thead class="table-dark text-nowrap">
                                <tr>
                                    <th>#</th>
                                    <th>Member ID</th>
                                    <th>Member Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Trainer</th>
                                    <th>Plan</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th>Last Payment</th>
                                    <th>Attendance</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-nowrap">
                                <tr>
                                    <td>1</td>
                                    <td>M-1001</td>
                                    <td>Rohit Sharma</td>
                                    <td>+91 98765 43210</td>
                                    <td>rohit@gmail.com</td>
                                    <td>Rahul Singh</td>
                                    <td>Gold Plan</td>
                                    <td>01-Aug-2025</td>
                                    <td>31-Jan-2026</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>₹5,000 / UPI</td>
                                    <td>18 days</td>
                                    <td class="text-center">
                                        <div class="" style="">
                                            <a href="#" class="btn btn-info btn-sm flex-fill" style="">View</a>
                                            <a href="#" class="btn btn-warning btn-sm flex-fill" style="">Edit</a>
                                            <a href="#" class="btn btn-primary btn-sm flex-fill" style="">Renew</a>
                                            <a href="#" class="btn btn-danger btn-sm flex-fill" style="">Delete</a>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>M-1001</td>
                                    <td>Harsh Sharma</td>
                                    <td>+91 98765 43210</td>
                                    <td>rohit@gmail.com</td>
                                    <td>Rahul Singh</td>
                                    <td>Gold Plan</td>
                                    <td>01-Aug-2025</td>
                                    <td>31-Jan-2026</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>₹5,000 / UPI</td>
                                    <td>18 days</td>
                                    <td class="text-center">
                                        <div class="" style="">
                                            <a href="#" class="btn btn-info btn-sm flex-fill" style="">View</a>
                                            <a href="#" class="btn btn-warning btn-sm flex-fill" style="">Edit</a>
                                            <a href="#" class="btn btn-primary btn-sm flex-fill" style="">Renew</a>
                                            <a href="#" class="btn btn-danger btn-sm flex-fill" style="">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- /.card-body -->
            </div>
        </div>
    </div>
</main>
@endsection