<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Kolkata');
        $users = DB::select('select * from users');
        return view('home' , compact('users'));
    }
   
}
