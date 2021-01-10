<?php

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


Route::group([ 'domain' => 'www.subsurface.gvi-group.com' ], function () {
    Route::get('/', function () {
     
     return view('subsurface-home');
 });
 Route::any('/contactform', 'UtilityController@contactform')->name('contactform.submit');
 });
 
 Route::group([ 'domain' => 'www.automation.gvi-group.com' ], function () {
    Route::get('/', function () {
     
     return view('automation-home');
 });
 Route::any('/contactform', 'UtilityController@contactform')->name('contactform.submit');
 });
 
 
 Route::group([ 'domain' => 'www.ngl.gvi-group.com' ], function () {
 Route::auth();
 if (Cache::has('register-disabled')) { 
 Route::any('register', function(){
     return redirect('/login');
 });
 }
 //geust Routes
 Route::get('/', function () {
     session()->remove('edit');
     return view('home');
 });
 
 Route::get('/qhse', function () {
     session()->remove('edit');
     return view('qhse');
 });
 Route::get('/about', function () {
     session()->remove('edit');
     return view('about');
 });
 
 Route::get('/services/procurement-supply', function () {
     session()->remove('edit');
     return view('procurement-supply');
 });
 
 Route::get('/services/instrumentation-electrical-automation', function () {
     session()->remove('edit');
     return view('instrumentation-electrical-automation');
 });
 
 
 Route::get('/services/operation-installation-maintenance', function () {
     session()->remove('edit');
     return view('operation-installation-maintenance');
 });
 
 Route::get('/services/well-head-valve-engineering', function () {
     session()->remove('edit');
     return view('well-head-valve-engineering');
 });
 
 Route::get('/services/turbine-maintenance', function () {
     session()->remove('edit');
     return view('turbine-maintenance');
 });
 
 Route::get('/services/subsurface-reservoir', function () {
     session()->remove('edit');
     return view('subsurface-reservoir');
 });
 
 Route::get('/contact', function () {
     session()->remove('edit');
     return view('contact');
 });
 
 Route::any('/contactform', 'UtilityController@contactform')->name('contactform.submit');
 
 //admin Routes
 Route::get('/admin', function () {
     return view('welcome');
 });
 
 Route::get('register/toggle', function () {
     if (Cache::has('register-disabled')) {
        
      Cache::forget('register-disabled');
 } else { Cache::forever('register-disabled', false);}
    
    return redirect('/admin');
 })->middleware('auth');
 Route::any('/about/edit', 'PageController@about')->name('about.edit');
 Route::any('/edit', 'PageController@home')->name('home.edit');
 Route::any('services/procurement-supply/edit', 'PageController@procurement_supply')->name('procurement-supply.edit');
 Route::any('services/operation-installation-maintenance/edit', 'PageController@operation_installation_maintenance')->name('operation-installation-maintenance.edit');
 Route::any('/contact/edit', 'PageController@contact')->name('contact.edit');
 Route::any('/image/upload', 'PageController@image_upload')->name('image.upload');
 });
 
 Route::group([ 'domain' => 'www.gvi-group.com' ], function () {
    Route::get('/', function () {
     
     return view('group-home');
 });
 Route::get('/about', function () {
     session()->remove('edit');
     return view('group-about');
 });
 Route::any('/contactform', 'UtilityController@contactform')->name('contactform.submit');
 });
 