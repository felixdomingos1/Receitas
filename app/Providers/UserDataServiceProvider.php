<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class UserDataServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', function ($view) {
            // Compartilhar dados do usuário com todas as views
            $view->with('userData', Auth::user());
        });
    }

    public function register()
    {
        //
    }
}
