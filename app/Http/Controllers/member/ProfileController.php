<?php

namespace App\Http\Controllers\tutor;

use App\Http\Controllers\Controller;
use App\Models\Tutor;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $id=session('tutor_id');
        $tutor = Tutor::findOrFail($id);
        // dd($id);
        return view('tutor.profile',compact('tutor'));
    }

    public function edit($id){
        $tutor=Tutor::findOrFail($id);
        return view('tutor.edit-profile',compact('tutor'));
    }

    public function update(Request $request)
    {
        $tutor = Tutor::findOrFail($request->id);

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:tbl_tutor,email,' . $request->id,
            'phone' => 'nullable|digits:10',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $tutor->name = $request->name;
        $tutor->email = $request->email;
        $tutor->phone = $request->phone;

        if ($request->hasFile('profile_picture')) {
            if ($tutor->profile_picture && file_exists(public_path('uploads/tutor/' . $tutor->profile_picture))) {
                unlink(public_path('uploads/tutor/' . $tutor->profile_picture));
            }
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/tutor'), $filename);
            $tutor->profile_picture = $filename;
        }

        $tutor->save();

        return redirect()->to('tutor/profile')->with('success', 'Profile updated successfully!');
    }
}
