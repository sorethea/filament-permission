<?php
namespace Sorethea\Permission;

use Illuminate\Support\ServiceProvider;

/**
 *
 */
class PermissionServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->register(PermissionResourceServiceProvider::class);
        $this->app->register(PermissionAuthServiceProvider::class);
    }

    public function boot()
    {

    }
}
