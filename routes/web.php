<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/presentation',[HomeController::class,'presentation'])->name('presentation');
Route::get('/programme',[HomeController::class,'programme'])->name('programme');
Route::get('/evenement',[HomeController::class,'evenement'])->name('evenement');
Route::get('/promoteurs-et-animateurs',[HomeController::class,'promoteur'])->name('promoteur');
Route::get('/temoignage',[HomeController::class,'temoignage'])->name('temoignage');
Route::get('/admission',[HomeController::class,'admission'])->name('admission');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/users', 'App\Http\Controllers\UserController@index')->name('user.index');
    Route::get('/users/show/{id}', 'App\Http\Controllers\UserController@show')->name('user.show');
    Route::get('/users/create', 'App\Http\Controllers\UserController@create')->name('user.create');
    Route::get('/users/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('user.edit');
    Route::post('/users/store', 'App\Http\Controllers\UserController@store')->name('user.store');
    Route::put('/users/update/{user}', 'App\Http\Controllers\UserController@update')->name('user.update');
    Route::put('/users/speed/{user}', 'App\Http\Controllers\UserController@updateSpeed')->name('user.update.speed');
    Route::delete('/users/delete/{user}', 'App\Http\Controllers\UserController@delete')->name('user.delete');
    Route::get('/users/{user}/download', 'App\Http\Controllers\UserController@downloadFiles')->name('user.downloadFiles');


});
