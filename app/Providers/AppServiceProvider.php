<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       User::observe(UserObserver::class);
    }

    /**
     * Bootstrap any application services.
     *
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
