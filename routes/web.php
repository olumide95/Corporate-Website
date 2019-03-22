<?php
use Illuminate\Support\Facades\Cache;
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

Route::get('/about', function () {
	session()->remove('edit');
    return view('about');
});

Route::get('/services/procurement-supply', function () {
	session()->remove('edit');
    return view('procurement-supply');
});

Route::get('/services/operation-installation-maintenance', function () {
	session()->remove('edit');
    return view('operation-installation-maintenance');
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