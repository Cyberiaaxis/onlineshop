<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Permission;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    // Allow only admin to create, update, or delete permissions
    public function create(User $user)
    {
        return $user->hasRole('admin');
    }

    public function update(User $user, Permission $permission)
    {
        return $user->hasRole('admin');
    }

    public function delete(User $user, Permission $permission)
    {
        return $user->hasRole('admin');
    }
}
