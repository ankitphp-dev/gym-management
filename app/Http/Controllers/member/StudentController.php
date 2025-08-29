<?php

namespace App\Http\Controllers\tutor;

use App\Http\Controllers\Controller;
use App\Mail\StudentApprovel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $query = User::where('role', 'student');
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%");
            });
        }
           $users = $query->paginate(10);
        return view('tutor.student.list', compact('users'));
    }

    public function approved($id){
        $user=User::where('id',$id)->first();
        $user->verify = 'Approved';
        $user->update();
        $data=$user->name;
        Mail::to($user->email)->send(new StudentApprovel($data));

        return back()->with('success','Student Approved Successfully!.');
    }
    public function reject($id){
        $user=User::where('id',$id)->first();
        $user->verify = 'Rejected';
        $user->update();
        return back()->with('success','Student Rejected Successfully!.');
    }
}
