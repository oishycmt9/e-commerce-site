<?php

namespace App\Providers;


use App\Brand;
use App\Category;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*',function ($view){
            $view->with('categories',Category::all());
            $view->with('brands',Brand::all());

        });


    }
}
