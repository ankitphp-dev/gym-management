@extends('tutor.layouts.master')
@section('body')
<div class="page-content">
    <div class="container-fluid">
        <div class="container">
        @if (session('success'))
            <div class="alert alert-success" id="alert">{{ session('success') }}</div>
        @endif
            <h3>All Notifications</h3>
            <hr>

            @if($notifications->count() > 0)
                @foreach($notifications as $notification)
                    <div class="alert alert-info">
                        <strong>{{ $notification->data['message'] ?? 'No message' }}</strong>
                        <br>
                        <small>Payment ID: {{ $notification->data['payment_id'] ?? '' }}</small>
                        <br>
                        <small class="text-danger"><i>{{ $notification->created_at->diffForHumans() }}</i></small>

                        @if(is_null($notification->read_at))
                            <div class="d-flex gap-4 mt-2">
                                {{-- Mark as Read --}}
                                <form action="{{ url('admin/notifications', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-success">Mark as Read</button>
                                </form>&nbsp;&nbsp;

                                {{-- Mark All as Read --}}
                                <form action="{{ url('tutor/notifications/read-all') }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-primary ms-2">Mark All as Read</button>
                                </form>
                            </div>
                        @endif
                    </div>
                @endforeach
            @else
                <p>No notifications found.</p>
            @endif
        </div>
    </div>
</div>
<script>
    setTimeout(function() {
        document.getElementById("alert").style.display = "none";
    }, 3000);
    </script>
@endsection
