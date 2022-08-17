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
        $this->app->make("Sorethea\\Permission\\PermissionResourceServiceProvider");
        $this->app->make("Sorethea\\Permission\\PermissionAuthServiceProvider");
    }

    public function boot()
    {

    }
}
