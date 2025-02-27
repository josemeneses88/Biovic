<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\UsuarioWebController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\FlareClient\View;

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

Route::get('/main', function () {
    // Alert::success(' Titulo de la alerta','mensaje de la alerta');
    // toast('Ejemplo del toast')->success('ejemplo del tost');
    return view('main');
    // return View('admin.layouts.app');
});

Route::get('/menu', function () {
    // Alert::success(' Titulo de la alerta','mensaje de la alerta');
    // toast('Ejemplo del toast')->success('ejemplo del tost');
    return view('menu');
    // return View('admin.layouts.app');
});

Route::get('/dashboard', function () {
    return view('admin.layouts.app');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/usuario/registro', function () {
    return view('admin.users.registro');
})->middleware(['auth', 'verified'])->name('users.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::resource('usuarios',UsuarioWebController::class);