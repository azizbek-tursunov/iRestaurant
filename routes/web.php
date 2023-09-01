<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReservationController;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;


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

// Language routes

Route::get('lang/change', [LanguageController::class, 'change'])->name('changeLang');

// Page routes

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/reservation', [PageController::class, 'reservation'])->name('reservation');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');

// Blog routes

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/post/{blog}', [BlogController::class, 'show'])->name('blog.show');

// Reservation routes

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

// Contact routes

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// make nullable

//Route::get('/update-column', function () {
//    Schema::table('menus', function (Blueprint $table) {
//        $table->text('about')->nullable()->change();
//        $table->text('about_ru')->nullable()->change();
//    });
//});
