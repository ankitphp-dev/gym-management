<?php

namespace App\Http\Controllers\tutor;

use App\Http\Controllers\Controller;
use App\Models\Availability;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AvailabilityController extends Controller
{

    public function index(Request $request)
    {
        $id=session('tutor_id');
        $query = DB::table('tutor_availability')
                ->join('tbl_tutor', 'tutor_availability.tutor_id', '=', 'tbl_tutor.id')
                ->where('tutor_id',$id)
                ->select('tutor_availability.*', 'tbl_tutor.name as tutor_name');

            if ($request->has('search') && !empty($request->search)) {
                $search = $request->search;
                $query->where(function($q) use ($search) {
                    $q->where('tbl_tutor.name', 'like', '%' . $search . '%')
                    ->orWhere('tutor_availability.date', 'like', '%' . $search . '%');
                });
            }

        $availabilitys = $query->paginate(10)->withQueryString();

        return view('tutor.availability.list', compact('availabilitys'));
    }


    
    public function add(){
        return view('tutor.availability.add');
    }

    public function save(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        $tutor_id=session('tutor_id');

            $avail=new Availability();
            $avail->tutor_id = $tutor_id;
            $avail->date = $request->date;
            $avail->start_time = $request->start_time;
            $avail->end_time = $request->end_time;
            $avail->created_at = Carbon::now('Asia/Kolkata');
            $avail->updated_at = Carbon::now('Asia/Kolkata');
            $avail->save();
        return redirect()->to('tutor/availability')->with('success', 'Availability Add successfully!');  
    }

    public function delete($id){
        $blog = Availability::findOrFail($id);
        $blog->delete();
        return back()->with('success','Availability Deleted Successfully!.');
    }

    public function edit($id){
        $availability = Availability::findOrFail($id);
        return view('tutor.availability.edit',compact('availability'));
    } 
    public function update(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

            $avail=Availability::findOrFail($request->id);
            $avail->tutor_id = $avail->tutor_id;
            $avail->date = $request->date;
            $avail->start_time = $request->start_time;
            $avail->end_time = $request->end_time;
            $avail->updated_at = Carbon::now('Asia/Kolkata');
            $avail->update();
        return redirect()->to('tutor/availability')->with('success', 'Availability updated successfully!');  
    }

    public function getTutorAvailability($tutorId)
    {
        $slots = DB::table('tutor_availability')
            ->where('tutor_id', $tutorId)
            ->select('id', 'date', 'start_time', 'end_time', 'is_booked')
            ->get();

        $events = [];

        foreach ($slots as $slot) {
            $events[] = [
                'id'    => $slot->id,
                'title' => $slot->is_booked ? 'Booked' : 'Available',
                'start' => $slot->date . 'T' . $slot->start_time,
                'end'   => $slot->date . 'T' . $slot->end_time,
                'color' => $slot->is_booked ? '#ff4d4d' : '#28a745'  // 🔴 लाल = booked, 🟢 हरा = available
            ];
        }

        return response()->json($events);
    }



}
