<?php

namespace App\Providers;

use App\Services\RandomFoodish;
use App\Services\RandomFoodishAdapter;
use App\Services\RandomFoodService;
use Illuminate\Support\ServiceProvider;
use App\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(RandomFoodService::class, function ($app) {
            return new RandomFoodishAdapter(new RandomFoodish());
        });
    }
}
