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

Route::get('/', function () {
    return view('welcome');
});


//admin router
Route::prefix('admin')->group(function () {
    // ../admin/dashboard
    Route::get('dashboard', function () {
        return view('admin/index');
    });
});

//end user router

Route::get('/demo', function () {
    return view('admin/index');
});