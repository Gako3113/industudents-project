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

Route::get('/', 'PostController@index')->middleware('auth');
Route::post('/posts', 'PostController@store');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/log', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');
Route::get('/posts/{post}/edit', 'PostController@edit');

Route::get('/top', function() {
    return view('top');
});
Auth::routes();

// follow
Route::get('users', 'UsersController@index')->name('users');
Route::group(['middleware' => 'auth'], function () {
    // Route::get('users', 'UsersController@index')->name('users');
    Route::post('users/{user}/follow', 'UsersController@follow')->name('follow');
    Route::delete('users/{user}/unfollow', 'UsersController@unfollow')->name('unfollow');
});

//message
Route::get('/message', 'MessageController@index')->name('chat');
Route::get('/chat/{recieve}' , 'ChatController@index')->name('chat');
Route::post('/chat/send' , 'ChatController@store')->name('chatSend');

//login users
Route::get('/home', 'AdminHomeController@index')->name('home');

//login admin
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin-register');

//admin password reset
Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');

Route::get('password/admin/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('password/admin/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('password/admin/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('password/admin/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');