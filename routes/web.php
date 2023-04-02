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
    return view('web.site.index');
});

// Admin Routes
Route::middleware(['auth','role:admin'])->name('admin.')->prefix('admin')->group(function (){
    Route::view('/','web.admin.index')->name('index');
    Route::view('/all-roles','web.admin.roles.index')->name('roles-page');
    Route::resource('roles',App\Http\Controllers\Web\Admin\RoleController::class);
    Route::get('meetings',[App\Http\Controllers\Web\Admin\MeetingController::class,'index'])->name('meeting.index');
    Route::get('meeting/create',[App\Http\Controllers\Web\Admin\MeetingController::class,'create'])->name('meeting.create');
    Route::post('meeting/store',[App\Http\Controllers\Web\Admin\MeetingController::class,'store'])->name('meeting.store');
    Route::get('email/create',[App\Http\Controllers\Web\Admin\EmailController::class,'create'])->name('email.create');
    Route::post('email/store',[App\Http\Controllers\Web\Admin\EmailController::class,'store'])->name('email.store');

});

// User Routes
Route::middleware(['auth','role:user'])->name('user.')->prefix('user')->group(function (){
    Route::view('/','web.user.index')->name('index');
    Route::resource('wallet',App\Http\Controllers\Web\User\WalletController::class);

});


require __DIR__.'/auth.php';
