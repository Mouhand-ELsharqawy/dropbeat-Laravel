<?php

namespace App\Providers;

use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::created(function($user){
            Mail::to($user)->send(new Welcome($user));
        });   
    }
}
