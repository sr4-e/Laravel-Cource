<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\BlankController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ElementsController;
use App\Http\Controllers\IconsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\MapsController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('index');
// })->name('dashboard');

Route::get('/dashboard',[IndexController::class, 'index'])->name('index');
Route::get('/profile',[ProfileController::class, 'profile'])->name('profile');
Route::get('/settings',[SettingsController::class, 'settings'])->name('settings');
Route::get('/invoice',[InvoiceController::class, 'invoice'])->name('invoice');
Route::get('/blank',[BlankController::class, 'blank'])->name('blank');
Route::get('/signin',[AuthController::class, 'signin'])->name('signin');
Route::get('/signup',[AuthController::class, 'signup'])->name('signup');
Route::get('/alerts', [ElementsController::class, 'alerts'])->name('alerts');
Route::get('/buttons', [ElementsController::class, 'buttons'])->name('buttons');
Route::get('/cards', [ElementsController::class, 'cards'])->name('cards');
Route::get('/general', [ElementsController::class, 'general'])->name('general');
Route::get('/grid', [ElementsController::class, 'grid'])->name('grid');
Route::get('/typography', [ElementsController::class, 'typography'])->name('typography');
Route::get('/icons', [IconsController::class, 'icons'])->name('icons');
Route::get('/forms', [FormsController::class, 'forms'])->name('forms');
Route::get('/charts', [ChartsController::class, 'charts'])->name('charts');
Route::get('/maps', [MapsController::class, 'maps'])->name('maps');


// Route::view('/alerts', 'ui-alerts')->name('alerts');
// Route::view('/buttons', 'ui-buttons')->name('buttons');
// Route::view('/cards', 'ui-cards')->name('cards');
// Route::view('/general', 'ui-general')->name('general');
// Route::view('/grid', 'ui-grid')->name('grid');
// Route::view('/typography', 'ui-typography')->name('typography');

// Route::view('/forms', 'forms-basic-inputs')->name('forms');

// Route::view('/charts', 'charts-chartjs')->name('charts');

// Route::view('/icons', 'icons-feather')->name('icons');

// Route::view('/blank', 'pages-blank')->name('blank');
// Route::view('/invoice', 'pages-invoice')->name('invoice');
// Route::view('/profile', 'pages-profile')->name('profile');
// Route::view('/settings', 'pages-settings')->name('settings');

// Route::view('/signin', 'pages-sign-in')->name('signin');
// Route::view('/signup', 'pages-sign-up')->name('signup');

// Route::view('/maps', 'maps-google')->name('maps');

Route::view('/404', 'errors-404')->name('404');
