<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IntegrationsController;
use App\Http\Controllers\PessoasController;
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
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Administração

     // Administração
     Route::get('/administration', function () {
        return view('pages.administration');
    })->middleware(['auth', 'verified'])->name('administration');

     // Fila de processos
   /*  Route::get('/administration/queue-processes', function () {
        return view('pages.queue-processes');
    })->middleware(['auth', 'verified'])->name('queue-processes');
    */
     // Aprendizagem
     Route::get('/learning', function () {
        return view('pages.learning');
    })->middleware(['auth', 'verified'])->name('learning');

    // Repositório
    Route::get('/repository', function () {
        return view('pages.repository');
    })->middleware(['auth', 'verified'])->name('repository');

    // Relatório
    Route::get('/report', function () {
        return view('pages.report');
    })->middleware(['auth', 'verified'])->name('report');

    // Tutoría
    Route::get('/tutoring', function () {
        return view('pages.tutoring');
    })->middleware(['auth', 'verified'])->name('tutoring');

    // Configuração
    Route::get('/settings', function () {
        return view('pages.settings');
    })->middleware(['auth', 'verified'])->name('settings');

    /*
    Route::get('/administration/cadastro', function () {
        return view('forms.register');
    })->name('cadastro');
    */
    // cadastro 
    Route::get('/administration/cadastro', [IntegrationsController::class, 'index'])->name('integrations.index');
    Route::get('/administration/queue-processes', [IntegrationsController::class, 'list'])->name('integrations.list');
    Route::post('integrations/store', [IntegrationsController::class, 'store'])->name('integrations.store');
    Route::get('integrations/edit', [IntegrationsController::class, 'edit'])->name('integrations.edit');
    Route::put('integrations/update', [IntegrationsController::class, 'update'])->name('integrations.update');

      // Pessoa 
    Route::get('/administration/pessoas', [PessoasController::class, 'index'])->name('pessoas.index');
    Route::get('/administration/pessoas/create',  [PessoasController::class, 'create'])->name('pessoas.create');
    Route::post('/administration/pessoas',  [PessoasController::class, 'store'])->name('pessoas.store');
    Route::get('/administration/pessoas/{pessoa}',  [PessoasController::class, 'show'])->name('pessoas.show');
    Route::get('/administration/pessoas/{pessoa}/edit',  [PessoasController::class, 'edit'])->name('pessoas.edit');
    Route::put('/administration/pessoas/{pessoa}', [PessoasController::class, 'update'])->name('pessoas.update');
    Route::delete('/administration/pessoas/{pessoa}', [PessoasController::class, 'destroy'])->name('pessoas.destroy');


});

require __DIR__.'/auth.php';