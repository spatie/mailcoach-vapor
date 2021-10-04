<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        Gate::define('viewVaporUI', function ($user = null) {
           return $user !== null;
        });
    }

    public function boot()
    {
        //
    }
}
