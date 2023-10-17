<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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



Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'admin','verified'])->name('dashboard');

Route::middleware('auth' , 'admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('product', ProductController::class);
    
});

require __DIR__.'/auth.php';

//Frontend
Route::get('/',[FrontendController::class,'home'])->name('home');
Route::get('about',[FrontendController::class,'about'])->name('about');
Route::get('shop',[FrontendController::class,'shop'])->name('shop');
Route::get('cart',[FrontendController::class,'cart'])->name('cart');
Route::get('checkout\{id}',[FrontendController::class,'checkout'])->name('checkout');
Route::get('contact',[FrontendController::class,'contact'])->name('contact');


Route::resource('contactUs',ContactUsController::class);

Route::resource('order',OrderController::class);



