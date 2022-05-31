<?php

use Illuminate\Support\Facades\Route;

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

// Admin Routes
Route::middleware(['auth','role:admin'])->name('admin.')->prefix('admin')->group(function (){
    Route::view('/','web.admin.index')->name('index');
    Route::view('/all-roles','web.admin.roles.index')->name('roles-page');
    Route::resource('roles',App\Http\Controllers\Web\Admin\RoleController::class);
});

// User Routes
Route::middleware(['auth','role:user'])->name('user.')->prefix('user')->group(function (){
    Route::view('/','web.user.index')->name('index');
});


require __DIR__.'/auth.php';
