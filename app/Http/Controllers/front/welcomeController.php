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
        $events_carousel = Event::all();
        $clubs = Club::latest()->take(3)->get();
        $events = Event::latest()->take(2)->get();
        return view('welcome', compact('clubs', 'events', 'events_carousel'));
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
        $roles = Role::all();
        return view('inscription', compact('roles', 'clubs'));
    }
    public function store(FormulaireRequest $request)
    {
        //  dd($request->all());
        $form = Form::create([
            'name' => $request->name,
            'number' => $request->number,
            // 'role_id'=> $request->role_id,
            'class' => $request->class,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $form->clubs()->sync($request->club_id);

        return redirect()->route('home')->with('status', 'You Successfully joined');
    }

    //events method
    public function one_club(Club $club)
    {
        return view('one_club', compact('club'));
    }
    //clubs events
    public function one_event(Event $event)
    {
        //    $events = Event::all();
        return view('one_event', compact('event'));
    }
    //        public function show($id)
    // {
    //     // Assuming $id is the club ID
    //     return view('one_club', ['club_id' => $id]);
    // }

    public function edit($id)
    {
        $club = Club::findOrFail($id);
        return view('one_club', ['club' => $club, 'club_id' => $id]);
    }
}
