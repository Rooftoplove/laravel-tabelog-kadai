<?php

namespace App\Providers;

use Illuminate\Contracts\Routing\UrlGenerator;

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
    public function boot(UrlGenerator $url) // ⭐️ 引数追加
    {
        $url->forceScheme('https'); // ⭐️ 追加
    }
}
