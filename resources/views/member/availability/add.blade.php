@extends('tutor.layouts.master')
@section('body')
<div class="page-content">
    <div class="container-fluid">
         @if (session('success'))
            <div class="alert alert-success" id="alert">{{ session('success') }}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-6 mx-auto" style="margin-top: 20px;">
                <h4 class="tw-mt-0 fw-bold tw-text-lg tw-text-neutral-700 ">Availability Save</h4> 
  
                <div class="card shadow"> 
                    <div class="card-body"> 
                       <form method="POST" action="{{ url('tutor/availability/save') }}">
                            @csrf
                            <div class="mb-3">
                                <label>Date</label>
                                <input type="date" name="date" value="{{ old('date') }}" class="form-control">
                                @error('date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Start Time</label>
                                <input type="time" name="start_time" value="{{ old(key: 'date') }}" class="form-control">
                                @error('start_time')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>End Time</label>
                                <input type="time" name="end_time" value="{{ old('date') }}" class="form-control">
                                @error('start_time')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save Availability</button>
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