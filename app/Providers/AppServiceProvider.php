<?php

namespace App\Providers;

use App\Services\AttributeService;
use App\Services\ClassService;
use App\Services\FeatService;
use App\Services\GodPantheonService;
use App\Services\PantheonService;
use App\Services\PowerService;
use App\Services\SpellService;
use App\Services\TalentService;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->singleton(\App\Services\Contracts\AttributeService::class, function () {
            return new AttributeService;
        });
        app()->singleton(\App\Services\Contracts\ClassService::class, function () {
            return new ClassService;
        });
        app()->singleton(\App\Services\Contracts\FeatService::class, function () {
            return new FeatService;
        });
        app()->singleton(\App\Services\Contracts\GodPantheonService::class, function () {
            return new GodPantheonService;
        });
        app()->singleton(\App\Services\Contracts\PantheonService::class, function () {
            return new PantheonService;
        });
        app()->singleton(\App\Services\Contracts\PowerService::class, function () {
            return new PowerService;
        });
        app()->singleton(\App\Services\Contracts\SpellService::class, function () {
            return new SpellService;
        });
        app()->singleton(\App\Services\Contracts\TalentService::class, function () {
            return new TalentService;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::prefetch(concurrency: 3);
    }
}
