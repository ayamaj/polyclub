<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resource;
use App\Models\User;
use App\Models\Club;
use App\Http\Requests\ResourceRequest;
class ResourceController extends Controller
{
    public function index()
    {
         $resources = resource::all();
         return view('admin.resources.index', compact('resources'));
    }
    public function create()
    {
        $users = User::all();
        $clubs = Club::all();
        $resources = resource::all();
        return view('admin.resources.create',compact('resources','users','clubs'));
    }

    public function edit(Resource $resource)
{
    $users = User::all();
    $clubs = Club::all();
    return view('admin.resources.edit', compact('resource','users','clubs'));
}

    public function delete($id){
        Resource::find($id)->delete();
        return redirect()->route('admin.resource.index')->with('status','the person has been deleted ');
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'message' => 'required|string',
            'status'=> 'required|string',
            'user_id' => 'required|string',
            'club_id' => 'required|string',

        ]);
        $resource = Resource::create([
            'message'=> $request->message,
            'status'=> $request->status,
            'user_id'=> $request->user_id,
            'club_id'=> $request->club_id,

        ]);
        $resource->clubs()->sync($request->clubs);
        //delete the request account

        Resource::find($request->id)->delete();

        return redirect()->route('admin.user.index')->with('status', 'the person contact details have been modified');
    }

    // public function search(Request $request)
    // {
    //     $forms = Form::where('name', 'like', '%' . $request->search. '%')->get();
    //      return view('admin.forms.index', compact('forms'));
    // }

    public function store(ResourceRequest $request)
    {
        //  dd($request->all());
       Resource::create([
            'message'=> $request->message,
            // 'status'=> $request->status,
            // 'user_id'=> $request->user_id,
            // 'club_id'=> $request->club_id,

        ]);
            return redirect()->route('admin.resource.index')->with('status', 'le permission a bien été ajouté avec succès');
       }
}
