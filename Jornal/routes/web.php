<?php

use Illuminate\Support\Facades\Route;


Route::get('', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/escritores', [\App\Http\Controllers\EscritorController::class, 'escritor'])->name('site.escritor');

Route::get('/materia/{id?}', [\App\Http\Controllers\LerMateriaController::class, 'LerMateria'])->name('site.lermateria');
Route::post('/materia/{id?}', [\App\Http\Controllers\LerMateriaController::class, 'LerMateria'])->name('site.lermateria');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('site.login');
Route::post('/validalogin', [\App\Http\Controllers\ValidaLogin::class, 'valida_login'])->name('site.validalogin');

Route::get('/validalogin', [\App\Http\Controllers\ValidaLogin::class, 'valida_login'])->name('site.validalogin');

Route::get('/editormaterias', [\App\Http\Controllers\ValidaLogin::class, 'edita_materia'])->name('site.editamateria')->middleware('auth');
Route::post('/editormaterias', [\App\Http\Controllers\ValidaLogin::class, 'edita_materia'])->name('site.editamateria')->middleware('auth');

Route::get('/adicionamateria', [\App\Http\Controllers\AdicionaMateria::class,'adicionamateria'])->name('site.adicionamateria');
Route::post('/adicionamateria', [\App\Http\Controllers\AdicionaMateria::class,'adicionamateria'])->name('site.adicionamateria');

Route::get('/editarmateria', [\App\Http\Controllers\EditarMateria::class,'editarmateria'])->name('site.editarmateria');
Route::post('/editarmateria', [\App\Http\Controllers\EditarMateria::class,'editarmateria'])->name('site.editarmateria');

Route::get('/excluirmateria', [\App\Http\Controllers\ExcluirMateria::class,'excluirmateria'])->name('site.excluirmateria');
Route::post('/excluirmateria', [\App\Http\Controllers\ExcluirMateria::class,'excluirmateria'])->name('site.excluirmateria');

Route::get('/pensamentododia', [\App\Http\Controllers\AdicionarPensamentoDia::class,'pensamentodia'])->name('site.adicionarpensamento');
Route::post('/pensamentododia', [\App\Http\Controllers\AdicionarPensamentoDia::class,'pensamentodia'])->name('site.adicionarpensamento');

Route::get('/materias/{id?}', [\App\Http\Controllers\MateriasController::class,'materias'])->name('site.materias');
Route::post('/materias/{id?}', [\App\Http\Controllers\MateriasController::class,'materias'])->name('site.materias');


Route::get('/portifolio', [\App\Http\Controllers\PortifolioController::class,'portifolio'])->name('site.portifolio');

Route::get("/adicionarportifolio", [\App\Http\Controllers\AdicionarPortifolio::class, 'adicionarpotifolio'])->name("site.adicionarportifolio");
Route::post("/adicionarportifolio", [\App\Http\Controllers\AdicionarPortifolio::class, 'adicionarpotifolio'])->name("site.adicionarportifolio");