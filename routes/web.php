<?php
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomePage\LandingPage@index');

Route::group(['name'=>'control-panel'], function(){
    Route::resource('packages', 'ControlPanel\PackagesCtrl');
});
