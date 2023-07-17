<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'User'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'UserAuth@login')->name('user.login');
        Route::post('login', 'UserAuth@doLogin');
        Route::get('signup', 'UserAuth@signup')->name('user.signup');
        Route::post('signup', 'UserAuth@doSignup');
    });
    Route::group(['middleware' => 'auth'], function () {
        Route::any('logout', 'UserAuth@logout')->name('user.logout');
        Route::get('/', 'HomeController@index');
        Route::post('result', 'HomeController@quizResult');
        Route::get('result-csv', 'HomeController@exportCsv');
    });

});


