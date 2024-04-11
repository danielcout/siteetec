<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', function (){ //rota para abrir no navegador
    return view('inicio');
});

Route::get('/vestibulinho', function (){ //rota para abrir no navegador
    return view('vestibulinho');
});

Route::get('/cursos', function (){ //rota para abrir no navegador
    return view('cursos');
});

Route::get('/departamentos', function (){ //rota para abrir no navegador
    return view('departamentos');
});

Route::get('/instituicao', function (){ //rota para abrir no navegador
    return view('instituicao');
});

Route::get('/oportunidade', function (){ //rota para abrir no navegador
    return view('oportunidade');
});