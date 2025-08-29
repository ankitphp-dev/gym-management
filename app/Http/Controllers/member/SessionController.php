<?php

namespace App\Http\Controllers\tutor;

use App\Http\Controllers\Controller;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\DatabaseNotification;

use Illuminate\Support\Facades\DB;
class SessionController extends Controller
{
    public function index(Request $request){
        $query = DB::table('tbl_session')
            ->join('tbl_tutor', 'tbl_session.tutor', '=', 'tbl_tutor.id')
            ->join('tbl_course', 'tbl_session.subject_id', '=', 'tbl_course.id')
            ->join('users', 'tbl_session.student_id', '=', 'users.id')
            ->where('tutor',session('tutor_id'))
            ->select(
                'tbl_session.*',
                'tbl_tutor.name as tutor_name',
                'tbl_course.designation as subject',
                'users.name as student_name'
            );
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('users.name', 'like', '%' . $search . '%')
                ->orWhere('tbl_tutor.name', 'like', '%' . $search . '%')
                ->orWhere('tbl_session.order_id', 'like', '%' . $search . '%')
                ->orWhere('tbl_session.status', 'like', '%' . $search . '%');
            });
        }
        $sessions=$query->paginate(10)->withQueryString();
        return view('tutor.session.list',compact('sessions'));
    }

    public function notification()
    {
        
        if (session('tutor_id')) { 
            $tutor = Tutor::find(session('tutor_id')); 
            $notifications = $tutor ? $tutor->notifications : collect(); 
        }          
        else { 
            $notifications = Auth::user()->notifications ?? collect(); 
        }

        return view('tutor.notifications', compact('notifications')); 
    }

    public function markAsRead($id)
    {
        $notification = DatabaseNotification::findOrFail($id);
        $notification->markAsRead(); 

        return back()->with('success', 'Notification marked as read!'); 
    }

    public function markAllAsRead()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->user()->unreadNotifications->markAsRead();
        }
        elseif (session('tutor_id')) {
            $tutor = Tutor::find(session('tutor_id'));
            if ($tutor) {
                $tutor->unreadNotifications->markAsRead();
            }
        }
        elseif (Auth::check()) {
            Auth::user()->unreadNotifications->markAsRead();
        }
        return back()->with('success', 'All notifications marked as read!');
    }
}
