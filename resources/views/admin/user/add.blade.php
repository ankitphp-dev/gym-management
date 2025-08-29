@extends('admin.layout.master')

@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                   <h5 class="mb-0  "  style="color:black;">Member Management</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">General Form</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
                <!--begin::Col-->
                <div class="col-12">
                    <div class="callout callout-info">
                        For detailed documentation of Form visit
                        <a href="https://getbootstrap.com/docs/5.3/forms/overview/" target="_blank"
                            rel="noopener noreferrer" class="callout-link">
                            Bootstrap Form
                        </a>
                    </div>
                </div>
                <!--end::Col-->
                <!-- Add Member : Gym Member Management -->
                <div class="row g-4">
                    <!-- Member Details -->
                    <div class="col-12 col-xl-7">
                        <div class="card card-primary card-outline">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="card-title m-0">Add Member</div>
                                <span class="badge bg-primary">Member Details</span>
                            </div>

                            <!-- Laravel: add @csrf in real form -->
                            <form method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="fullName" class="form-label">Full Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="fullName" name="name"
                                                placeholder="e.g., Aman Kumar" required />
                                        </div>

                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="name@example.com" />
                                        </div>

                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-text">+91</span>
                                                <input type="tel" class="form-control" id="phone" name="phone"
                                                    placeholder="98765 43210" pattern="[0-9]{10}" required />
                                            </div>
                                            <div class="form-text">Enter 10 digit mobile number.</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="gender" class="form-label">Gender</label>
                                            <div class="d-flex gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="genderMale" value="Male" checked />
                                                    <label class="form-check-label" for="genderMale">Male</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="genderFemale" value="Female" />
                                                    <label class="form-check-label" for="genderFemale">Female</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="genderOther" value="Other" />
                                                    <label class="form-check-label" for="genderOther">Other</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="dob" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob" name="dob" />
                                        </div>

                                        <div class="col-md-6">
                                            <label for="emergencyPhone" class="form-label">Emergency Contact</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                                <input type="tel" class="form-control" id="emergencyPhone"
                                                    name="emergency_phone" placeholder="Emergency phone" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea class="form-control" id="address" name="address" rows="2"
                                                placeholder="House no, Street, City, PIN"></textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="photo" class="form-label">Member Photo</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="photo" name="photo"
                                                    accept="image/*" />
                                                <label class="input-group-text" for="photo">Upload</label>
                                            </div>
                                            <div class="form-text">JPG/PNG up to 2MB.</div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="status" class="form-label">Status</label>
                                            <select id="status" name="status" class="form-select">
                                                <option value="Active" selected>Active</option>
                                                <option value="Inactive">Inactive</option>
                                                <option value="Frozen">Frozen</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <label for="notes" class="form-label">Notes</label>
                                            <textarea class="form-control" id="notes" name="notes" rows="2"
                                                placeholder="Any medical conditions, preferences, etc."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">Save Member</button>
                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Membership & Payment -->
                    <div class="col-12 col-xl-5">
                        <div class="card card-success card-outline h-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="card-title m-0">Membership & Payment</div>
                                <span class="badge bg-success">Plan Details</span>
                            </div>

                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="plan" class="form-label">Membership Plan <span
                                                class="text-danger">*</span></label>
                                        <select id="plan" name="plan" class="form-select" required>
                                            <option value="" disabled selected>Select a plan</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Quarterly">Quarterly</option>
                                            <option value="Half-Yearly">Half-Yearly</option>
                                            <option value="Yearly">Yearly</option>
                                            <option value="Personal Training">Personal Training</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="startDate" class="form-label">Start Date <span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="startDate" name="start_date"
                                            required />
                                    </div>

                                    <div class="col-md-6">
                                        <label for="endDate" class="form-label">End Date</label>
                                        <input type="date" class="form-control" id="endDate" name="end_date" />
                                        <div class="form-text">Auto-calc in backend based on plan if left empty.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="amount" class="form-label">Amount (₹) <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text">₹</span>
                                            <input type="number" min="0" step="0.01" class="form-control" id="amount"
                                                name="amount" placeholder="e.g., 1999" required />
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="discount" class="form-label">Discount (₹)</label>
                                        <input type="number" min="0" step="0.01" class="form-control" id="discount"
                                            name="discount" placeholder="Optional" />
                                    </div>

                                    <div class="col-md-6">
                                        <label for="paymentMode" class="form-label">Payment Mode</label>
                                        <select id="paymentMode" name="payment_mode" class="form-select">
                                            <option value="Cash">Cash</option>
                                            <option value="UPI" selected>UPI</option>
                                            <option value="Card">Card</option>
                                            <option value="Net Banking">Net Banking</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="txnId" class="form-label">Transaction ID</label>
                                        <input type="text" class="form-control" id="txnId" name="transaction_id"
                                            placeholder="If applicable" />
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label d-block">Facilities</label>
                                        <div class="d-flex flex-wrap gap-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gymFloor"
                                                    name="facilities[]" value="Gym Floor" checked />
                                                <label class="form-check-label" for="gymFloor">Gym Floor</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cardio"
                                                    name="facilities[]" value="Cardio" />
                                                <label class="form-check-label" for="cardio">Cardio</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="groupClass"
                                                    name="facilities[]" value="Group Classes" />
                                                <label class="form-check-label" for="groupClass">Group Classes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="steam"
                                                    name="facilities[]" value="Steam/Sauna" />
                                                <label class="form-check-label" for="steam">Steam/Sauna</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="pt"
                                                    name="facilities[]" value="Personal Training" />
                                                <label class="form-check-label" for="pt">Personal Training</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="trainer" class="form-label">Assign Trainer</label>
                                        <select id="trainer" name="trainer" class="form-select">
                                            <option value="" selected>Not Assigned</option>
                                            <option value="T1">Rahul Sharma</option>
                                            <option value="T2">Neha Singh</option>
                                            <option value="T3">Amit Verma</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer d-flex gap-2">
                                <button type="submit" class="btn btn-success">Save Plan</button>
                                <button type="button" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
@endsection