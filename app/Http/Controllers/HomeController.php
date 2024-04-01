<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('home', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'full_name'=> 'required|string',
            'number'=> 'required|string',
            'role'=> 'required|string',
            'cin'=> 'required|string',
            'class'=> 'required|string',
            'email'=> 'required|string',
            'password' => 'required|min:8',

            // 'image' => 'nullable|mimes:jpeg,png,jpg,gif', // Validation for the image
        ]);

        // $avatarName = '/uploads'. $request->full_name . '.' . $request->image->getClientOriginalExtension();
        // $request->image->move(public_path('uploads'), $avatarName,60);
         User::create([
        'name'=> $request->name,
        'number'=> $request->number,
        'role'=> $request->role,
        'cin'=> $request->cin,
        'class'=> $request->class,
        'email'=> $request->email,
        'password'=> $request->password,


        // 'image' => $avatarName,
         ]);
         return redirect()->route('user.liste')->with('status', 'le personne a bien été ajouté avec succès');
        }


    public function delete_user($id){
           User::find($id)->delete();
           return redirect()->route('user.liste')->with('status','le personne a bien ete supprime ');
       }

    public function update(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'number'=> 'required|string',
            'role'=> 'required|string',
            'cin' => 'required|string',
            'class' => 'required|string',
            'email' => 'required|string',
            // 'password' => 'required|min:8',
            // 'image' => 'nullable|mimes:jpeg,png,jpg,gif', // Validation for the image
        ]);

        $user = User::find($request->id);
        $user->full_name = $request->full_name;
        $user->number = $request->number;
        $user->role = $request->role;
        $user->cin = $request->cin;
        $user->class = $request->class;
        $user->email = $request->email;
        // $user->password = $request->password;
        // // Vérifier si une nouvelle image est téléchargée
        // if ($request->hasFile('image')) {
        //     // Supprimer l'ancienne image s'il existe
        //     if ($user->image) {
        //         unlink(public_path($user->image));
        //     }

        //     // Générer un nom unique pour la nouvelle image
        //     $avatarName = '/uploads/'. $request->nom . '.' . $request->image->getClientOriginalExtension();

        //     // Enregistrer la nouvelle image dans le dossier public/uploads
        //     $request->image->move(public_path('uploads'), $avatarName);

        //     // Mettre à jour le champ d'image de l'étudiant avec le nouveau nom de fichier
        //     $user->image = $avatarName;
        // }

        // Sauvegarder les modifications apportées à l'étudiant
        $user->save();

        return redirect()->route('user.liste')->with('status', 'le personne  a bien été modifié avec succès');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
