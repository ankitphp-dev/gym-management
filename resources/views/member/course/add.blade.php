@extends('tutor.layouts.master')
@section('body')
    <div class="page-content">  
        <div class="container-fluid"> 
        <div class="row justify-content-center"> 
            <div class="col-md-6 mx-auto" style="margin-top: 20px;"> 
                <h4 class="tw-mt-0 fw-bold tw-text-lg tw-text-neutral-700 ">Add New Course</h4>
                <div class="card shadow">   
                    <div class="card-body">
                        <form action="{{ url('tutor/course/save') }}" method="POST" class="client-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row p-3">
                                <div class="col-md-12 mb-4">
                                    <label for="name" class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ old('title') }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message  }}</span>
                                    @enderror
                                </div>
                                
                                <div class="col-md-12 mb-4">
                                    <label for="phone" class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id=""  name="name" value="{{ old('name') }}" placeholder="Enter Name">
                                    @error('name')
                                        <span class="text-danger">{{ $message  }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="phone" class="form-label">Designation <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id=""  name="designation" value="{{ old('designation') }}">
                                    @error('designation')
                                        <span class="text-danger">{{ $message  }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="phone" class="form-label">Price <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id=""  name="price" value="{{ old('price') }}">
                                    @error('price')
                                        <span class="text-danger">{{ $message  }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="phone" class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control" rows="5" cols="5"  id=""></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message  }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="phone" class="form-label">Teacher Image <span class="text-danger">*</span></label>
                                    <input type="file"  name="teacher_image" min="1" class="form-control" value="{{ old('teacher_image') }}">
                                    @error('teacher_image')
                                        <span class="text-danger">{{ $message  }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="phone" class="form-label">Banner<span class="text-danger">*</span></label>
                                    <input type="file"  name="banner" min="1" class="form-control" value="{{ old('banner') }}">
                                    @error('banner') 
                                        <span class="text-danger">{{ $message  }}</span>
                                    @enderror
                                </div>
   
                                
                                
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                        <button class="bg-primary text-white border-0" style="padding: 10px 25px;">
                            Save
                        </button>
                    </div>
                        </form>
                    </div>
           
                </div>
            </div>
        </div>
    </div>
</div>

@endsection