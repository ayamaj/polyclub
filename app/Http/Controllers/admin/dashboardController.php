<?php

namespace App\Http\Controllers\admin;

use App\Models\Event;
use App\Models\Club;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $clubs = Club::all();
        return view('admin.dashboard', compact('events', 'clubs'));
    }
}
