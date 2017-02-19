<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\ArticleInterface',
            'App\Services\ArticleService'
        );
        $this->app->bind(
            'App\Contracts\UserInterface',
            'App\Services\UserService'
        );
        $this->app->bind(
            'App\Contracts\YoutubeInerface',
            'App\Services\YoutubeService'
        );
    }
}