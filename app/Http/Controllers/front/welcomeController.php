<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormulaireRequest;
use App\Models\Club;
use App\Models\Event;
use App\Models\Form;
use App\Models\Role;

class welcomeController extends Controller
{
    public function home()
    {
        $clubs = Club::all();
        $events = Event::all();
        return view('welcome', compact('clubs','events'));
    }
    //events method
    public function clubs()
    {
        $clubs = Club::all();
        return view('all_club', compact('clubs'));
    }
    //clubs events
    public function events()
    {
        $events = Event::all();
        return view('all_event', compact('events'));
    }
    //inscription dans un club
    public function inscription()
    {
        $clubs  = Club::all();
        $roles= Role::all();
        return view('inscription',compact('roles','clubs'));
    }
    public function store(FormulaireRequest $request)
    {
        // dd($request->all());
        Form::create([
            'name'=> $request->name,
            'number'=> $request->number,
            // 'role_id'=> $request->role_id,
            'class'=> $request->class,
            'email'=> $request->email,
            'password'=> $request->password,

              ]);
        return redirect()->route('home')->with('status', 'Confirm Inscription');
    }

    // ******

       //events method
       public function one_club()
       {
           $clubs = Club::all();
           return view('one_club', compact('clubs'));
       }
       //clubs events
       public function one_event()
       {
           $events = Event::all();
           return view('one_event', compact('events'));
       }
}
