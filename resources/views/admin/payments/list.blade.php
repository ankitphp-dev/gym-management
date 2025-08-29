@extends('admin.layout.master')

@section('content')
<main class="app-main">
    <!-- 🔹 Page Header -->
    <div class="app-content-header py-3 border-bottom bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h5 class="mb-0" style="color:black;">Payment & Billing</h5>
                </div>
                <div class="col-12 col-md-6 mt-2 mt-md-0">
                    <ol class="breadcrumb float-md-end mb-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Payment List</li>
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
                    <h5 class="card-title m-0">Payment List</h5>
                    <!-- <a href="{{ url('admin/payment/add') }}" class="btn btn-sm px-4 ms-auto"
                      style="background-color:#fd7e14; color:white;">
                        + Add Payment
                    </a> -->
                </div>

                <!-- 🔹 Responsive Table -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Invoice ID</th>
                                    <th>Member Name</th>
                                    <th>Plan</th>
                                    <th>Amount (₹)</th>
                                    <th>Mode</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>INV-1001</td>
                                    <td>Rahul Sharma</td>
                                    <td>Gold Plan</td>
                                    <td>₹ 12,000</td>
                                    <td>UPI</td>
                                    <td><span class="badge bg-success">Paid</span></td>
                                    <td>25-Aug-2025</td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm flex-wrap">
                                            <button class="btn btn-info mb-1">View</button>
                                            <button class="btn btn-primary mb-1">Invoice</button>
                                            <button class="btn btn-danger mb-1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>INV-1002</td>
                                    <td>Neha Verma</td>
                                    <td>Monthly Plan</td>
                                    <td>₹ 1,200</td>
                                    <td>Cash</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                    <td>22-Aug-2025</td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm flex-wrap">
                                            <button class="btn btn-info mb-1">View</button>
                                            <button class="btn btn-primary mb-1">Invoice</button>
                                            <button class="btn btn-danger mb-1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>INV-1003</td>
                                    <td>Amit Kumar</td>
                                    <td>Silver Plan</td>
                                    <td>₹ 6,500</td>
                                    <td>Card</td>
                                    <td><span class="badge bg-danger">Failed</span></td>
                                    <td>20-Aug-2025</td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm flex-wrap">
                                            <button class="btn btn-info mb-1">View</button>
                                            <button class="btn btn-primary mb-1">Invoice</button>
                                            <button class="btn btn-danger mb-1">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- aur payments yaha add ho sakte hai -->
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