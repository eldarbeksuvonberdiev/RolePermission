<?php

namespace App\Http\Controllers\RolePermission;

use App\Http\Controllers\Controller;
use App\Http\Requests\RolePermission\Role\RoleStoreRequest;
use App\Http\Requests\RolePermission\Role\RoleUpdateRequest;
use App\Models\RolePermission\Permission;
use App\Models\RolePermission\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::orderBy('name')->get();

        return view('admin.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleStoreRequest $request)
    {
        $role = Role::create(['name' => $request->name]);

        $role->permissions()->attach($request->permissions);

        return redirect()->route('role.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();

        $ids = $role->permissions->pluck('id')->toArray();

        return view('admin.role.edit', compact('role', 'permissions', 'ids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleUpdateRequest $request, Role $role)
    {
        $role->update(['name' => $request->name]);

        $role->permissions()->sync($request->permissions);

        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('role.index');
    }
}
