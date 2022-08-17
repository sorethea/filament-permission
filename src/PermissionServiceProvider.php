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
        $this->app->register("Sorethea\Permission\PermissionResourceServiceProvider");
        $this->app->register("Sorethea\Permission\PermissionAuthServiceProvider");
    }

    public function boot()
    {

    }
}
