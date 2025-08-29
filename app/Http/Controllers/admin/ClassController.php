<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
      public function list(){
        return view('admin.class.list');
    }
     public function Add(){
        return view('admin.class.add');
    }
   
}
