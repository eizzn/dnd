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

Route::get('/alphabets', function () {
    return Inertia::render('Alphabets/AlphabetList');
})->middleware(['auth', 'verified'])->name('alphabets');
Route::get('/alphabet/{id}', function () {
    return Inertia::render('Alphabets/AlphabetDetails');
})->middleware(['auth', 'verified'])->name('alphabet');

Route::get('/armors', function () {
    return Inertia::render('Armors/ArmorList');
})->middleware(['auth', 'verified'])->name('armors');
Route::get('/armor/{id}', function () {
    return Inertia::render('Armors/ArmorDetails');
})->middleware(['auth', 'verified'])->name('armor');

Route::get('/classes', function () {
    return Inertia::render('Classes/ClassList');
})->middleware(['auth', 'verified'])->name('classes');
Route::get('/class/{id}', function () {
    return Inertia::render('Classes/ClassDetails');
})->middleware(['auth', 'verified'])->name('class');

Route::get('/conditions', function () {
    return Inertia::render('Conditions/ConditionList');
})->middleware(['auth', 'verified'])->name('conditions');
Route::get('/condition/{id}', function () {
    return Inertia::render('Conditions/ConditionDetails');
})->middleware(['auth', 'verified'])->name('condition');

Route::get('/equipments', function () {
    return Inertia::render('Equipments/EquipmentList');
})->middleware(['auth', 'verified'])->name('equipments');
Route::get('/equipment/{id}', function () {
    return Inertia::render('Equipments/EquipmentDetails');
})->middleware(['auth', 'verified'])->name('equipment');

Route::get('/feats', function () {
    return Inertia::render('Feats/FeatList');
})->middleware(['auth', 'verified'])->name('feats');
Route::get('/feat/{id}', function () {
    return Inertia::render('Feats/FeatDetails');
})->middleware(['auth', 'verified'])->name('feat');

Route::get('/features', function () {
    return Inertia::render('Features/FeatureList');
})->middleware(['auth', 'verified'])->name('features');
Route::get('/feature/{id}', function () {
    return Inertia::render('Features/FeatureDetails');
})->middleware(['auth', 'verified'])->name('feature');

Route::get('/formulas', function () {
    return Inertia::render('Formulas/FormulaList');
})->middleware(['auth', 'verified'])->name('formulas');
Route::get('/formula/{id}', function () {
    return Inertia::render('Formulas/FormulaDetails');
})->middleware(['auth', 'verified'])->name('formula');

Route::get('/gods', function () {
    return Inertia::render('Gods/GodList');
})->middleware(['auth', 'verified'])->name('gods');
Route::get('/god/{godId}/pantheon/{pantheonId}', function () {
    return Inertia::render('Gods/GodDetails');
})->middleware(['auth', 'verified'])->name('god');

Route::get('/languages', function () {
    return Inertia::render('Languages/LanguageList');
})->middleware(['auth', 'verified'])->name('languages');
Route::get('/language/{id}', function () {
    return Inertia::render('Languages/LanguageDetails');
})->middleware(['auth', 'verified'])->name('language');

Route::get('/materials', function () {
    return Inertia::render('Materials/MaterialList');
})->middleware(['auth', 'verified'])->name('materials');
Route::get('/material/{id}', function () {
    return Inertia::render('Materials/MaterialDetails');
})->middleware(['auth', 'verified'])->name('material');

Route::get('/monsters', function () {
    return Inertia::render('Monsters/MonsterList');
})->middleware(['auth', 'verified'])->name('monsters');
Route::get('/monster/{id}', function () {
    return Inertia::render('Monsters/MonsterDetails');
})->middleware(['auth', 'verified'])->name('monster');

Route::get('/pantheons', function () {
    return Inertia::render('Pantheons/PantheonList');
})->middleware(['auth', 'verified'])->name('pantheons');
Route::get('/pantheon/{id}', function () {
    return Inertia::render('Pantheons/PantheonDetails');
})->middleware(['auth', 'verified'])->name('pantheon');

Route::get('/pages', function () {
    return Inertia::render('Pages/PageList');
})->middleware(['auth', 'verified'])->name('pages');
Route::get('/page/{id}', function () {
    return Inertia::render('Pages/PageDetails');
})->middleware(['auth', 'verified'])->name('page');

Route::get('/powers', function () {
    return Inertia::render('Powers/PowerList');
})->middleware(['auth', 'verified'])->name('powers');
Route::get('/power/{id}', function () {
    return Inertia::render('Powers/PowerDetails');
})->middleware(['auth', 'verified'])->name('power');

Route::get('/races', function () {
    return Inertia::render('Races/RaceList');
})->middleware(['auth', 'verified'])->name('races');
Route::get('/race/{id}', function () {
    return Inertia::render('Races/RaceDetails');
})->middleware(['auth', 'verified'])->name('race');

Route::get('/skills', function () {
    return Inertia::render('Skills/SkillList');
})->middleware(['auth', 'verified'])->name('skills');
Route::get('/skill/{id}', function () {
    return Inertia::render('Skills/SkillDetails');
})->middleware(['auth', 'verified'])->name('skill');

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

Route::get('/types', function () {
    return Inertia::render('Types/TypeList');
})->middleware(['auth', 'verified'])->name('types');
Route::get('/type/{id}', function () {
    return Inertia::render('Types/TypeDetails');
})->middleware(['auth', 'verified'])->name('type');

Route::get('/weapons', function () {
    return Inertia::render('Weapons/WeaponList');
})->middleware(['auth', 'verified'])->name('weapons');
Route::get('/weapon/{id}', function () {
    return Inertia::render('Weapons/WeaponDetails');
})->middleware(['auth', 'verified'])->name('weapon');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
