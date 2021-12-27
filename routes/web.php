<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\DB;
// use AlbertCht\InvisibleReCaptcha\InvisibleReCaptchaServiceProvider;


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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', function () {return view('front.index');})->name('home');
Route::get('/about/howto', function () {return view('front.howto');})->name('howto');
Route::get('/about/features', function () {return view('front.features');})->name('features');
Route::get('/about/contact', function () {return view('front.contact');})->name('contact');

Route::get('/about/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/about/contact', [ContactController::class, 'mailContactForm']);

Route::get('/app/locations', [LocationController::class, 'index'])->name('locations');
Route::get('/app/location/create', [LocationController::class, 'create']);
Route::delete('/app/location/{id}', [LocationController::class, 'destroy']);

Route::post('/app/uploadfile', [LocationController::class, 'post'])->name('upload');

Route::get('/app/location/{id}', [SiteController::class, 'show'])->name('location');
Route::post('/app/site/{id}', [SiteController::class, 'store'])->name('site');
Route::delete('/app/site/{id}', [SiteController::class, 'destroy']);

Route::post('/app/note/create/{id}', [NoteController::class, 'create']);
Route::put('/app/note/update/{id}', [NoteController::class, 'update']);

Route::get('/account/profile', [UserController::class, 'profile'])->middleware(['auth'])    ->name('profile');
Route::delete('/account/profile', [UserController::class, 'destroyUser']);

Route::get('auth/social', [LoginController::class, 'show'])->name('social.login');
Route::get('auth/{driver}', [LoginController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('oauth/{driver}/callback', [LoginController::class, 'handleProviderCallback'])->name('social.callback');

