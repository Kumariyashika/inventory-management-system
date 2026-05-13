<?php

namespace App\Http\Controllers;

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
        // Since permissions are stored as string (JSON or CSV), decode if needed
        foreach($roles as $role) {
            $role->permissions_array = json_decode($role->permissions, true) ?: [];
        }
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
            'permissions' => 'nullable|array',
            'status' => 'required|string|in:active,inactive',
        ]);

        $data = $request->all();
        $data['permissions'] = json_encode($request->permissions ?? []);

        Role::create($data);

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        $role->permissions_array = json_decode($role->permissions, true) ?: [];
        return view('adminzone.users.roles-edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'roleName' => 'required|string|max:255',
            'permissions' => 'nullable|array',
            'status' => 'required|string|in:active,inactive',
        ]);

        $role = Role::findOrFail($id);
        
        $data = $request->all();
        $data['permissions'] = json_encode($request->permissions ?? []);

        $role->update($data);

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
}
