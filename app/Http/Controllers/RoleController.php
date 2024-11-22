<?php

namespace App\Http\Controllers;

use App\Models\{Role, User};
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:create role,App\Models\Role')->only('create role', 'store role');
        $this->middleware('can:update role,App\Models\Role')->only('edit role', 'update role');
        $this->middleware('can:delete role,App\Models\Role')->only('destroy role');
    }

    public function index()
    {
        $roles = Role::all();
        return view('Staff.pages.roles.index', compact('roles'));
    }

    public function create()
    {
        $this->authorize('create role', Role::class);
        return view('Staff.pages.roles.create');
    }

    public function store(Request $request)
    {
        $this->authorize('store role', Role::class);
        Role::create($request->only('name'));
        return redirect()->route('admin.roles.index');
    }

    public function edit(Role $role)
    {
        $this->authorize('edit role', Role::class);
        return view('Staff.pages.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $this->authorize('update role', Role::class);
        $role->update($request->only('name'));
        return redirect()->route('admin.roles.index');
    }

    public function destroy(Role $role)
    {
        $this->authorize('destroy role', Role::class);
        $role->delete();
        return redirect()->route('admin.roles.index');
    }

    public function assignRole(Request $request, User $user)
    {
        $this->authorize('manage-roles-permissions');

        // Attach role to user
        $role = $request->input('role');
        $user->assignRole($role);

        return redirect()->route('admin.roles.index')->with('success', 'Role assigned successfully');
    }

    public function attachPermission(Request $request, Role $role)
    {
        $this->authorize('manage-roles-permissions');

        // Attach permission to role
        $permission = $request->input('permission');
        $role->givePermissionTo($permission);

        return redirect()->route('admin.roles.index')->with('success', 'Permission attached successfully');
    }
}
