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

use Illuminate\Http\Request;

Route::get('/', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/portal', 'PortalController@index')->name('portal');

Route::get('/logout', function(){
    Session::flush();
    Auth::logout();
    return Redirect::to('/login')
        ->with('status', 'You have successfully logged out');
});

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/blog', 'BlogController@index')->name('blog');
