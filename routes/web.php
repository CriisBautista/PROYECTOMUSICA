<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\musicaController;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/






/*Route::get('/generic', function () {
    return view('generic');
})->name('generic');

Route::get('/landing', function () {
    return view('landing');
})->name('landing');
*/

Route::get('/', [musicaController::class, 'index'])->name('inicio');
Route::get('/que-es-el-trap-Argentino', [musicaController::class, 'iniciosTrap'])->name('iniciotrap');
Route::get('/evolucion', [musicaController::class, 'evolucion'])->name('evolucion');
Route::get('/quinto-escalon', [musicaController::class, 'quintoEscalon'])->name('escalon');
Route::get('/artistas-masculinos-2021', [musicaController::class, 'artistasMasculinos'])->name('revelacionM');
Route::get('/artistas-femeninos-2021', [musicaController::class, 'artistasFemeninos'])->name('revelacionF');
Route::get('/Canciones-2021-Argentina', [musicaController::class, 'canciones2021'])->name('cancionesArgentina');

