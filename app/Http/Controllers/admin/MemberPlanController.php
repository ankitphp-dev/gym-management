<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembershipPlan;
use Illuminate\Support\Facades\Validator;

class MemberPlanController extends Controller
{
       public function list(){
        return view('admin.plan.list');
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

        // Step 2: Run Validator
        $validator = Validator::make($request->all(), $rules);

        // Step 3: If Validation Fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)   // errors ko session me store karega
                ->withInput();             // old() values preserve karega
        }

        // Step 4: If Validation Passes → Save Plan
        MembershipPlan::create($validator->validated());

        return redirect()->back()->with('success', 'New plan added successfully!');
    }
}
