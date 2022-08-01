<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProjectController;

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

Route::post('register',[StudentController::class,""]);
Route::post('login',[StudentController::class,""]);

Route::group(["middleware"=>["auth:sanctum"]],function(){
    Route::get('profile',[StudentController::class,""]);
    Route::get('logout',[StudentController::class,""]);

    // Project 
    Route::post('create',[ProjectController::class,""]);
    Route::get('list',[ProjectController::class,""]);
    Route::get('single/{$id}',[ProjectController::class,""]);
    Route::delete('delete/{$id}',[ProjectController::class,""]);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
