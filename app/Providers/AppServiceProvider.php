<?php

namespace App\Providers;

use App\Models\EmpresaInfo;
use Illuminate\Support\Facades\View;
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
        View::composer(['welcome'], function ($view) {
            $empresa = EmpresaInfo::first(); // o find(1)
            $view->with('empresa', $empresa);
        });
    }
}
