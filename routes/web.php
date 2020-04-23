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
    return view('home');
});

Route::get('/', [
    'uses' => 'profileController@homepage_index',
    'as' => 'homepage_index'
]);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/php_training', function () {
    return view('php_training');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

//--------------------------------Planets routing start-------------------------------------//

Route::get('/Planets', function () {
    return view('planets');
});

Route::get('/planets', [
    'uses' => 'PlanetController@index',
    'as' => 'planets.index'
]);

Route::get('/planet_create', [
    'uses' => 'PlanetController@create',
    'as' => 'planets.create'
]);

Route::post('/planet_create/store', [
    'uses' => 'PlanetController@store',
    'as' => 'planets.store'
]);

Route::get('/planet_create/destroy/{id}', [
    'uses' => 'PlanetController@destroy',
    'as' => 'planets.destroy'
]);

Route::get('/planet_create/edit/{id}', [
    'uses' => 'PlanetController@edit',
    'as' => 'planets.edit'
]);

Route::post('/planet_edit/store', [
    'uses' => 'PlanetController@store_edit',
    'as' => 'planets.store_edit'
]);

//--------------------------------Planets routing end-------------------------------------//

//--------------------------------Spaceships routing start-------------------------------------//

Route::get('/spaceships', [
    'uses' => 'SpaceshipController@index',
    'as' => 'spaceships.index'
]);

Route::get('/spaceships_create', [
    'uses' => 'SpaceshipController@create',
    'as' => 'spaceships.create'
]);

Route::post('/spaceships_create/store', [
    'uses' => 'SpaceshipController@store',
    'as' => 'spaceships.store'
]);

Route::get('/spaceships_create/destroy/{id}', [
    'uses' => 'SpaceshipController@destroy',
    'as' => 'spaceships.destroy'
]);

Route::get('/spaceships_create/edit/{id}', [
    'uses' => 'SpaceshipController@edit',
    'as' => 'spaceships.edit'
]);

Route::post('/spaceships_edit/store', [
    'uses' => 'SpaceshipController@store_edit',
    'as' => 'spaceships.store_edit'
]);

//--------------------------------Planets routing end-------------------------------------//

Route::get('/user_profile', [
    'uses' => 'profileController@index',
    'as' => 'profile.index'
])->middleware('auth');

Route::get('/shop', [
    'uses' => 'shopController@index',
    'as' => 'shop.index'
]);

Route::get('/shop/types', [
    'uses' => 'shopController@type_index',
    'as' => 'shop.type_index'
]);

Route::get('/shop/breweries', [
    'uses' => 'shopController@brewery_index',
    'as' => 'shop.brewery_index'
]);

Route::get('/shop/abv', [
    'uses' => 'shopController@abv_index',
    'as' => 'shop.abv_index'
]);

Route::get('/shop/{name}', [
    'uses' => 'shopController@page',
    'as' => 'shop.page'
]);

Route::get('/my_cart', [
    'uses' => 'profileController@cart',
    'as' => 'profile.cart'
])->middleware('auth');

Route::post('/shop/{product_id}', [
    'uses' => 'profileController@cart_add',
    'as' => 'profile.cart_add'
])->middleware('auth');

Route::get('/my_cart/remove/{product_id}', [
    'uses' => 'profileController@remove',
    'as' => 'my_cart.remove'
])->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
