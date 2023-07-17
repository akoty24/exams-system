<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ExamController;


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    // define the guard from 'config/auth.php' to be admin not web
    Config::set('auth.defines', 'admin');
    Route::group(['middleware' => 'adminGuest:admins'], function () {
        Route::get('login', 'AdminAuth@login');
        Route::post('login', 'AdminAuth@doLogin');
        Route::get('forgot/password', 'AdminAuth@forgot_password');
        Route::post('forgot/password', 'AdminAuth@forgot_password_post');
        Route::get('reset/password/{token}', 'AdminAuth@reset_password');
        Route::post('reset/password/{token}', 'AdminAuth@change_password');
    });
    Route::group(['middleware' => 'admin:admins'], function () {
        Route::get('/', function() {return view('admin.home');});
        Route::any('logout', 'AdminAuth@logout');
        // Admin
        Route::resource('admin', 'AdminController');
        Route::delete('admin/destroy/all', 'AdminController@destroyAll');
        // Student
        Route::resource('student', 'StudentController');
        Route::delete('student/destroy/all', 'StudentController@destroyAll');
        // Exam
        Route::resource('exam', 'ExamController');
        Route::delete('exam/destroy/all', 'ExamController@destroyAll');
        // Question
        Route::resource('question', 'QuestionController');
        // Answer
        Route::resource('answer', 'AnswerController');

    });
    Route::get('lang/{lang}', function ($lang) {
        session()->has('lang') ? session()->forget('lang') : '';
        $lang == 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
        return back();
    });

});
