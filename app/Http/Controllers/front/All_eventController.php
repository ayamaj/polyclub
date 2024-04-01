<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class All_eventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('all_event', compact('events'));
    }
}
