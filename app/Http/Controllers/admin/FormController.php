<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormulaireRequest;
use App\Models\Club;
use App\Models\Form;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {

         $forms = Form::latest()->paginate(15);
         return view('admin.forms.index', compact('forms'));
    }

    public function edit(Form $form)
{
    $roles = Role::all();
    $clubs = Club::all();
    return view('admin.forms.edit', compact('form', 'roles','clubs'));
}

    public function delete($id){
        Form::find($id)->delete();
        return redirect()->route('admin.form.index')->with('status','the person has been deleted ');
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'number'=> 'required|string',
            'clubs' => 'required|array|min:1', // Ensure at least one club is selected
            'clubs.*' => 'exists:clubs,id',
            'class' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|min:8'

        ]);
        $user = User::create([
            'name'=> $request->name,
            'number'=> $request->number,
            'role_id'=> $request->role_id,
            'class'=> $request->class,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);
        $user->clubs()->sync($request->clubs);
        //delete the request account

        Form::find($request->id)->delete();

        return redirect()->route('admin.user.index')->with('status', 'the person contact details have been modified');
    }

    public function search(Request $request)
    {
        $forms = Form::where('name', 'like', '%' . $request->search. '%')->get();
         return view('admin.forms.index', compact('forms'));
    }


}
