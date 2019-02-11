<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public  function update()
    {
        $user=User::find(Auth::User()->id);
        $user->role= request('role');
        $user->save();
        return redirect('home');
    }
}
