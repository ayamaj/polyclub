<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResourceRequest;
use App\Models\Club;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ResourceController extends Controller
{

    public function index()
    {
        // Get resources created more than a month ago
        $resourcesToDelete = Resource::where('created_at', '<', Carbon::now()->subMonth())->get();
        // Delete the resources older than a month
        foreach ($resourcesToDelete as $resource) {
            $resource->delete();
        }
        // Get all resources (after deleting old ones)
        $resources = Resource::where('status', 'In waiting state')->get();
        return view('admin.resources.index', compact('resources'));
    }

    public function index2()
    {
        $resources = resource::all();
        return view('admin.resources.index2', compact('resources'));
    }

    public function create()
    {
        $users = User::all();
        $clubs = Club::all();
        $resources = resource::all();
        return view('admin.resources.create', compact('resources', 'users', 'clubs'));
    }

    public function edit(Resource $resource)
    {
        $users = User::all();
        $clubs = Club::all();
        $resources = resource::all();
        return view('admin.resources.index2', compact('resources', 'users', 'clubs'));
    }

    public function delete($id)
    {
        Resource::find($id)->delete();
        return redirect()->route('admin.resource.index')->with('status', 'the person has been deleted ');
    }

    public function store(ResourceRequest $request)
    {
        //  dd($request->all());
        Resource::create([
            'message' => $request->message,
        ]);
        return redirect()->route('admin.resource.index2')->with('status', 'The resource has been successfully added.');
    }

    public function updateStatus_available($id)
    {
        $resource = Resource::find($id);
        $resource->status = 'available';
        $resource->save();
        return redirect()->route('admin.resource.edit', ['id' => $id]);
    }

    public function updateStatus_is_not_available($id)
    {
        $resource = Resource::find($id);
        $resource->status = 'is not available ';
        $resource->save();
        return redirect()->route('admin.resource.edit', ['id' => $id]);
    }
}
