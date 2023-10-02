<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact-send', [HomeController::class, 'contactSend'])->name('contact-send');

Auth::routes();

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('ds-home');
    Route::get('/contact', [AdminHomeController::class, 'contact'])->name('ds-contact');
    Route::get('/contact/download/{id}', [AdminHomeController::class, 'downFile'])->name('ds-downfile');
});

Route::group(['middleware' => 'role'],function(){

});

Route::get('/greeting/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'vi', 'ja'])) {
        abort(400);
    }

    App::setLocale($locale);

    // ...
});
