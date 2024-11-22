<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    private function isAdmin(User $user)
    {
        return $user->hasRole('admin');
    }

    public function create(User $user)
    {
        return $this->isAdmin($user);
    }

    public function update(User $user, Role $role)
    {
        return $this->isAdmin($user);
    }

    public function delete(User $user, Role $role)
    {
        return $this->isAdmin($user);
    }
}
