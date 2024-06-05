<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function edit(string $id)
    {
        $permission = Permission::find($id);
        return view('admin.permissions.edit', compact('permission'));
    }

    public function store(PermissionRequest $request)
    {
        // dd($request->all());
        Permission::create([
            'name' => $request->name,
        ]);
        return redirect()->route('admin.permission.index')->with('status', 'The permission has been successfully added');
    }

    public function delete($id)
    {
        Permission::find($id)->delete();
        return redirect()->route('admin.permission.index')->with('status', 'The permission has been successfully deleted.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $permission = Permission::find($request->id);
        $permission->name = $request->name;

        $permission->save();

        return redirect()->route('admin.permission.index')->with('status', 'The permission has been successfully modified');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Recherche des permissions en fonction du nom
        $permissions = Permission::where('name', 'like', '%' . $searchTerm . '%')->get();
        return view('search', compact('permissions'));
    }
}
