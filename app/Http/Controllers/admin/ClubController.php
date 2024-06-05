<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClubRequest;
use App\Models\Club;
use App\Models\Form;
use App\Models\User;
use App\Notifications\Accept_User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ClubController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $clubs = Club::all();
        return view('admin.clubs.index', compact('clubs','user'));
    }



    public function index_one_club(Club $club)
    {
        return view('admin.clubs.index_one_club', compact('club'));
    }

    public function edit_one_club($id)
    {
        $club = Club::findOrFail($id);
        return view('admin.clubs.index_one_club', ['club' => $club, 'club_id' => $id]);
    }

    public function create()
    {
        return view('admin.clubs.create');
    }

    public function edit(string $id)
    {
        $club = Club::find($id);
        return view('admin.clubs.edit', compact('club'));
    }

    public function store(ClubRequest $request)
    {
        //  dd($request->all());
        $avatarName = '/uploads/' . $request->name . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $avatarName, 60);

        Club::create([
            'name' => $request->name,
            'description' => $request->description,
            'president' => $request->president,
            'image' => $avatarName,
            'date' => $request->date,
        ]);
        return redirect()->route('admin.club.index')->with('status', 'The club has been successfully added');
    }

    public function delete($id)
    {
        Club::find($id)->delete();
        return redirect()->route('admin.club.index')->with('status', 'The club has been successfully deleted');
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'president' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
            'date' => 'required|string',
        ]);

        $avatarName = '/uploads/' . $request->name . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $avatarName, 60);

        Club::find($request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'president' => $request->president,
            'image' => $avatarName,
            'date' => $request->date,
        ]);

        return redirect()->route('admin.club.index')->with('status', 'The club has been successfully modified.');
    }

    public function search(Request $request)
    {
        $clubs = Club::where('name', 'like', '%' . $request->search . '%')->get();
        return view('admin.clubs.index', compact('clubs'));
    }

    // public function update(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string',
    //         'description' => 'required|string',
    //     ]);
    //     $club = Club::find($request->id);
    //     $club->name = $request->name;
    //     $club->description = $request->description;

    //     $club->save();
    //     return redirect()->route('admin.club.index')->with('status', 'le club  a bien été modifié avec succès');
    // }



    public function update2(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'clubs' => 'required|array|min:1', // Ensure at least one club is selected
            'clubs.*' => 'exists:clubs,id',
        ]);

        // Get the authenticated user
        $user = Auth::user();


        if ($user) {
            // Sync clubs
            $user->clubs()->syncWithoutDetaching($request->clubs);

            // Delete the form entry if it exists
            if ($form = Form::find($request->id)) {
                $form->delete();
            }

            // Send notification (if needed)
            // Notification::route('mail', [
            //     $user->email => $user->name,
            // ])->notify(new Accept_User());

            // Redirect back with status message
            return redirect()->route('admin.club.index')->with('status', 'You have successfully joined the club(s).');
        } else {
            return redirect()->route('login')->with('error', 'You need to be logged in to join a club.');
        }
    }


    }









