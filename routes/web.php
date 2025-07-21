<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('post','PostController@index'); 


Route::get('post', [PostController::class, 'index']);
// Route::get('post/create',function(){ 
// return view('create'); 
//  });


 Route::get('post/create', [PostController::class, 'create']);
Route::post('post', [PostController::class, 'store']);
Route::get('post/{id}/edit', [PostController::class, 'edit']);
Route::post('post/update/{id}', [PostController::class, 'update']);
Route::post('post/delete/{id}', [PostController::class, 'destroy']);
 
// Route::post('post', 'PostController@store'); 
//  Route::get('/post/create', 'PostController@create');
// Route::get('post/{id}/edit','PostController@edit');
// Route::post('post/update/{id}','PostController@update');
// Route::post('post/delete/{id}','PostController@destroy');