<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function aboutUs(){
        return view('user.aboutUs');
    }
    public function classes(){
         return view('user.class');
    }
    public function services(){
         return view('user.service');
    }
    public function teams(){
         return view('user.team');
    }
    public function contact(){
         return view('user.contact');
    }
}
