<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SpecialityController;
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

Route::prefix('')->name('client.')->group(function () {
    //Route::get('/', [HomeController::class, 'index'])->name('index');


});


///admin route
Route::group(['prefix' => 'admin'], function () {

    Route::get('BeautifiersAndSpeciality',[MainController::class,'beSp'])->name('BeautifiersAndSpeciality');
    Route::get('dashboard', [MainController::class,'dashboard'])->name('dashboard');
    Route::get('appointments', [MainController::class,'appointment'])->name('appointments');
    Route::get('customers', [MainController::class,'customer'])->name('customers');
    Route::get('invoice', [MainController::class,'invoice'])->name('invoice');
    Route::get('service', [MainController::class,'service'])->name('service');
    Route::get('profile', [MainController::class,'profile'])->name('profile');




    Route::get('beautifierList', [MainController::class,'dashboard'])->name('beautifierList');
    Route::get('reviews', [MainController::class,'dashboard'])->name('reviews');

    //change password
    Route::get('change-password', [SettingController::class,'changepass']);
    Route::post('change-password', [SettingController::class,'postchangepass']);
    //setting information
    Route::get('setting', [SettingController::class,'setting']);
    Route::post('setting', [SettingController::class,'postsetting']);



});

