<?php

use Illuminate\Support\Facades\{Route, Auth};

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

Route::group(['middleware'=>['auth']], function(){
	Route::prefix('admin')->group(function(){
		Route::get('/', function(){
			return view('admin.pages.dashboard');
			})->name('admin.home');
	});
	
	
});

Route::get('/', App\Http\Controllers\PrepageController::class)->name('prepage');
Route::get('/about', [App\Http\Controllers\PrepageController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PrepageController::class, 'contact'])->name('contact');
Route::get('/flow', [App\Http\Controllers\PrepageController::class, 'flow'])->name('flow');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/edituser', [App\Http\Controllers\UserEditController::class, 'edit']);
Route::post('/home', [App\Http\Controllers\UserEditController::class, 'store']);
Route::post('/home/edituser/{id}', [App\Http\Controllers\UserEditController::class, 'update']);
