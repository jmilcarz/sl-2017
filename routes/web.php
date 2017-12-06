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

Auth::routes();

Route::get('/', function () {
    return view('shop.index');
});

Route::get('/home', function () {
    return view('shop.index');
});

# all
Route::get('/produkty', 'ProductController@index');
Route::get('/marki', 'BrandController@index');

# shop
Route::get('/sklep', 'StoreController@index')->name('shop.index');
Route::get('/koszyk', 'ProductController@getCart')->name('shop.shoppingCart');
Route::get('/sl-collection', 'StoreController@slCollection')->name('sl.slCollection');
Route::get('/projektowanie', 'StoreController@projektowanie');

# site
Route::get('/o-nas', 'StaticPageController@oNas');
Route::get('/wspolpraca', 'StaticPageController@wspolpraca');

# blog
Route::get('/blog', 'BlogController@index');


# user profile
Route::get('/user/profile/{id}', 'UserController@profile')->middleware('auth');

# cart

Route::get('/add-to-cart/{id}', [
     'uses' => 'ProductController@addToCart',
     'as' => 'product.addToCart'
]);
