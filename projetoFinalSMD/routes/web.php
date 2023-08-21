<?php

use App\Http\Controllers\ConsultasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::fallback(function(){return "Erro ao localizar a rota!";});





Route::view('/menuDoutor', 'menu_doutor.menuDoutor');

Route::get('/menuDoutor/consultas', [ConsultasController::class, 'index'])->name('consulta.index');

