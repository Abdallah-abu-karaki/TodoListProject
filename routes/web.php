<?php

use App\Http\Controllers\todosController;
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

Route::get('/',function(){
   return view('welcome');
});

Route::get('/todos',[todosController::class,'index']);
Route::get('/todos/{todo_id}',[todosController::class,'show']);
Route::get('/create',[todosController::class,'create']);
Route::post('/create',[todosController::class,'store']);
Route::get('/todos/{todo_id}/edit' ,[todosController::class,'edit']);
Route::post('/todos/{todo_id}',[todosController::class,'save_change']);
Route::get('/todos/{todo_id}/delete',[todosController::class,'delete']);
Route::get('/todos/{todo_id}/completed',[todosController::class,'completed']);
