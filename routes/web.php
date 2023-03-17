<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RotasGeraisController; 

//Rotas Gerais
Route::get('/' , [RotasGeraisController::class, 'index'])->name('index');                                    
Route::get('/ip' , [RotasGeraisController::class, 'ip'])->name('ip');   
                                  
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
Route::get('/dashboard', function () { return view('rotasgerais.dashboard');})->name('dashboard');
Route::get('/timbrado', [RotasGeraisController::class, 'timbrado'])->name('tinbrado');
});


/*
// exemplo de rotas do crud criadas manualmente

Route::get('/aluno/{id}/edit','AlunoController@edit')->name('alunos.edit');
Route::get('/aluno/create','AlunoController@create')->name('alunos.create');
Route::get('/aluno/{id}','AlunoController@show')->name('alunos.show');
Route::get('/aluno','AlunoController@index')->name('alunos.index');
Route::post('/aluno/','AlunoController@store')->name('alunos.store');
Route::put('/aluno/{id}','AlunoController@update')->name('alunos.update');
Route::delete('/aluno/{id}','AlunoController@destroy')->name('alunos.destroy');

*/