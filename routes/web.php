<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
  'uses' => 'ProductController@getIndex',
  'as' => 'product.index'
]);

Route::get('/product/{id}', [
  'uses' => 'ProductController@fetchProduct',
  'as' => 'frontend.product-details'
]);

Route::get('/add-to-cart/{id}', [
  'uses' => 'ProductController@getAddToCart',
  'as' => 'product.addToCart'
]);

Route::get('/shopping-cart', [
  'uses' => 'ProductController@getCart',
  'as' => 'product.shoppingCart'
]);


Route::group(['prefix' => 'user'], function() {

  Route::get('/signup', [
    'uses' => 'UserController@getSignUp',
    'as' => 'user.signup',
    'middleware' => 'guest'

  ]);

  Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'user.signup',
    'middleware' => 'guest'
  ]);

  Route::get('/signin', [
    'uses' => 'UserController@getSignin',
    'as' => 'user.signin'
  ]);

  Route::post('/signin', [
    'uses' => 'UserController@postSignin',
    'as' => 'user.signin',
    'middleware' => 'guest'
  ]);

  Route::get('/profile', [
    'uses' => 'UserController@getProfile',
    'as' => 'user.profile',
    'middleware' => 'auth'
  ]);

  Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout',
    'middleware' => 'auth'
  ]);
});
