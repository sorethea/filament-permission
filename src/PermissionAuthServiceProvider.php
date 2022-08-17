<?php

namespace Sorethea\Permission;
use Closure;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Sorethea\Permission\Policies\PermissionPolicy;
use Sorethea\Permission\Policies\RolePolicy;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionAuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Role::class=>RolePolicy::class,
        Permission::class=>PermissionPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }

}
