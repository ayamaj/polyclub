<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\AdminRequest;
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // $users = User::all();
        // return view('admin.users.index', compact('users'));
         $admins = Admin::with('role','clubs')->get();
         return view('admin.admins.index', compact('admins'));
    }


    public function create()
    {
        $roles= Role::all();
        return view('admin.admins.create',compact('roles'));
    }

    // public function edit($id)
    // {
    //     $roles= Role::all();
    //     $user = User::find($id);
    //     return view('admin.users.edit', compact('user, roles'));
    // }

    public function edit(Admin $admin)
{
    $roles = Role::all();
    return view('admin.users.edit', compact('user', 'roles'));
}

    public function store(AdminRequest $request)
    {
// dd($request->all());
        $avatarName = '/uploads/'. $request->name . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $avatarName,60);

       Admin::create([
        'name'=> $request->name,
        'role_id'=> $request->role_id,
        'image' => $avatarName,
        'email'=> $request->email,
        'password'=> $request->password,

    ]);

         return redirect()->route('admin.user.index')->with('status', 'le personne a bien été ajouté avec succès');
        }


    public function delete($id){
           Admin::find($id)->delete();
           return redirect()->route('admin.admin.index')->with('status','le personne a bien ete supprime ');
       }

    public function update(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'role_id'=> 'required|string',
            'email' => 'required|string',
            'password' => 'required|min:8',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
        ]);

        $avatarName = '/uploads/'. $request->name . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $avatarName,60);


Admin::find($request->id)->update([
            'name'=> $request->name,
            'role_id'=> $request->role_id,
            'image' => $avatarName,
            'email'=> $request->email,
            'password'=> $request->password,

        ]);

        return redirect()->route('admin.user.index')->with('status', 'le personne  a bien été modifié avec succès');
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
}
