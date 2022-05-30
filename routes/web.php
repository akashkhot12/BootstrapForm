<?php

use App\Http\Controllers\FormController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'welcome');
Route::get('/form', function () {
    return view('form');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/greeting', function () {
    return 'Hello World';
});
Route::post('store',[FormController::class,'store'])->name('store'); //url , function,name
Route::get('table',[FormController::class,'table'])->name('table');
