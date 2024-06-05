<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function edit(string $id)
    {
        $event = Event::find($id);
        return view('admin.events.edit', compact('event'));
    }

    public function store(EventRequest $request)
    {
        $avatarName = '/uploads/' . $request->titre . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $avatarName, 60);
        $avatarName2 = '/uploads/' . $request->titre . '2' . '.' . $request->image_club->getClientOriginalExtension();
        $request->image_club->move(public_path('uploads'), $avatarName2, 60);

        Event::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'image' => $avatarName,
            'image_club' => $avatarName2,
            'date' => $request->date,
            'duration' => $request->duration,
            'place' => $request->place,
            'link' => $request->link,
        ]);
        return redirect()->route('admin.event.index')->with('status', 'The event has been successfully added.');
    }

    public function delete($id)
    {
        Event::find($id)->delete();
        return redirect()->route('admin.event.index')->with('status', 'The event has been successfully deleted');
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image_club' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'date' => 'required|string',
            'duration' => 'required|string',
            'place' => 'required|string',
            'link' => 'required|string',
        ]);

        $avatarName = '/uploads/' . $request->titre . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $avatarName, 60);
        $avatarName2 = '/uploads/' . $request->titre  . '2' . '.' . $request->image_club->getClientOriginalExtension();
        $request->image_club->move(public_path('uploads'), $avatarName2, 60);

        Event::find($request->id)->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'image' => $avatarName,
            'image_club' => $avatarName2,
            'date' => $request->date,
            'duration' => $request->duration,
            'place' => $request->place,
            'link' => $request->place,
        ]);
        return redirect()->route('admin.event.index')->with('status', 'The event has been successfully modified');
    }

    public function search(Request $request)
    {
        $events = Event::where('titre', 'like', '%' . $request->search . '%')->get();
        return view('admin.events.index', compact('events'));
    }
}
