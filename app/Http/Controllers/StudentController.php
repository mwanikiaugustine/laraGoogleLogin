<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
class StudentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public  function index()
    {
        $students= DB::table('users')->where('role','student')->get();
        
       return view('students/student',['students'=>$students]);
    }
    
}
