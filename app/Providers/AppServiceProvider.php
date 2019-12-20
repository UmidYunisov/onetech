<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;

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
        $this->loadMenu();
    }

    public function loadMenu()
    {
        view()->composer('layouts.header', function($view){
            $view->with('categories', Category::with('children')->where('parent_id', 0)->get());
            $view->with('delimiter', '');
        });

        view()->composer('layouts.new_products', function($view){
            $view->with('categories', Category::with('children')->where('parent_id', 0)->get());
            $view->with('delimiter', '');
        });

        view()->composer('layouts.sidebar', function($view){
            $view->with('categories', Category::with('children')->where('parent_id', 0)->get());
            $view->with('delimiter', '');
        });
    }
}
