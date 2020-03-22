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



Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', function ($language){
        \Session::put('website_language', $language);
        return redirect()->back();
    })->name('change-language');

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('gallery', 'GalleryController@index')->name('gallery');
    Route::get('detail/{slug}', 'ProductController@detailProduct')->name('product.detail');
    Route::get('products', 'ProductController@listProduct')->name('product.list');

    // About-us detail
    Route::get('about-us/{slug}' , 'AboutUsController@detail')->name('about-us.detail');
    Route::get('manufacturers' , 'AboutUsController@manufacturers')->name('manufacturers');
    Route::get('manufacturer/detail/{slug}' , 'AboutUsController@manufacturerDetail')->name('manufacturer.detail');

    // contact
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact/create' , 'ContactController@send')->name('contact.send');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'isAdmin'], function() {
    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function() {
        Route::get('office', 'admin\SettingController@index')->name('office');
        Route::get('website', 'admin\SettingController@website')->name('website');
        Route::get('mail', 'admin\SettingController@settingMail')->name('mail');
        Route::post('update', 'admin\SettingController@updateSetting')->name('update');
        Route::get('banners', 'admin\SettingController@bannerSetting')->name('banner');
        Route::post('update-banner', 'admin\SettingController@updateBannerSetting')->name('update.banner');
    });

    Route::group(['prefix' => 'categories', 'as' => 'category.'], function() {
        Route::get('/', 'admin\CategoryController@listCategory')->name('list');
        Route::get('new', 'admin\CategoryController@newCategory')->name('new');
        Route::post('create', 'admin\CategoryController@createCategory')->name('create');
        Route::get('edit/{id}', 'admin\CategoryController@editCategory')->name('edit');
        Route::post('update/{id}', 'admin\CategoryController@updateCategory')->name('update');
        Route::get('delete/{id}', 'admin\CategoryController@deleteCategory')->name('delete');
        Route::get('restore/{id}', 'admin\CategoryController@restoreCategory')->name('restore');
    });

    if (false) {
        Route::group(['prefix' => 'menu', 'as' => 'menu.'], function() {
            Route::get('/', 'admin\CategoryController@listMenu')->name('list');
            Route::get('new', 'admin\CategoryController@newMenu')->name('new');
            Route::post('create', 'admin\CategoryController@createMenu')->name('create');
            Route::get('edit/{id}', 'admin\CategoryController@editMenu')->name('edit');
            Route::post('update/{id}', 'admin\CategoryController@updateMenu')->name('update');
            Route::get('delete/{id}', 'admin\CategoryController@deleteMenu')->name('delete');
            Route::get('restore/{id}', 'admin\CategoryController@restoreMenu')->name('restore');
        });
    }

    Route::group(['prefix' => 'products', 'as' => 'product.'], function() {
        Route::get('/', 'admin\ProductController@listProduct')->name('list');
        Route::get('new', 'admin\ProductController@newProduct')->name('new');
        Route::post('create', 'admin\ProductController@createProduct')->name('create');
        Route::get('edit/{id}', 'admin\ProductController@editProduct')->name('edit');
        Route::get('delete/{id}', 'admin\ProductController@deleteProduct')->name('delete');
        Route::get('ckfinder', 'admin\ProductController@showFinder')->name('ckfinder');
        Route::post('update/{id}', 'admin\ProductController@updateProduct')->name('update');
    });

    Route::group(['prefix' => 'albums', 'as' => 'album.'], function() {
        Route::get('/', function (){
            return view('admin.pages.albums.new');
        })->name('list');

        Route::get('new/{id}', 'admin\AlbumController@newAlbum')->name('new');
        Route::post('create/{id}', 'admin\AlbumController@createAlbum')->name('create');
    });

    Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function() {
        Route::get('new', 'admin\GalleryController@new')->name('new');
        Route::post('create', 'admin\GalleryController@create')->name('create');
    });


    Route::group(['prefix' => 'manufacturers', 'as' => 'manufacturer.'], function() {
        Route::get('/', 'admin\ManufacturerController@listManufacturer')->name('list');
        Route::get('new', 'admin\ManufacturerController@newManufacturer')->name('new');
        Route::post('create', 'admin\ManufacturerController@createManufacturer')->name('create');
        Route::get('edit/{id}', 'admin\ManufacturerController@editManufacturer')->name('edit');
        Route::get('delete/{id}', 'admin\ManufacturerController@deleteManufacturer')->name('delete');
        Route::post('update/{id}', 'admin\ManufacturerController@updateManufacturer')->name('update');
        Route::get('images/{id}', 'admin\ManufacturerController@newListImageManufacturer')->name('image');
        Route::post('create-images/{id}', 'admin\ManufacturerController@createListImageManufacturer')->name('create.image');
    });

    Route::group(['prefix' => 'introduces', 'as' => 'introduce.'], function() {
        Route::get('/', 'admin\IntroduceController@listIntroduce')->name('list');
        Route::get('new', 'admin\IntroduceController@newIntroduce')->name('new');
        Route::post('create', 'admin\IntroduceController@createIntroduce')->name('create');
        Route::get('edit/{id}', 'admin\IntroduceController@editIntroduce')->name('edit');
        Route::post('update/{id}', 'admin\IntroduceController@updateIntroduce')->name('update');
        Route::get('delete/{id}', 'admin\IntroduceController@deleteIntroduce')->name('delete');
        Route::get('images/{id}', 'admin\IntroduceController@newListImageIntroduce')->name('image');
        Route::post('create-images/{id}', 'admin\IntroduceController@createListImageIntroduce')->name('create.image');
    });

    Route::get('home-page', 'admin\HomeController@home')->name('home.page');
    Route::get('/', 'admin\HomeController@home');
    Route::post('home-page-update', 'admin\HomeController@update')->name('home.page.update');
});


//Route::get('/register', 'AuthController@register')->name('register');
//Route::post('/create', 'AuthController@create')->name('create_new_member');
//
//
Route::get('test', function (){
    \Mail::send('mails.index', ['key' => 'value'], function($message)
    {
        $message->to('quanhv1994@gmail.com', 'John Smith')->subject('Welcome!');
    });
})->name('admin_login') ;

Route::get('admin/login', 'admin\LoginController@login')->name('admin.login');
Route::post('admin/login', 'admin\LoginController@postLogin')->name('post.admin.login');
Route::get('admin/logout', 'admin\LoginController@logout')->name('admin.logout');


