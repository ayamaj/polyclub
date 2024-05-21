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
         $users = User::latest()->paginate(5);
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
    // Création de l'utilisateur
    $user = User::create([
        'name' => $request->name,
        'number' => $request->number,
        'role_id' => $request->role_id,
        'class' => $request->class,
        'email' => $request->email,
        'password' => bcrypt($request->password), // Assurez-vous de hasher le mot de passe avant de l'enregistrer
    ]);

    // Synchronisation des clubs de l'utilisateur
    $user->clubs()->sync($request->clubs);

    // Redirection vers la route 'admin.user.index' avec un message de succès
    return redirect()->route('admin.user.index')->with('status', 'La personne a bien été ajoutée avec succès');
}



    public function delete($id){
           User::find($id)->delete();
           return redirect()->route('admin.user.index')->with('status','le personne a bien ete supprime ');
       }

    public function update(Request $request)
    {
            $request->validate([
                'name' => 'required|string',
                'number'=> 'required|string',
                'role_id'=> 'required|string',
                'class' => 'required|string',
                'email' => 'required|string',
                'password' => 'required|min:8',
            ]);
               User::find($request->id)->update([
                'name'=> $request->name,
                'number'=> $request->number,
                'role_id'=> $request->role_id,
                'class'=> $request->class,
                'email'=> $request->email,
                'password'=> $request->password,
            ]);


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
        $users = User::where('name', 'like', '%' . $request->search. '%')->paginate(5);
         return view('admin.users.index', compact('users'));
    }
}
