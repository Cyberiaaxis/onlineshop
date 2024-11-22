<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    // Display a listing of the permissions
    public function index()
    {
        // Retrieve all permissions
        $permissions = Permission::all();

        // Return the view with permissions data
        return view('Staff.pages.permissions.index', compact('permissions'));
    }

    // Show the form for creating a new permission
    public function create()
    {
        // Return the view to create a new permission
        return view('Staff.pages.permissions.create');
    }

    // Store a newly created permission in storage
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name',
        ]);

        // Create the new permission
        Permission::create([
            'name' => $request->name
        ]);

        // Redirect to the permissions index page with success message
        return redirect()->route('admin.permissions.index')->with('success', 'Permission created successfully!');
    }

    // Show the form for editing the specified permission
    public function edit(Permission $permission)
    {
        // Return the view to edit the specified permission
        return view('Staff.pages.permissions.edit', compact('permission'));
    }

    // Update the specified permission in storage
    public function update(Request $request, Permission $permission)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name,' . $permission->id,
        ]);

        // Update the permission with the new data
        $permission->update([
            'name' => $request->name
        ]);

        // Redirect to the permissions index page with success message
        return redirect()->route('admin.permissions.index')->with('success', 'Permission updated successfully!');
    }

    // Remove the specified permission from storage
    public function destroy(Permission $permission)
    {
        // Delete the permission
        $permission->delete();

        // Redirect to the permissions index page with success message
        return redirect()->route('admin.permissions.index')->with('success', 'Permission deleted successfully!');
    }
}
