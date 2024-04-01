<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClubRequest;
use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{

    public function index()
    {
        $clubs = Club::all();
        return view('admin.clubs.index', compact('clubs'));
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
         $avatarName = '/uploads/'. $request->name . '.' . $request->image->getClientOriginalExtension();
         $request->image->move(public_path('uploads'), $avatarName,60);

        Club::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'president'=> $request->president,
            'image' => $avatarName,
            'date'=> $request->date,

              ]);
        return redirect()->route('admin.club.index')->with('status', 'le club a bien été ajouté avec succès');
    }

    public function delete($id){
        Club::find($id)->delete();
        return redirect()->route('admin.club.index')->with('status','le club a bien ete supprime ');
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

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'president'=> 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
            'date'=> 'required|string',

        ]);

        $avatarName = '/uploads/'. $request->name . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $avatarName,60);


          Club::find($request->id)->update([
            'name'=> $request->name,
            'description'=> $request->description,
            'president'=> $request->president,
            'image' => $avatarName,
            'date'=> $request->date,

        ]);

        return redirect()->route('admin.club.index')->with('status', 'le club  a bien été modifié avec succès');
    }


}
