<?php

use App\Models\Imprimefactures;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencesController;
use App\Http\Controllers\ChargesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RevenusController;
use App\Http\Controllers\TraitesController;
use App\Http\Controllers\ContratsController;
use App\Http\Controllers\FacturesController;
use App\Http\Controllers\AssurancesController;
use App\Http\Controllers\ReglementsController;
use App\Http\Controllers\InfractionsController;

use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\ImprimefacturesController;
use App\Http\Controllers\VisitetechniquesController;
use App\Http\Controllers\NouvellevehiculesController;
use App\Http\Controllers\NumeroautocontratController;
use App\Http\Controllers\TypeInterventionsController;
use App\Http\Controllers\ListeinterventionsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/assurances', AssurancesController::class);
Route::resource('/agences', AgencesController::class);
Route::resource('/clients', ClientsController::class);
Route::resource('/contrats', ContratsController::class);
Route::resource('/charges', ChargesController::class);
Route::resource('/infractions', InfractionsController::class);
Route::resource('/factures', FacturesController::class);
Route::resource('/imprimefactures', ImprimefacturesController::class);

Route::resource('/listeinterventions', ListeinterventionsController::class)->except(['show']);
Route::get('/listeinterventions/specification', [ListeinterventionsController::class, 'specification'])
    ->name('listeinterventions.specification');
Route::resource('/nouvellevehicules', NouvellevehiculesController::class);
Route::resource('/reservations', ReservationsController::class);
Route::resource('/reglements', ReglementsController::class);
Route::resource('/revenus', RevenusController::class);
Route::resource('/traites', TraitesController::class);
Route::resource('/visitetechniques', VisitetechniquesController::class);
Route::resource('/typeinterventions', TypeInterventionsController::class);

Route::post('/reglements/create', [ReglementsController::class,'create'])->name('reglements.create');


Route::get('/chercher', [ClientsController::class, 'chercher'])->name('chercher');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';
