<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::middleware('auth')->group(function () {
Route::get('/', function () {
    return view('dashboard.dashboard');
})->name('home');

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    Route::get('/profile', function () {
        return view('dashboard.profile');
    })->name('profile');

    Route::get('/services',[ServicesController::class,'index2'])->name('services');
    Route::get('/services/create',[ServicesController::class,'create'])
        ->name('services.create');
    Route::post('/services/store',[ServicesController::class,'store'])
        ->name('services.store');
    Route::get('/services/edit/{id}',[ServicesController::class,'edit'])
        ->name('services.edit');
    Route::put('/services/update/{id}',[ServicesController::class,'update'])
        ->name('services.update');
    Route::delete('/services/delete/{id}',[ServicesController::class,'destroy'])
        ->name('services.delete');


    Route::get('/courses',[CoursesController::class,'index2'])->name('courses');
    Route::get('/courses/create',[CoursesController::class,'create'])
        ->name('courses.create');
    Route::post('/courses/store',[CoursesController::class,'store'])
        ->name('courses.store');
    Route::get('/courses/edit/{id}',[CoursesController::class,'edit'])
        ->name('courses.edit');
    Route::put('/courses/update/{id}',[CoursesController::class,'update'])
        ->name('courses.update');
    Route::delete('/courses/delete/{id}',[CoursesController::class,'destroy'])
        ->name('courses.delete');


    Route::get('/Project',[ProjectController::class,'index2'])->name('project');
    Route::get('/Project/create',[ProjectController::class,'create'])
        ->name('project.create');
    Route::post('/project/store',[ProjectController::class,'store'])
        ->name('project.store');
    Route::get('/project/edit/{id}',[ProjectController::class,'edit'])
        ->name('project.edit');
    Route::put('/project/update/{id}',[ProjectController::class,'update'])
        ->name('project.update');
    Route::delete('/project/delete/{id}',[ProjectController::class,'destroy'])
        ->name('project.delete');


    Route::get('/Team',[TeamController::class,'index2'])->name('team');
    Route::get('/Team/create',[TeamController::class,'create'])
        ->name('team.create');
    Route::post('/Team/store',[TeamController::class,'store'])
        ->name('team.store');
    Route::get('/Team/edit/{id}',[TeamController::class,'edit'])
        ->name('team.edit');
    Route::put('/Team/update/{id}',[TeamController::class,'update'])
        ->name('team.update');
    Route::delete('/Team/delete/{id}',[TeamController::class,'destroy'])
        ->name('team.delete');

    Route::get('/About',[AboutController::class,'index2'])->name('about');
    Route::get('/About/edit/{id}',[AboutController::class,'edit'])
        ->name('about.edit');
    Route::put('/About/update/{id}',[AboutController::class,'update'])
        ->name('about.update');

    Route::get('/Footer',[FooterController::class,'index2'])->name('footer');
    Route::get('/Footer/edit/{id}',[FooterController::class,'edit'])
        ->name('footer.edit');
    Route::put('/Footer/update/{id}',[FooterController::class,'update'])
        ->name('footer.update');



});

require __DIR__.'/auth.php';
