<?php
namespace Sorethea\Permission;

use Filament\PluginServiceProvider;
use Sorethea\Permission\Filament\Resources\PermissionResource;
use Sorethea\Permission\Filament\Resources\RoleResource;

class PermissionServiceProvider extends PluginServiceProvider
{

    protected array $resources = [
        PermissionResource::class,
        RoleResource::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
