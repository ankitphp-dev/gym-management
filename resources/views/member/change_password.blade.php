@extends('tutor.layouts.master')
@section('body')
<div class="page-content">
    <div class="container-fluid">
         @if (session('success'))
            <div class="alert alert-success" id="alert">{{ session('success') }}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-6 mx-auto" style="margin-top: 20px;">
                <h4 class="tw-mt-0 fw-bold tw-text-lg tw-text-neutral-700 ">Change Password</h4> 
  
                <div class="card shadow"> 
                    <div class="card-body"> 
                        <form action="{{ url('/tutor/changePassword') }}" method="POST" class="client-form" enctype="multipart/form-data">  
                            @csrf
                            <div class="row p-3"> 
                                <!-- Name --> 
                                <div class="col-md-12 mb-4">
                                    <label for="name" class="form-label">Email <span class="text-danger">*</span></label>  
                                    <input type="email" name="email" class="form-control" readonly  placeholder="Enter Email Name"  value="{{ $data->email }}">
                                    <input type="hidden" name="id"  value="">
                                     
                                    @error('email')
                                        <span class="text-danger">{{ $message  }}</span> 
                                    @enderror
                                </div>
                                
                                <div class="col-md-12 mb-4">
                                    <label for="phone" class="form-label">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id=""  name="password" value="{{ old('password') }}" placeholder="Enter new password">
                                    @error('password')
                                        <span class="text-danger">{{ $message  }}</span> 
                                    @enderror  
                                </div>  
                                <div class="col-md-12 mb-4">   
                                    <label for="phone" class="form-label">Confirm Password <span class="text-danger">*</span></label>  
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm new password"> 
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message  }}</span>
                                    @enderror
                                </div>
   
                                
                                
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                        <button class=" text-white border-0" style="padding: 10px 25px;background:#1c84ee;">
                            Update Password
                        </button>
                    </div>
                        </form>
                    </div>
                                                                    



                </div>
            </div>
        </div>
    </div>
</div>
<script>
setTimeout(function() {
  document.getElementById("alert").style.display = "none";
}, 3000);
</script>
@endsection