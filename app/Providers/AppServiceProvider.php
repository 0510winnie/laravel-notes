<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ArticleCategory;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = ArticleCategory::all();
        View::share('categories', $categories);  //'categories' 是變數名稱，＄categories 是值）
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
