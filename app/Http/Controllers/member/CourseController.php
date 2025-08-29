<?php

namespace App\Http\Controllers\tutor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class CourseController extends Controller
{
    public function index(Request $request){
        $query=Course::query();
       if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
            $q->where('title', 'LIKE', "%{$search}%")
                ->orWhere('name', 'LIKE', "%{$search}%");
            });
        }
        $courses = $query->paginate(10);
        return view('tutor.course.list',compact('courses'));
    }

    public function add(){
        return view('tutor.course.add');
    }
    
    public function save(Request $request){
     
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'designation' => 'required', 
            'price' => 'required',
            'description' => 'required',
            'banner' => 'required|mimes:jpg,png,jpeg,webp',
            'teacher_image' => 'required|mimes:jpg,png,jpeg,webp',
        ]);

        $slug = Str::slug($request->title);        
        $banner='';
        $teacher_image='';
        if($request->hasFile('banner')){
            $file=$request->file('banner');
            $banner=date('Y-m-d-his').'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/course/'),$banner);
        }
        if($request->hasFile('teacher_image')){
            $file=$request->file('teacher_image');
            $teacher_image=date('Y-m-d-his').'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/course/'),$teacher_image);
        }
        $course = new Course();
        $course->title = $request->title;
        $course->name = $request->name; 
        $course->description = $request->description;
        $course->designation = $request->designation;
        $course->price = $request->price;
        $course->slug = $slug;
        $course->banner = $banner;
        $course->teacher_image = $teacher_image;
        $course->created_at = Carbon::now('Asia/Kolkata');
        $course->updated_at = Carbon::now('Asia/Kolkata');
        $course->save();

        return redirect()->to('admin/course')->with('success', 'Course Add successfully!');  
    }
    public function delete($id){
        $course = Course::findOrFail($id);
        $imagePath = public_path('uploads/course/' . $course->banner);
        $teacher = public_path('uploads/course/' . $course->teacher_image);
        if ($course->banner && File::exists($imagePath)) {
            File::delete($imagePath);
        }
        if ($course->teacher_image && File::exists($teacher)) {
            File::delete($teacher);
        }
        $course->delete();
        return back()->with('success','Course Deleted Successfully!.');
    }

    public function edit($id){
        $course = Course::findOrFail($id);
        return view('tutor.course.edit',compact('course'));
    } 
    public function update(Request $request){
     
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'designation' => 'required', 
            'price' => 'required', 
            'description' => 'required', 
            'banner' => 'mimes:jpg,png,jpeg,webp',
            'teacher_image' => 'mimes:jpg,png,jpeg,webp', 
        ]);
        $slug = Str::slug($request->title);
        $course = Course::findOrFail($request->id);
        $banner=$course->banner;
        $teacher_image=$course->teacher_image;
        if($request->hasFile('banner')){
            $file=$request->file('banner');
            $banner=date('Y-m-d-his').'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/course/'),$banner);
        }
        if($request->hasFile('teacher_image')){
            $file=$request->file('teacher_image');
            $teacher_image=date('Y-m-d-his').'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/course/'),$teacher_image);
        }
        $course->title = $request->title;
        $course->name = $request->name; 
        $course->description = $request->description;
        $course->designation = $request->designation;
        $course->price = $request->price;
        $course->status = $request->status;
        $course->slug = $slug;
        $course->banner = $banner;
        $course->teacher_image = $teacher_image;
        $course->updated_at = Carbon::now('Asia/Kolkata');
        $course->update();

        return redirect()->to('admin/course')->with('success', 'Course Add successfully!');  
    }
}
