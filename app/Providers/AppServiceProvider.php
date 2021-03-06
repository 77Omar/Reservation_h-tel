<?php

namespace App\Providers;
use App\User;
use Illuminate\Support\Facades\Gate;



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
        Schema::defaultStringLength(191);

        
            Gate::define('admin',function(User $user){
                return $user->isAdmin();
            });
            Gate::define('moderator', function(User $user){
                return $user->isModerator();
            });
        
     }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
