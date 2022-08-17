<?php

namespace Sorethea\Permission;

use Filament\PluginServiceProvider;
use Sorethea\Permission\Filament\Resources\PermissionResource;
use Sorethea\Permission\Filament\Resources\RoleResource;
use Spatie\LaravelPackageTools\Package;

class PermissionResourceServiceProvider extends PluginServiceProvider
{

    /**
     * @var string
     */
    public static string $name = 'permission';

    protected array $resources = [
        PermissionResource::class,
        RoleResource::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('permission');
    }
}
