<?php

use
Illuminate\Support\Facades\Route;

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
    return view('login');
});
//Route::get('list' , 'users@list');
//Route::get('create','users@create');

use App\Http\Controllers\users;
// PostController


//use App\Http\Controllers\users;
// PostController
Route::get('/create', [users::class, 'create']);
Route::post('/createsubmit', [users::class, 'createsubmit']);
Route::post('/loginsubmit', [users::class, 'loginsubmit']);

Route::group(['middleware'=>['logCheck']],function(){
    Route::get('/list', [users::class, 'list']);
   
});

