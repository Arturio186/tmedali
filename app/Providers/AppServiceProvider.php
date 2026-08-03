<?php

namespace App\Providers;

use App\Models\PageView;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('*', function ($view) {

            $route = request()->route()?->getName();

            if (!$route) {
                return;
            }

            $view->with(
                'pageViews',
                PageView::where('page', $route)->value('views') ?? 0
            );
        });
    }
}
