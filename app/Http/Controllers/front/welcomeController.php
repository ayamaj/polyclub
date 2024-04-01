<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Event;

class welcomeController extends Controller
{
    public function index()
    {
        $clubs = Club::all();
        $events = Event::all();
        return view('welcome', compact('clubs','events'));
    }

}
