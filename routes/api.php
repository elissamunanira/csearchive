<?php
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\authController;
use App\Http\Controllers\PdfController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::resource('/users',LecturerController::class);
//public routes


Route::post('/register',[authController::class,'register']);
Route::post('/login',[authController::class,'login']);
Route::get('/projects',[ProjectController::class,'index']);
Route::post('/projects',[ProjectController::class,'store']);
Route::get('/projects/{id}',[ProjectController::class,'show']);
Route::patch('/projects/{id}',[ProjectController::class,'update']);
Route::delete('/projects/{id}',[ProjectController::class,'destroy']);
Route::get('/projects/search/{title}',[ProjectController::class,'search']);

Route::resource('/pdf',PdfController::class);



//protected routes

Route::group(['middleware'=>['auth:sanctum']],function() {

    Route::post('/users',[LecturerController::class,'store']);
    Route::get('/users/{id}',[LecturerController::class,'show']);
    Route::patch('/users/{id}',[LecturerController::class,'update']);
    Route::delete('/users/{id}',[LecturerController::class,'destroy']);
    Route::get('/users/search/{name}',[LecturerController::class,'search']);

    Route::post('/logout',[authController::class,'logout']);

});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
