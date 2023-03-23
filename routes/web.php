<?php
use App\Http\Controllers\ButterfliesController;
use Illuminate\Support\Facades\Route;

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

// Rotas para a listagem de borboletas

Route:: get('/butterflies', [ButterfliesController::class, 'index'])->name('butterflies.index');

Route:: get('/butterflies/novo', [ButterfliesController::class, 'create'])->name('butterflies.create');

Route:: get('/butterflies/{butterfly}', [ButterfliesController::class, 'show'])->name('butterflies.show');

Route:: get('/butterflies/{id}/edit', [ButterfliesController::class, 'edit'])->name('butterflies.edit');

Route:: post('/butterflies', [ButterfliesController::class, 'store'])->name('butterflies.store');

Route:: put('/butterflies/{id}', [ButterfliesController::class, 'update'])->name('butterflies.update');

Route:: delete('/butterflies/{id}', [ButterfliesController::class, 'destroy'])->name('butterflies.destroy');
