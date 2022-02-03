<?php

use Xcholars\Support\Proxies\Route;

use Xcholars\Support\Proxies\RouteGroup as Group;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

Route::get('/', 'HomeController@show');

Route::get('/home', 'HomeController@show');

Group::middleware('auth')->members(function ()
{
    //signup
    Route::view('/signup', 'auth/signup');

    Route::view('/login', 'auth/signin');

    Route::post('/signup', 'SignupController@create');

    //signin
    Route::view('/signin', 'auth/signin');

    Route::post('/signin', 'LoginController@authenticate');

    //forgotPassword
    Route::view('/forgotPassword', 'auth/forgotPassword');

    Route::post('/forgotPassword', 'forgotPasswordController@verify');

    //resetCode
    Route::view('/confirmResetCode', 'auth/confirmResetCode');

    Route::post('/confirmResetCode', 'ResetPasswordController@verifyResetCode');

    //resetPassword
    Route::view('/resetPassword', 'auth/resetPassword');

    Route::post('/resetPassword', 'ResetPasswordController@reset');
});

Group::middleware('guest')->members(function ()
{
    // sign Out
    Route::get('/logout', 'LogoutController@logout');

    Route::post('/logout', 'LogoutController@logout');

    // admin
    Group::prefix('admin')->middleware('admin')->members(function ()
    {
        Route::get('/dashboard', 'DashboardController@show');

        // Room
        Route::get('/room', 'RoomController@show');

        Route::view('/add_room', 'admin/add_room');

        Route::post('/add_room', 'RoomController@create');

        Route::get('/edit_room/{id}', 'RoomController@edit');

        Route::post('/edit_room', 'RoomController@update');

        Route::get('/delete_room/{id}', 'RoomController@delete');

        // Clients

        Route::get('/clients', 'ProfileController@show');

        Route::get('/delete_client/{id}', 'ProfileController@delete');

        // Facilities
        Route::view('/add_facility', 'admin/add_facility');

        Route::post('/add_facility', 'FacilityController@create');

        Route::get('/facilities', 'FacilityController@show');

        Route::get('/edit_facility/{id}', 'FacilityController@edit');

        Route::post('/edit_facility', 'FacilityController@update');

        Route::get('/delete_facility/{id}', 'FacilityController@delete');

        // Settings
        Route::post('/add_settings', 'SettingsController@update');

        Route::get('/settings', 'SettingsController@show');

        Route::post('/add_settings', 'SettingsController@update');

        // bookings
        Route::get('/bookings', 'BookingController@show');


    });

    // client
    Group::prefix('client')->middleware('client')->members(function ()
    {
        Route::view('/home', '/client/home');

        Route::get('/rooms', 'RoomController@show');

        Route::get('/room/{id}', 'RoomController@show');

        Route::post('/invoice', 'BookingController@invoice');

        Route::post('/book_room', 'BookingController@create');

       Route::get('/profile/{id}', 'ProfileController@show');

       Route::post('/account', 'ProfileController@account');

       Route::post('/bookings', 'ProfileController@bookings');

       Route::post('/update', 'ProfileController@update');

       Route::get('/facilities', 'FacilityController@show');

       Route::get('/support', 'SettingsController@show');

    });
});

Route::fallback(function (Response $response)
{
    return $response->withView('404');
});
