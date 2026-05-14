<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('adminzone.users.roles', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminzone.users.roles-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'roleName' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'permissions' => 'nullable|array'
        ]);

        $permissions = $request->permissions ? implode(',', $request->permissions) : '';

        Role::create([
            'roleName' => $request->roleName,
            'status' => $request->status,
            'permissions' => $permissions
        ]);

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Not used currently in views
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        return view('adminzone.users.roles-edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'roleName' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'permissions' => 'nullable|array'
        ]);

        $role = Role::findOrFail($id);

        $permissions = $request->permissions ? implode(',', $request->permissions) : '';

        $role->update([
            'roleName' => $request->roleName,
            'status' => $request->status,
            'permissions' => $permissions
        ]);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }

    /**
     * Remove multiple specified resources from storage.
     */
    public function destroyMultiple(Request $request)
    {
        $request->validate([
            'role_ids' => 'required|array',
            'role_ids.*' => 'exists:roles,id'
        ]);

        Role::whereIn('id', $request->role_ids)->delete();

        return redirect()->route('roles.index')->with('success', 'Selected roles deleted successfully.');
    }
}