<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Club;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();
        // return view('admin.users.index', compact('users'));
         $users = User::with('role','clubs')->get();
         return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        $clubs  = Club::all();
        $roles= Role::all();
        return view('admin.users.create',compact('roles','clubs'));
    }

    // public function edit($id)
    // {
    //     $roles= Role::all();
    //     $user = User::find($id);
    //     return view('admin.users.edit', compact('user, roles'));
    // }

    public function edit(User $user)
{
    $roles = Role::all();
    $clubs = Club::all();
    return view('admin.users.edit', compact('user', 'roles','clubs'));
}


    public function store(UserRequest $request)
    {
    //  dd($request->all());
        // $avatarName = '/uploads/'. $request->name . '.' . $request->image->getClientOriginalExtension();
        // $request->image->move(public_path('uploads'), $avatarName,60);

        User::create([
        'name'=> $request->name,
        'number'=> $request->number,
        'role_id'=> $request->role_id,
        'class'=> $request->class,
        // 'image' => $avatarName,
        'email'=> $request->email,
        'password'=> $request->password,

    ]);

         return redirect()->route('admin.user.index')->with('status', 'le personne a bien été ajouté avec succès');
        }


    public function delete($id){
           User::find($id)->delete();
           return redirect()->route('admin.user.index')->with('status','le personne a bien ete supprime ');
       }

    public function update(Request $request)
    {
        if($request->password){
            $request->validate([
                'name' => 'required|string',
                'number'=> 'required|string',
                'role_id'=> 'required|string',
                'cin' => 'required|string',
                'class' => 'required|string',
                'email' => 'required|string',
                'password' => 'required|min:8',
                'image' => 'required|mimes:jpeg,png,jpg,gif',
            ]);
            $avatarName = '/uploads/'. $request->name . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $avatarName,60);


               User::find($request->id)->update([
                'name'=> $request->name,
                'number'=> $request->number,
                'role_id'=> $request->role_id,
                'cin'=> $request->cin,
                'class'=> $request->class,
                'image' => $avatarName,
                'email'=> $request->email,
                'password'=> $request->password,

            ]);
        }else{

          $request->validate([
            'name' => 'required|string',
            'number'=> 'required|string',
            'role_id'=> 'required|string',
            'cin' => 'required|string',
            'class' => 'required|string',
            'email' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
        ]);
        $avatarName = '/uploads/'. $request->name . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $avatarName,60);


           User::find($request->id)->update([
            'name'=> $request->name,
            'number'=> $request->number,
            'role_id'=> $request->role_id,
            'cin'=> $request->cin,
            'class'=> $request->class,
            'image' => $avatarName,
            'email'=> $request->email,
            'password'=> $request->password,

        ]);
        }


        return redirect()->route('admin.user.index')->with('status', 'le personne  a bien été modifié avec succès');
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function search(Request $request)
    {
        // $users = User::all();
        // return view('admin.users.index', compact('users'));
        $users = User::where('name', 'like', '%' . $request->search. '%')->get();
         return view('admin.users.index', compact('users'));
    }
}
***********************
public function index()
    {
        // $users = User::all();
        // return view('admin.users.index', compact('users'));
         $users = User::with('role','clubs')->get();
         return view('admin.users.index', compact('users'));
    }
    public function create()
    {
        $clubs  = Club::all();
        $roles= Role::all();
        return view('admin.users.create',compact('roles','clubs'));
    }

    // public function edit($id)
    // {
    //     $roles= Role::all();
    //     $user = User::find($id);
    //     return view('admin.users.edit', compact('user, roles'));
    // }

    public function edit(User $user)
{
    $roles = Role::all();
    $clubs = Club::all();
    return view('admin.users.edit', compact('user', 'roles','clubs'));
}
