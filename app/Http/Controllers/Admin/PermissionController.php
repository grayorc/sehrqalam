<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::query();

        if($keyword = request('search')){
            $permissions->where('name', 'LIKE', "%{$keyword}%")
                ->orwhere('label', 'LIKE', "%{$keyword}%");
        }

        $permissions = $permissions->paginate(20);
        return view('admin.permissions.all',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => ['required', 'string', 'max:255', 'min:2'],
                'label' => ['required', 'string', 'max:255', 'min:2'],
            ]);

            $permission = Permission::create($data);
            return response()->json('created', 201);
        }catch (Exception $e){
            return response()->json('Failed', 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        try {
            $data = $request->validate([
                'name' => ['required', 'string', 'max:255', 'min:2' , Rule::unique('permissions')->ignore($permission->id)],
                'label' => ['required', 'string', 'max:255', 'min:2'],
            ]);
            $permission->update($data);
            return response()->json('Updated', 201);
        }catch (Exception $e){
            return response()->json('Failed', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
