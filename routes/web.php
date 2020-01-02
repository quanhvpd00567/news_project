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

    Route::prefix('role')->group(function (){
        Route::get('/', 'RoleController@index')->name('list_role');
    });

    Route::prefix('countries')->group(function (){
        Route::get('create_new_country', 'CountryController@create_new' )->name('get_view_new_country');
        Route::post('post_new_country', 'CountryController@create' )->name('post_new_country');
        //  http://127.0.0.1:8000/admin/countries/edit/1221
        Route::get('edit/{id}', 'CountryController@edit')->name('get_view_edit_country');
        Route::post('update/{id}','CountryController@update')->name('post_update_country');
        Route::get('/', 'CountryController@index')->name('list_country');
    });

    Route::prefix('albums')->group(function (){
        Route::get('/', 'AlbumController@index')->name('list_album');
        Route::get('new','AlbumController@create_new')->name('get_new_view_album');
        Route::post('create', 'AlbumController@create')->name('post_new_create');
        Route::get('edit/{id}', 'AlbumController@edit')->name('get_view_edit_album');
        Route::post('update/{id}', 'AlbumController@update')->name('post_edit_album');
    });
    Route::prefix('images')->group(function (){
        Route::get('/', 'ImageController@index')->name('list_image');
        Route::get('new', 'ImageController@create_new')->name('get_new_view_image');
        Route::post('create', 'ImageController@create')->name('post_new_image');
        Route::get('edit/{id}', 'ImageController@edit')->name('get_view_edit_image');
        Route::post('update/{id}', 'ImageController@update')->name('post_edit_image');
    });
    Route::prefix('categories')->group(function (){
        Route::get('/', 'CategoryController@index')->name('list_category');
        Route::get('new' , 'CategoryController@create_new')->name('get_new_view_category');
        Route::post('create', 'CategoryController@create')->name('post_new_category');
        Route::get('edit/{id}', 'CategoryController@edit')->name('get_view_edit_category');
        Route::post('update/{id}', 'CategoryController@update')->name('post_edit_category');
        Route::post('delete/{id}', 'CategoryController@delete')->name('post_delete_category');
    });
    Route::prefix('articles')->group(function (){
        Route::get('/', 'ArticleController@index')->name('list_article');
        Route::get('new' , 'ArticleController@create_new')->name('get_new_view_article');
        Route::post('create', 'ArticleController@create')->name('post_new_article');
        Route::get('edit/{id}', 'ArticleController@edit')->name('get_view_edit_article');
        Route::post('update/{id}', 'ArticleController@update')->name('post_edit_article');
    });
    Route::prefix('users')->group(function (){
        Route::get('/' , 'UserController@index')->name('list_user');
        Route::get('new' , 'UserController@create_new')->name('get_new_view_user');
        Route::post('create', 'UserController@create')->name('post_new_user');
    });

    Route::prefix('settings')->group(function (){
        Route::get('/', 'SettingController@index')->name('get_setting');
        Route::post('update', 'SettingController@update')->name('post_update_setting');
    });


});

Route::get('admin/login', function (){
   return view('admin.pages.login.index') ;
});

//end user router

Route::get('/demo', function () {
    return view('admin/index');
});