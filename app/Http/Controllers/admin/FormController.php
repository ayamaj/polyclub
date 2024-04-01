<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormulaireRequest;
use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('admin.forms.index', compact('forms'));
    }
    public function create()
    {
        return view('admin.forms.create');
    }
    public function edit(string $id)
    {
        $form = Form::find($id);
        return view('admin.forms.edit', compact('form'));
    }
    public function store(FormulaireRequest $request)
    {
        // dd($request->all());
        Form::create([
            'name'=> $request->name,
            'number'=> $request->number,
            'class'=> $request->class,
            'email'=> $request->email,
            'password'=> $request->password,

              ]);
        return redirect()->route('admin.form.index')->with('status', 'you participated with us');
    }
    public function delete($id){
        Form::find($id)->delete();
        return redirect()->route('admin.form.index')->with('status','the person has been deleted ');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'number' => 'required|string',
            'class' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',

        ]);
        User::create([
            'name'=> $request->name,
            'number'=> $request->number,
            'role_id'=> $request->role_id,
            'cin'=> $request->cin,
            'class'=> $request->class,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);

        //delete the request account

        return redirect()->route('admin.form.index')->with('status', 'the person contact details have been modified');
    }





}
