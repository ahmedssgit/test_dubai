<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\customerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [UserController::class, 'login'])->name('/');
Route::post('/login', [UserController::class, 'loginPost'])->name('login');



Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home');
    
    // Route::get('/usershow', [AdminController::class, 'usershow']);
   

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

        Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
            Route::get('usershow', [AdminController::class, 'usershow'])->name('usershow');
            Route::get('delete/{id}', [AdminController::class, 'delete'])->name('delete');
            Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit');
            Route::post('update/{id}', [AdminController::class, 'update'])->name('update');
            Route::get('create', [UserController::class, 'register'])->name('create');
            Route::post('create', [UserController::class, 'registerPost'])->name('create');
        });

        Route::group(['prefix' => 'template', 'as' => 'template.'], function () {
            Route::get('templateshow', [TemplateController::class, 'templateshow'])->name('templateshow');
            Route::get('create', [TemplateController::class, 'create'])->name('create');
            Route::post('add', [TemplateController::class, 'add'])->name('add');
        });

        Route::group(['prefix' => 'task', 'as' => 'task.'], function () {
            Route::get('taskshow', [TaskController::class, 'taskshow'])->name('taskshow');
            Route::get('create', [TaskController::class, 'create'])->name('create');
            Route::post('add', [TaskController::class, 'add'])->name('add');
        });
        Route::group(['prefix' => 'project', 'as' => 'project.'], function () {
            Route::get('projectshow', [ProjectController::class, 'projectshow'])->name('projectshow');
            Route::get('create', [ProjectController::class, 'create'])->name('create');
            Route::post('add', [ProjectController::class, 'add'])->name('add');
        });
    });

    Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
        Route::get('home', [customerController::class, 'index'])->name('home');
        Route::get('complete/{id}', [customerController::class, 'complete'])->name('complete');
        Route::get('note/{id}', [customerController::class, 'note'])->name('note');
        Route::post('add_note/{id}', [customerController::class, 'add_note'])->name('add_note');

    });
});