<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin'       => Route::has('login'),
        'canRegister'    => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion'     => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/classes', function () {
    return Inertia::render('Classes/ClassList');
})->middleware(['auth', 'verified'])->name('classes');
Route::get('/class/{id}', function () {
    return Inertia::render('Classes/ClassDetails');
})->middleware(['auth', 'verified'])->name('class');

Route::get('/feats', function () {
    return Inertia::render('Feats/FeatList');
})->middleware(['auth', 'verified'])->name('feats');
Route::get('/feat/{id}', function () {
    return Inertia::render('Feats/FeatDetails');
})->middleware(['auth', 'verified'])->name('feat');

Route::get('/gods', function () {
    return Inertia::render('Gods/GodList');
})->middleware(['auth', 'verified'])->name('gods');
Route::get('/god/{id}', function () {
    return Inertia::render('Gods/GodDetails');
})->middleware(['auth', 'verified'])->name('god');

Route::get('/powers', function () {
    return Inertia::render('Powers/PowerList');
})->middleware(['auth', 'verified'])->name('powers');
Route::get('/power/{id}', function () {
    return Inertia::render('Powers/PowerDetails');
})->middleware(['auth', 'verified'])->name('power');

Route::get('/spells', function () {
    return Inertia::render('Spells/SpellList');
})->middleware(['auth', 'verified'])->name('spells');
Route::get('/spell/{id}', function () {
    return Inertia::render('Spells/SpellDetails');
})->middleware(['auth', 'verified'])->name('spell');

Route::get('/talents', function () {
    return Inertia::render('Talents/TalentList');
})->middleware(['auth', 'verified'])->name('talents');
Route::get('/talent/{id}', function () {
    return Inertia::render('Talents/TalentDetails');
})->middleware(['auth', 'verified'])->name('talent');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
