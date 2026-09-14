<?php

use App\Http\Controllers\AlphabetController;
use App\Http\Controllers\ArmorController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\FeatController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FormulaController;
use App\Http\Controllers\GodController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MonsterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PantheonController;
use App\Http\Controllers\PowerController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SpellController;
use App\Http\Controllers\TalentController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\WeaponController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Api', 'middleware' => ['api'], 'as' => 'api.'], function () {
    Route::get('alphabets', [AlphabetController::class, 'index'])
        ->name('alphabets');
    Route::get('alphabet/{id}', [AlphabetController::class, 'get'])
        ->name('alphabet')
        ->whereNumber('id');

    Route::get('armors', [ArmorController::class, 'index'])
        ->name('armors');
    Route::get('armor/{id}', [ArmorController::class, 'get'])
        ->name('armor')
        ->whereNumber('id');

    Route::get('attributes', [AttributeController::class, 'index'])
        ->name('attributes');
    Route::get('attribute/{id}', [AttributeController::class, 'get'])
        ->name('attribute')
        ->whereNumber('id');

    Route::get('classes', [ClassController::class, 'index'])
        ->name('classes');
    Route::get('class/{id}', [ClassController::class, 'get'])
        ->name('class')
        ->whereNumber('id');

    Route::get('conditions', [ConditionController::class, 'index'])
        ->name('conditions');
    Route::get('condition/{id}', [ConditionController::class, 'get'])
        ->name('condition')
        ->whereNumber('id');

    Route::get('equipments', [EquipmentController::class, 'index'])
        ->name('equipments');
    Route::get('equipment/{id}', [EquipmentController::class, 'get'])
        ->name('equipment')
        ->whereNumber('id');

    Route::get('feats', [FeatController::class, 'index'])
        ->name('feats');
    Route::get('feat/{id}', [FeatController::class, 'get'])
        ->name('feat')
        ->whereNumber('id');

    Route::get('features', [FeatureController::class, 'index'])
        ->name('features');
    Route::get('feature/{id}', [FeatureController::class, 'get'])
        ->name('feature')
        ->whereNumber('id');

    Route::get('formulas', [FormulaController::class, 'index'])
        ->name('formulas');
    Route::get('formula/{id}', [FormulaController::class, 'get'])
        ->name('formula')
        ->whereNumber('id');

    Route::get('gods', [GodController::class, 'index'])
        ->name('gods');
    Route::get('god/{god_id}/pantheon/{pantheon_id}', [GodController::class, 'get'])
        ->name('god/pantheon')
        ->whereNumber('god_id')
        ->whereNumber('pantheon_id');

    Route::get('languages', [LanguageController::class, 'index'])
        ->name('languages');
    Route::get('language/{id}', [LanguageController::class, 'get'])
        ->name('language')
        ->whereNumber('id');

    Route::get('materials', [MaterialController::class, 'index'])
        ->name('materials');
    Route::get('material/{id}', [MaterialController::class, 'get'])
        ->name('material')
        ->whereNumber('id');

    Route::get('monsters', [MonsterController::class, 'index'])
        ->name('monsters');
    Route::get('monster/{id}', [MonsterController::class, 'get'])
        ->name('monster')
        ->whereNumber('id');

    Route::get('pages', [PageController::class, 'index'])
        ->name('pages');
    Route::get('page/{id}', [PageController::class, 'get'])
        ->name('page')
        ->whereNumber('id');

    Route::get('pantheons', [PantheonController::class, 'index'])
        ->name('pantheons');
    Route::get('pantheon/{id}', [PantheonController::class, 'get'])
        ->name('pantheon')
        ->whereNumber('id');

    Route::get('powers', [PowerController::class, 'index'])
        ->name('powers');
    Route::get('power/{id}', [PowerController::class, 'get'])
        ->name('power')
        ->whereNumber('id');

    Route::get('races', [RaceController::class, 'index'])
        ->name('races');
    Route::get('race/{id}', [RaceController::class, 'get'])
        ->name('race')
        ->whereNumber('id');

    Route::get('skills', [SkillController::class, 'index'])
        ->name('skills');
    Route::get('skill/{id}', [SkillController::class, 'get'])
        ->name('skill')
        ->whereNumber('id');

    Route::get('spells', [SpellController::class, 'index'])
        ->name('spells');
    Route::get('spell/{id}', [SpellController::class, 'get'])
        ->name('spell')
        ->whereNumber('id');

    Route::get('talents', [TalentController::class, 'index'])
        ->name('talents');
    Route::get('talent/{id}', [TalentController::class, 'get'])
        ->name('talent')
        ->whereNumber('id');

    Route::get('types', [TypeController::class, 'index'])
        ->name('types');
    Route::get('type/{id}', [TypeController::class, 'get'])
        ->name('type')
        ->whereNumber('id');

    Route::get('weapons', [WeaponController::class, 'index'])
        ->name('weapons');
    Route::get('weapon/{id}', [WeaponController::class, 'get'])
        ->name('weapon')
        ->whereNumber('id');

    Route::get('templates', [TemplateController::class, 'index'])
        ->name('templates');
    Route::get('template/{id}', [TemplateController::class, 'get'])
        ->name('template')
        ->whereNumber('id');
});
