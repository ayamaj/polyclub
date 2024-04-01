<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;

class All_clubController extends Controller
{
    public function index()
    {
        $clubs = Club::all();
        return view('all_club', compact('clubs'));
    }
}
