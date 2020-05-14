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

Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/{provider}/callback','SocialController@Callback');

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

Route::get('/dashboard', [
    'uses' => 'profileController@dashboard',
    'as' => 'profile.dashboard'
])->middleware('auth');

Route::get('/account-info', [
    'uses' => 'profileController@info',
    'as' => 'profile.info'
])->middleware('auth');

Route::get('/account-info/billing-info', [
    'uses' => 'profileController@billing_info',
    'as' => 'profile.billing_info'
])->middleware('auth');

Route::get('/account-info/shipping-info', [
    'uses' => 'profileController@shipping_info',
    'as' => 'profile.shipping_info'
])->middleware('auth');

Route::get('/checkout', [
    'uses' => 'profileController@checkout',
    'as' => 'profile.checkout'
])->middleware('auth');

Route::get('/order_placed', [
    'uses' => 'PaypalController@order_placed',
    'as' => 'paypal.order_placed'
])->middleware('auth');

Route::post('/checkout/paypal', [
    'uses' => 'PaypalController@payWithpaypal',
    'as' => 'checkout.payWithpaypal'
]);

Route::post('/account-info/billing-info/save', [
    'uses' => 'profileController@billing_info_save',
    'as' => 'profile.billing_info_save'
])->middleware('auth');

Route::post('/account-info/shipping-info/save', [
    'uses' => 'profileController@shipping_info_save',
    'as' => 'profile.shipping_info_save'
])->middleware('auth');

Route::get('/shop', [
    'uses' => 'shopController@index',
    'as' => 'shop.index'
]);

Route::get('/shop/order_store', [
    'uses' => 'shopController@order_store',
    'as' => 'shop.order_store'
])->middleware('auth');

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

Route::get('/my_cart/more/{product_id}', [
    'uses' => 'profileController@more',
    'as' => 'my_cart.more'
])->middleware('auth');

Route::get('/my_cart/less/{product_id}', [
    'uses' => 'profileController@less',
    'as' => 'my_cart.less'
])->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
