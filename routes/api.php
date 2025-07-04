<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\FeatController;
use App\Http\Controllers\GodController;
use App\Http\Controllers\PantheonController;
use App\Http\Controllers\PowerController;
use App\Http\Controllers\SpellController;
use App\Http\Controllers\TalentController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Api', 'middleware' => ['api']], function () {
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

    Route::get('feats', [FeatController::class, 'index'])
        ->name('feats');
    Route::get('feat/{id}', [FeatController::class, 'get'])
        ->name('feat')
        ->whereNumber('id');

    Route::get('gods', [GodController::class, 'index'])
        ->name('gods');
    Route::get('god/{god_id}/pantheon/{pantheon_id}', [GodController::class, 'get'])
        ->name('god/pantheon')
        ->whereNumber('god_id')
        ->whereNumber('pantheon_id');

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
});
