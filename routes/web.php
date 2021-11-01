<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomePage\LandingPage@index');
Route::get('gate', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('gate', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::name('control-panel.')->middleware(['auth'])->prefix('control-panel')->group(function () {
    Route::resource('packages', 'ControlPanel\PackagesCtrl');
    Route::post('packages/change-status', 'ControlPanel\PackagesCtrl@change_status')->name('packages.change-status');
    Route::post('packages/best-seller', 'ControlPanel\PackagesCtrl@best_seller')->name('packages.best-seller');
    Route::post('packages/user-counter', 'ControlPanel\PackagesCtrl@user_counter')->name('packages.user-counter');
});