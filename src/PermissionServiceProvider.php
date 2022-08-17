<?php
namespace Sorethea\Permission;

use Filament\PluginServiceProvider;
use Sorethea\Permission\Filament\Resources\PermissionResource;
use Sorethea\Permission\Filament\Resources\RoleResource;

class PermissionServiceProvider extends PluginServiceProvider
{
    public static string $name = 'permission';
    protected array $resources = [
        PermissionResource::class,
        RoleResource::class,
    ];

}
