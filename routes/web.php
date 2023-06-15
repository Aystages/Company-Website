<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UIController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\GraphicController;
use App\Http\Controllers\PriceController;
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
    return view('home');
});

Route::get('/about', [AboutController::class,'show'])->name('about');

Route::get('/contact', [ContactController::class,'show'])->name('contact');

Route::get('/ux-ui-design', [UIController::class,'show'])->name('uidesign');

Route::get('/marketing', [MarketingController::class,'show'])->name('marketing');

Route::get('/software-development', [SoftwareController::class,'show'])->name('software');

Route::get('/graphic-design', [GraphicController::class,'show'])->name('graphic');

Route::get('/pricing', [PriceController::class,'show'])->name('pricing');


