<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
        return view('admin.diet.workout');
    }

    public function addwork(){
        return view('admin.diet.addworkout');
    }

}