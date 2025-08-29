@extends('tutor.layouts.master')
@section('body')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card shadow">
                    <div class="card-body">
                        <h4>Edit Profile</h4>
                        <form action="{{ url('tutor/profile/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ old('name', $tutor->name) }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ old('email', $tutor->email) }}" readonly class="form-control">
                                <input type="hidden" name="id" value="{{ $tutor->id }}"  class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" value="{{ old('phone', $tutor->phone) }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Address</label>
                                <textarea name="address" class="form-control">{{ old('address', $tutor->address) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>City</label>
                                <input type="text" name="city" value="{{ old('city', $tutor->city) }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>State</label>
                                <input type="text" name="state" value="{{ old('state', $tutor->state) }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Pincode</label>
                                <input type="text" name="pincode" value="{{ old('pincode', $tutor->pincode) }}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Profile Picture</label><br>
                                <input type="file" name="profile_picture" class="form-control">
                                @if($tutor->profile_picture)
                                    <img src="{{ asset('uploads/tutor/'.$tutor->profile_picture) }}" class="mt-2 rounded" width="100">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update Profile</button>
                            <a href="{{ url('tutor/profile') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
