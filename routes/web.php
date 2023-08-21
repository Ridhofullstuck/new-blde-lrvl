<?php
use App\http\Controllers\PageController;
use App\http\Controllers\ContactController;
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

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/galleri', [PageController::class, 'galleri']);

Route::get('/contact', [PageController::class, 'contact'])->name('contactForm');
Route::post('/send', [ContactController::class, 'send'])->name('send.email');
