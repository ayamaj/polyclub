<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\admin\RoleRequest;
use App\Models\Permission;
use App\Models\Role;


class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
        // $role = Role::find($role_id);
        // $permissions = $role->permissions;
    }

    public function create()
    {
        $permissions  = Permission::all();
        return view('admin.roles.create',compact('permissions'));
    }

    public function edit(string $id)
    {
        $permissions = Permission::all();
        $role = Role::find($id);

        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function store(RoleRequest $request)
    {
        //dd($request->all());
        $role = Role::create([
            'name' => $request->name,
            'description' => $request->description,

        ]);
        
        // Sync permissions with the role
        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.role.index')->with('status', 'le role a bien été ajouté avec succès');
    }

    public function delete($id){
        Role::find($id)->delete();
        return redirect()->route('admin.role.index')->with('status', 'Le rôle a bien été supprimé');

    }

    public function update(RoleRequest $request)
    {

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',

        ]);
        $role = Role::find($request->id);
        $role->name = $request->name;
        $role->description = $request->description;

        $role->permissions()->sync($request->permissions);
        $role->save();
        return redirect()->route('admin.role.index')->with('status', 'le role  a bien été modifié avec succès');
    }
}
