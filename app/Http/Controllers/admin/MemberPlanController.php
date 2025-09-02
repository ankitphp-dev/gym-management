<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembershipPlan;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Event\Telemetry\MemoryMeter;

class MemberPlanController extends Controller
{
    public function list() {
        $membership = MembershipPlan::paginate(10);
        return view('admin.plan.list', compact('membership'));
    }

     public function Add(){
        return view('admin.plan.add');
    }

    public function addNewPlan(Request $request)
    {
        // Step 1: Validation Rules
        $rules = [
            'plan_name'   => 'required|string|max:255',
            'duration'    => 'required|integer',
            'price'       => 'required|numeric',
            'discount'    => 'nullable|numeric',
            'status'      => 'required',
            'description' => 'nullable|string',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)  
                ->withInput();         
        }
        MembershipPlan::create($validator->validated());

        return redirect()->route('plan.list')->with('success', 'New plan added successfully!');
    }


public function deletePlan($id)
{
    $memberPlan = MembershipPlan::findOrFail($id);
    $memberPlan->delete();
    return redirect()->route('plan.list')->with('danger', 'Membership plan deleted successfully.');
}

}
