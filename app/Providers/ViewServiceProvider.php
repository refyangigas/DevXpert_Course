<?php

namespace App\Providers;

use App\Models\NavigationCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share navigation data with all views
        View::composer('layouts.partials.navbar', function ($view) {
            $navigationCategories = NavigationCategory::with(['items' => function ($query) {
                    $query->active()->ordered();
                }])
                ->active()
                ->ordered()
                ->get();

            $view->with('navigationCategories', $navigationCategories);
        });
    }
}
