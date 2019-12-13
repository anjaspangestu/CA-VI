<?php

Route::get('/', 'Home\HomeController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategori/film', 'Category\FilmController@index');
Route::get('/kategori/olahraga', 'Category\SportsController@index');
Route::get('/upload-video', 'UploadVideo\UploadVideoController@index');
Route::post('/uploadvideo', 'UploadVideo\UploadVideoController@store');
Route::get('/profile', 'Account\AccountController@index');
Route::get('/view/{slug_video}', 'ViewVideo\ViewVideoController@index');
Route::post('/change-profile', 'Account\AccountController@changeProfile');
Route::post('/change-password', 'Account\AccountController@changePassword');
Route::post('/change-sub-category', 'Uploadvideo\UploadVideoController@getSubCategories');
Route::post('/comment_video', 'viewVideo\ViewVideoController@commentVideo');

// Admin
// Route::get('/dashboard', 'Admin\LogMember\LogMemberController@index');
Route::get('/notifikasi', 'Admin\Notification\NotificationController@index');
Route::get('/pengaturan', 'Admin\Setting\SettingController@index');
Route::get('/kategori', 'Admin\Categories\CategoriesController@index');
