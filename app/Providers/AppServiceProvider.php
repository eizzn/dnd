<?php

namespace App\Providers;

use App\Services\AlphabetService;
use App\Services\ArmorService;
use App\Services\AttributeService;
use App\Services\ClassService;
use App\Services\ConditionService;
use App\Services\EquipmentService;
use App\Services\FeatService;
use App\Services\FeatureService;
use App\Services\FormulaService;
use App\Services\GodPantheonService;
use App\Services\LanguageService;
use App\Services\MaterialService;
use App\Services\MonsterService;
use App\Services\PageService;
use App\Services\PantheonService;
use App\Services\PowerService;
use App\Services\RaceService;
use App\Services\RuleService;
use App\Services\SkillService;
use App\Services\SpellService;
use App\Services\TalentService;
use App\Services\TemplateService;
use App\Services\TypeService;
use App\Services\WeaponService;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->singleton(\App\Services\Contracts\AlphabetService::class, function () {
            return new AlphabetService;
        });
        app()->singleton(\App\Services\Contracts\ArmorService::class, function () {
            return new ArmorService;
        });
        app()->singleton(\App\Services\Contracts\AttributeService::class, function () {
            return new AttributeService;
        });
        app()->singleton(\App\Services\Contracts\ClassService::class, function () {
            return new ClassService;
        });
        app()->singleton(\App\Services\Contracts\ConditionService::class, function () {
            return new ConditionService;
        });
        app()->singleton(\App\Services\Contracts\EquipmentService::class, function () {
            return new EquipmentService;
        });
        app()->singleton(\App\Services\Contracts\FeatService::class, function () {
            return new FeatService;
        });
        app()->singleton(\App\Services\Contracts\FeatureService::class, function () {
            return new FeatureService;
        });
        app()->singleton(\App\Services\Contracts\FormulaService::class, function () {
            return new FormulaService;
        });
        app()->singleton(\App\Services\Contracts\GodPantheonService::class, function () {
            return new GodPantheonService;
        });
        app()->singleton(\App\Services\Contracts\LanguageService::class, function () {
            return new LanguageService;
        });
        app()->singleton(\App\Services\Contracts\MaterialService::class, function () {
            return new MaterialService;
        });
        app()->singleton(\App\Services\Contracts\MonsterService::class, function () {
            return new MonsterService;
        });
        app()->singleton(\App\Services\Contracts\PageService::class, function () {
            return new PageService;
        });
        app()->singleton(\App\Services\Contracts\PantheonService::class, function () {
            return new PantheonService;
        });
        app()->singleton(\App\Services\Contracts\PowerService::class, function () {
            return new PowerService;
        });
        app()->singleton(\App\Services\Contracts\RaceService::class, function () {
            return new RaceService;
        });
        app()->singleton(\App\Services\Contracts\RuleService::class, function () {
            return new RuleService;
        });
        app()->singleton(\App\Services\Contracts\SkillService::class, function () {
            return new SkillService;
        });
        app()->singleton(\App\Services\Contracts\SpellService::class, function () {
            return new SpellService;
        });
        app()->singleton(\App\Services\Contracts\TalentService::class, function () {
            return new TalentService;
        });
        app()->singleton(\App\Services\Contracts\TypeService::class, function () {
            return new TypeService;
        });
        app()->singleton(\App\Services\Contracts\WeaponService::class, function () {
            return new WeaponService;
        });
        app()->singleton(\App\Services\Contracts\TemplateService::class, function () {
            return new TemplateService;
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
