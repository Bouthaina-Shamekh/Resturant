<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('abilities' , function () {
            return include base_path('data/abilities.php');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        Gate::before(function ($user) {
            return $user->super_admin == 1? true : null;
        });

        View::share('name', 'name_' . app()->currentLocale());
        View::share('content', 'content_' . app()->currentLocale());
        View::share('title', 'titel_' . app()->currentLocale());
        View::share('description', 'description_' . app()->currentLocale());

    }
}
