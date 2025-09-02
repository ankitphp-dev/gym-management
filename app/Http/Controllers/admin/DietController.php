<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Workout;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DietController extends Controller
{
    public function list(){
        return view('admin.diet.list');
    }


     public function add(){

        return view('admin.diet.adddiet');
    } 


    public function worklist(){
        $workout = Workout::all();
        return view('admin.diet.workout', compact('workout'));
    }

    public function addwork(){
        return view('admin.diet.addworkout');
    }

    public function addNewWorkout(Request $request){
        $validateWorkout = Validator::make($request->all(), [
            'workout_name'   => 'required|string|max:255',
            'category_name' => 'required|string|max:255',
            'duration'       => 'required|integer|min:1',
            'status'         => 'required|in:active,inactive',
            'workout_image'  => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validateWorkout->fails()) {
            return redirect()->back()
                ->withErrors($validateWorkout)
                ->withInput();
        }

        $imageName = null;
        if ($request->hasFile('workout_image')) {
            $image      = $request->file('workout_image');
            $imageName  = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/workouts'), $imageName);
        }




        

        $workout = new Workout();
        $workout->workout_name  = $request->workout_name;
        $workout->category_name = $request->category_name;
        $workout->duration      = $request->duration;
        $workout->status        = $request->status;
        $workout->workout_image = $imageName;
        $workout->save();

        return redirect()->route('workout.list')
            ->with('success', 'Workout created successfully!');
    }

    public function deleteWorkout($id)
    {
        $workout = Workout::findOrFail($id);
        if ($workout->workout_image && file_exists(public_path('uploads/workouts/' . $workout->workout_image))) {
            unlink(public_path('uploads/workouts/' . $workout->workout_image));
        }
        $workout->delete();
        return redirect()->route('workout.list')->with('danger', 'Workout deleted successfully!');
    }

    public function addNewDiet(Request $request){
        $data = $request->all();
        var_dump($data);exit;
    }
}