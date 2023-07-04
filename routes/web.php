<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('main');
});

Route::get('/our-firm', function () {
    return view('our-firm');
});

// Private Banking
Route::prefix('private-banking')->as('web.private-banking.')->group(function () {
    Route::get('', function() { return view('web.private-banking.index'); })->name('index');
    Route::get('/private-equity', function() { return view('web.private-banking.private_equity'); })->name('private_equity');
    Route::get('/private-wealth-management', function() { return view('web.private-banking.private_wealth_management'); })->name('private_wealth_management');
    Route::get('/corporate-advisory-and-banking', function() { return view('web.private-banking.corporate_advisory_and_banking'); })->name('corporate_advisory_and_banking');
});
