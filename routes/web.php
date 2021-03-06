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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/mission', function(){
    return view('mission');
});

Route::get('/portal', 'PortalController@index')->name('portal');

Route::get('/logout', function(){
    Session::flush();
    Auth::logout();
    return Redirect::to('/login')
        ->with('status', 'You have successfully logged out');
});

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/blog/view/{slug}','BlogController@getPost')
    ->name('blog.article')
    ->where('slug', '[\w\d\-\_]+');

Route::resource('blog/post', 'PostController');


Route::get('api/user', function(){
    print('get api/user');
   // return view('mission');
})->middleware('auth.basic.once');