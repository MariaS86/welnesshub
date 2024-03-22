<?php

namespace App\Providers;

use App\Models\Advices;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::defaultView('pagination::default');
        Gate::define('destroy-advices', function (User $user, Advices $advices){
            // return $user->role_id OR $advices->category_id < 2;
            return $user->role_id;
        });
        // Gate::define('edit-advices', function (User $user, Advices $advices){
        //     return $user->role_id; // Assuming role_id 1 represents the administrator role
        // });
        
        // Gate::define('add-advices', function (User $user, Advices $advices){
        //     return $user->role_id; // Only administrators can add advices
        // });
        Gate::define('edit-advices', function (User $user){
            return $user->role_id; // Предполагая, что роль администратора имеет ID 1
        });
        
        Gate::define('add-advices', function (User $user){
            return $user->role_id; // Только администраторы могут добавлять советы
        });
   

        // Gate::define('destroy-advices', function (Users $users, Advices $advices){
        //     return $users->role_id OR $advices->category_id<2;
        // });
    }
}
