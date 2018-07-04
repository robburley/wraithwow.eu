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

Route::get('/', 'HomePageController@index');

Route::get('/apply', 'ApplicationsController@create');
Route::post('/apply', 'ApplicationsController@store');

Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');

Route::post('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'Admin\AdminController@index')->name('admin');

    Route::get('/admin/applications/{application}', 'Admin\ApplicationsController@show')->name('admin.applications.index');
    Route::post('/admin/applications/{application}/accept', 'Admin\ApplicationsController@update')->name('admin.applications.update');
    Route::post('/admin/applications/{application}/decline', 'Admin\ApplicationsController@destroy')->name('admin.applications.destroy');
});

//Route::get('/test', function(){
//   \App\User::create([
//       'name' => 'test',
//       'email' => 'test@test.test',
//       'password' => bcrypt('carbomb2007'),
//       'guild_member' => 1,
//       'admin' => 1
//   ]);
//});
