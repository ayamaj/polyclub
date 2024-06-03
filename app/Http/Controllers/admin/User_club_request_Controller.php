<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class User_club_request_Controller extends Controller
{
    public function index()
    {
        $users = User::all();
         return view('admin.user_club_request.index', compact('users'));
    }
}
