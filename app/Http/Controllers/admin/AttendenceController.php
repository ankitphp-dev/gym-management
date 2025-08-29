<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
      public function attendence(){
        return view('admin.attendence.list');
    }
}
