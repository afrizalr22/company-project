<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::before(function ($user, $ability){
            if($user->hasRole('super_admin')){
                return true;
            }
        });
    }
}

 
/**
 * Gate mengotrol bagian tertentu yang sudah diatur para role permission seeder yang diberikan.
 * Contoh nya seperti admin permission apa saja yang bisa diakses dan design manager
 * inti nya memberikan batasan yang sudah ditentukan permission yang sudah dibagi2
 */
