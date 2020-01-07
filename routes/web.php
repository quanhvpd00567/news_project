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

Route::get('/', 'HomeController@index');
Route::get('/detail/{id}', 'HomeController@detail')->name('article_detail');
Route::get('/category/{id}', 'HomeController@category')->name('article_by_category');
Route::get('/album/{id}', 'HomeController@album')->name('article_by_album');
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::post('/authentication', 'AuthController@authentication')->name('login_port');
Route::get('/confirm-buy', 'HomeController@confirm_buy')->name('confirm_buy');

//admin router
Route::group(
    [
        'prefix' => 'admin',
        'middleware' => 'isAdmin'
    ]
    ,function (){
    Route::auth();
    Route::get('/', function () {
        return view('admin/index');
    })->name('admin_dashboard');

    Route::prefix('role')->group(function (){
        Route::get('/', 'RoleController@index')->name('list_role');
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
        Route::post('delete/{id}', 'ImageController@delete')->name('post_delete_image');
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
        Route::post('delete/{id}', 'ArticleController@delete')->name('post_delete_article');
    });

    Route::prefix('users')->group(function (){
        Route::get('/' , 'UserController@index')->name('list_user');
        Route::get('new' , 'UserController@create_new')->name('get_new_view_user');
        Route::post('create', 'UserController@create')->name('post_new_user');
        Route::get('edit/{id}', 'UserController@edit')->name('get_edit_view_user');
        Route::post('update/{id}', 'UserController@update')->name('post_update_user');
        Route::get('reset_pass/{id}', 'UserController@reset_pass')->name('get_view_reset_password_user');
        Route::post('update_pass/{id}', 'UserController@update_pass')->name('post_reset_password_user');
        Route::post('blog_user/{id}', 'UserController@block_user')->name('post_blog_user');
        Route::get('profile', 'UserController@profile_user')->name('get_view_profile_user');
    });

    Route::prefix('settings')->group(function (){
        Route::get('/', 'SettingController@index')->name('get_setting');
        Route::post('update', 'SettingController@update')->name('post_update_setting');
    });

    Route::get('error', function () {
        return view('admin.pages.errors.index');
    })->name('admin_error');
});

Route::get('admin/login', function (){
   return view('admin.pages.login.index');
})->name('admin_login') ;

Route::post('admin/login', 'LoginController@login')->name('admin_post_login');
Route::get('admin/logout', 'LoginController@logout')->name('admin_logout');
