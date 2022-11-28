

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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


Route::get('/','App\Http\Controllers\PagesController@index');
Route::get('/about','App\Http\Controllers\PagesController@about');
Route::get('/service','App\Http\Controllers\PagesController@service');

Route::resource('/projects','App\Http\Controllers\ProjectsController');
Route::post('/projects','App\Http\Controllers\ProjectsController@update');

Route::resource('/admins','App\Http\Controllers\adminController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('rolesandpermissions', [AdminController::class,'addroles']);

