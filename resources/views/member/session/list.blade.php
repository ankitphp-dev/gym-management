@extends('tutor.layouts.master')
@section('body')
    <style>
        table td:nth-child(2),
        table td:nth-child(3),
        table td:nth-child(4),
        table td:nth-child(6),
        table th:nth-child(7),
        table th:nth-child(8),
        table td:nth-child(11) {
            width: 100px;
            white-space: nowrap;
        }
    </style>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Sessions Manage</h4>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success" id="alert">{{ session('success') }}</div>
                    @endif
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-header d-flex justify-content-end align-items-center">
                            <form action="{{ url('tutor/session') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control me-2" placeholder="Search..."
                                    value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sr no</th>
                                            <th>Order Id</th>
                                            <th>Student Name</th>
                                            <th>Tutor Name</th>
                                            <th>Subject</th>
                                            <th>Date</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Created Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($sessions->count() > 0)
                                            <?php    $i = 1; ?>
                                            @foreach ($sessions as $session)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $session->order_id ?? 'NA' }}</td>
                                                    <td>{{ $session->student_name ?? 'NA' }}</td>
                                                    <td>{{ $session->tutor_name ?? 'NA' }}</td>
                                                    <td>{{ $session->subject ?? 'NA' }}</td>
                                                    <td>{{ $session->date ?? 'NA' }}</td>
                                                    <td>{{ $session->start_time ?? 'NA' }}</td>
                                                    <td>{{ $session->end_time ?? 'NA' }}</td>
                                                    <td>{{ $session->amount ?? 'NA' }}</td>
                                                    <td>
                                                        @if ($session->status == 'Pending')
                                                            <button class="btn btn-warning">{{ $session->status ?? 'NA' }}</button>
                                                        @elseif ($session->status == 'Success')
                                                            <button class="btn btn-success">{{ $session->status ?? 'NA' }}</button>
                                                        @else
                                                            <button class="btn btn-danger">{{ $session->status ?? 'NA' }}</button>
                                                        @endif
                                                    </td>
                                                    <td>{{ $session->created_at ?? 'NA' }}</td>
                                                </tr>
                                                <?php        $i++; ?>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="11" class="text-center py-4">No entries found</td>
                                            </tr>
                                        @endif
                                    </tbody>

                                </table>
                                <div class="d-flex justify-content-end mt-3">
                                    {!! $sessions->withQueryString()->links('vendor.pagination.custom') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


    </div>

    <script>
        setTimeout(function () {
            document.getElementById("alert").style.display = "none";
        }, 3000);
    </script>
@endsection