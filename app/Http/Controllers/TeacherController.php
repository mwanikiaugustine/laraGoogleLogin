<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public  function index()
    {
        $teachers= DB::table('users')->where('role','teacher')->get();
        
       return view('teachers/teachers',['teachers'=>$teachers]);
    }
}
