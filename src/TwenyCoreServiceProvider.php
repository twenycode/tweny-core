<?php

namespace TwenyCode\TwenyCore;

use Illuminate\Support\ServiceProvider;

class TwenyCoreServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
        $this->publishViews();
        $this->publishController();
        $this->publishRoutes();
        $this->publishAssets();
    }

    //  Publish Package config file
    private function publishViews(): void
    {
        $this->publishes([__DIR__.'/../resources/views' => base_path('resources/views')],'tweny-core');
    }

    //  Publish Package Controllers
    private function publishController(): void
    {
        $this->publishes([__DIR__.'/Http/Controllers' => app_path('Http/Controllers')],'tweny-core');
    }

    //  Publish Package Controllers
    private function publishRoutes(): void
    {
        $this->publishes([__DIR__.'/../routes' => base_path('routes')],'tweny-core');
    }

    //  Publish Package Controllers
    private function publishAssets(): void
    {
        $this->publishes([__DIR__.'/../public' => base_path('public')],'tweny-core');
    }



}
