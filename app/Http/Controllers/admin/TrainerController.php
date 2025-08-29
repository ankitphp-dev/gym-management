<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
       public function list(){
        return view('admin.trainer.list');
    }
     public function Add(){
        return view('admin.trainer.add');
    }
   
}
