<?php

namespace App\Providers;

use App\Models\User;
use App\Models\{Permission, Role};
use App\Policies\RolePolicy;
use App\Policies\PermissionPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Role::class => RolePolicy::class,
        Permission::class => PermissionPolicy::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate to check if the user can create roles
        Gate::define('create role', function (User $user) {
            // Define logic to check if the user has permission to create roles
            return $user->hasRole('admin');
        });

        // Gate to check if the user can update a role
        Gate::define('update role', function (User $user, Role $role) {
            // Define logic to check if the user can update this role
            return $user->hasRole('admin');
        });

        // Gate to check if the user can delete a role
        Gate::define('delete role', function (User $user, Role $role) {
            // Define logic to check if the user can delete this role
            return $user->hasRole('admin');
        });
    }
}
