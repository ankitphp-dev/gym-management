<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberListController extends Controller
{
    public function Member(){
        return view('admin.user.list');
    }
     public function Add(){
        return view('admin.user.add');
    }
   
}
