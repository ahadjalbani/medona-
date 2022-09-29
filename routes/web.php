<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;

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


Route::get('/index',[DashboardController::class,'index'])->name('dashboard');

Route::get('/about',[DashboardController::class,'about'])->name('about.doc');

Route::get('/service',[DashboardController::class,'service'])->name('service.doc');

route::get('/price',[DashboardController::class,'price'])->name('price.doc');

route::get('/contact',[DashboardController::class,'contact'])->name('contact.doc');

route::post('/contact',[ContactController::class,'store'])->name('doc.store');

route::get('/blog',[DashboardController::class,'blog'])->name('blog.doc');
