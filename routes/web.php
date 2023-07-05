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
// Investment Management
Route::prefix('investment-management')->as('web.investment-management.')->group(function () {
    Route::get('', function() { return view('web.investment-management.index'); })->name('index');
    Route::get('/public-equity', function() { return view('web.investment-management.public_equity'); })->name('public_equity');
    Route::get('/fixed-income', function() { return view('web.investment-management.fixed_income'); })->name('fixed_income');
    Route::get('/open-account', function() { return view('web.investment-management.open_account'); })->name('open_account');
});
// Investor Services
Route::prefix('investor-services')->as('web.investor-services.')->group(function () {
    Route::get('', function() { return view('web.investor-services.index'); })->name('index');
    Route::get('/custody-and-fund-services', function() { return view('web.investor-services.custody_and_fund_services'); })->name('custody_and_fund_services');
    Route::get('/specialist-expertise', function() { return view('web.investor-services.specialist_expertise'); })->name('specialist_expertise');
    Route::get('/markets', function() { return view('web.investor-services.markets'); })->name('markets');
    Route::get('/investment-operations-and-technology-solutions', function() { return view('web.investor-services.investment_operations_and_technology_solutions'); })->name('investment_operations_and_technology_solutions');
});
// Careers
Route::prefix('careers')->as('web.careers.')->group(function () {
    Route::get('', function() { return view('web.careers.index'); })->name('index');
    Route::get('/what-we-look-for', function() { return view('web.careers.what_we_look_for'); })->name('what_we_look_for');
    Route::get('/total-rewards', function() { return view('web.careers.total_rewards'); })->name('total_rewards');
    Route::get('/life-at-vanward', function() { return view('web.careers.life_here'); })->name('life_here');
    Route::get('/cares', function() { return view('web.careers.cares'); })->name('cares');
});
// Our Firm
Route::prefix('our-firm')->as('web.our-firm.')->group(function () {
    Route::get('', function() { return view('web.our-firm.index'); })->name('index');
    Route::get('/the-partnership', function() { return view('web.our-firm.the_partnership'); })->name('the_partnership');
    Route::get('/our-mission-and-profile', function() { return view('web.our-firm.our_mission_and_profile'); })->name('our_mission_and_profile');
    Route::get('/sustainability', function() { return view('web.our-firm.sustainability'); })->name('sustainability');
    Route::get('/philanthropy', function() { return view('web.our-firm.philanthropy'); })->name('philanthropy');
    Route::get('/policies-and-disclosures', function() { return view('web.our-firm.policies_and_disclosures'); })->name('policies_and_disclosures');
});
