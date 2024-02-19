<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewsController;
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
    return view('welcome');
});


Route::group(['prefix' => 'admin-panel'], function () {
    Route::get('/', [AdminPanelController::class, 'index'])->name('admin.panel');
    Route::post('/login', [AdminPanelController::class, 'login'])->name('admin.login');
    Route::group(['middleware' => 'check.authenticated'], function () {
        /*
         Start Page Module
         */
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/allpage', [PageController::class, 'index'])->name('page.index');
        Route::get('/addpage', [PageController::class, 'addpage'])->name('addpage');
        Route::get('/pageedit/{page}/edit', [PageController::class, 'edit'])->name('page.edit');
        Route::delete('/pagedestroy/{id}', [PageController::class, 'destroy'])->name('page.destroy');
        Route::post('/addpage', [PageController::class, 'store'])->name('page.store');
        Route::post('/pageupdate/{id}', [PageController::class, 'update'])->name('page.update');
        /*
        End Page Module
        */

        /*
        Start News Module
        */
        Route::get('/allnews', [NewsController::class, 'index'])->name('news.index');
        Route::get('/addnews', [NewsController::class, 'addnews'])->name('addnews');
        Route::get('/newsedit/{page}/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::delete('/newsdestroy/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
        Route::post('/addnews', [NewsController::class, 'store'])->name('news.store');
        Route::post('/newsupdate{id}', [NewsController::class, 'update'])->name('news.update');
        /*
        End News Module
        */

        /*
         Start Menu Module
        */
        Route::get('/allmenu', [MenuController::class, 'index'])->name('menu.index');
        Route::get('/addmenu', [MenuController::class, 'create'])->name('addmenu');
        Route::post('/addmenu/', [MenuController::class, 'store'])->name('menu.store');
        Route::post('/menuupdate/{id}', [MenuController::class, 'update'])->name('menu.update');
        Route::get('/menuedit/{page}/edit', [MenuController::class, 'edit'])->name('menu.edit');
        Route::delete('/menudestroy/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
        Route::get('/ajaxsearch', [MenuController::class, 'searchajax'])->name('menu.ajaxsearch');
        /*
         End Menu Module
        */

    });
    Route::get('/signout', [AdminPanelController::class, 'signout'])->name('admin.signout');
});

