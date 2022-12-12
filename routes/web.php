

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;

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
Route::get('/dashboard','App\Http\Controllers\DashboardController@index');

Route::resource('/projects','App\Http\Controllers\ProjectsController');
Route::post('/projects/{id}','App\Http\Controllers\ProjectsController@update');

Route::resource('/admins','App\Http\Controllers\adminController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProjectsController::class);
});
