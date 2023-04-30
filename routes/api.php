<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('Services',[\App\Http\Controllers\Admin\ServicesController::class,'index']);
Route::get('won_Services/{id}',[\App\Http\Controllers\Admin\ServicesController::class,'show']);
Route::get('Projects',[\App\Http\Controllers\Admin\ProjectController::class,'index']);
Route::get('th_project',[\App\Http\Controllers\Admin\ProjectController::class,'th_project']);
Route::get('th_services',[\App\Http\Controllers\Admin\ServicesController::class,'thServices']);
Route::get('won_project/{id}',[\App\Http\Controllers\Admin\ProjectController::class,'show']);
Route::get('Courses',[\App\Http\Controllers\Admin\CoursesController::class,'index']);
Route::get('for_Courses',[\App\Http\Controllers\Admin\CoursesController::class,'for_project']);
Route::get('CourseDetailsPage/{id}',[\App\Http\Controllers\Admin\CoursesController::class,'show']);
Route::get('Footers',[\App\Http\Controllers\Admin\FooterController::class,'index']);
Route::get('Charts',[\App\Http\Controllers\Admin\ChartController::class,'index']);
Route::get('Teams',[\App\Http\Controllers\Admin\TeamController::class,'index']);
Route::get('Abouts',[\App\Http\Controllers\Admin\AboutController::class,'index']);
Route::get('Homes',[\App\Http\Controllers\Admin\HomeController::class,'index']);
Route::post('Contacts',[\App\Http\Controllers\Admin\ContactController::class,'store']);
Route::post('ServicesC',[\App\Http\Controllers\Admin\ServicesController::class,'store2']);
