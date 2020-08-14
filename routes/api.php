<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'cate'], function () {
    Route::get('/', 'api\CategoryController@index');
    Route::get('/getallHaveTotalProduct', 'api\CategoryController@allHaveTotalProduct');
    Route::get('/getTotalProduct/{id_cate}', 'api\CategoryController@getTotalProduct');
    Route::get('/test', 'api\CategoryController@test');
    Route::get('/getProductOfCate/{id_cate}', 'api\CategoryController@getProductOfCate');
    Route::get('/{article}', 'api\CategoryController@show');
    Route::get('/productCate/{id}', 'api\CategoryController@productCate');
    Route::get('/searchFolowPrice/{key}/{id_cate}', 'api\CategoryController@searchFolowPrice');
    Route::post('/', 'api\CategoryController@store');
    Route::put('/{article}', 'api\CategoryController@update');
    Route::delete('{article}', 'api\CategoryController@delete');
});
Route::group(['prefix' => 'product'], function () {
    Route::get('/', 'api\ProductController@all');
    Route::get('/{id}', 'api\ProductController@show');
    Route::post('/', 'api\ProductController@store');
    Route::put('/{id}', 'api\ProductController@edit');
    Route::delete('/{id}', 'api\ProductController@delete');
    Route::get('/3product/{id}', 'api\ProductController@get3productofCate');
    Route::get('/product4/for5cate', 'api\ProductController@product4tof5cate');
    Route::get('/search/{key}', 'api\ProductController@search');
    Route::get('/searchOrder/{key}', 'api\ProductController@locSort');
});
Route::group(['prefix' => 'slides'], function () {
    Route::get('/', 'api\SlideController@all');
    Route::put('/{id}', 'api\SlideController@edit');
    Route::get('/{id}', 'api\SlideController@show');


});

Route::group(['prefix' => 'contact'], function () {
    Route::get('/', 'api\ContactController@index');
    Route::get('/{article}', 'api\ContactController@show');
    Route::post('/', 'api\ContactController@store');
    Route::put('/{article}', 'api\ContactController@update');
    Route::delete('{article}', 'api\ContactController@delete');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'api\UserController@getAll');
    Route::post('/checklogin', 'api\UserController@login');
    Route::get('/{id}', 'api\UserController@show');
    Route::post('/', 'api\UserController@store');
    Route::put('/{id}', 'api\UserController@edit');  
    Route::delete('{id}', 'api\UserController@delete');
});


Route::group(['prefix' => 'order'], function () {
     Route::get('/', 'api\OrderController@all');
    Route::get('/{id}', 'api\OrderController@show');
    Route::get('/order_detail/{id}', 'api\OrderController@getListOrderDetail');
    Route::post('/{id}/{totalprice}/{name}/{address}/{phone}', 'api\OrderController@store');
    Route::put('/{id}', 'api\OrderController@updateStatus');  
    Route::delete('{id}', 'api\OrderController@delete');
    Route::get('/user/{id}', 'api\OrderController@getOrderUser');
    // Route::delete('{article}', 'api\ContactController@delete');
});

Route::group(['prefix' => 'mail'], function () {
    Route::post('sendbasicemail','MailController@basic_email');
});


Route::group(['prefix' => 'post'], function () {
    Route::get('/', 'api\PostController@all');
    Route::get('/allStatus2', 'api\PostController@allStatus2');
    Route::get('/cate/{id}', 'api\PostController@getPostOfCate');
    Route::get('/one/{id}', 'api\PostController@show');
    Route::put('/{id}', 'api\PostController@edit');
    Route::post('/', 'api\PostController@store');
    Route::delete('/{id}', 'api\PostController@delete');
    Route::get('/getPostRanDom/{number}', 'api\PostController@getPostRanDom');
    Route::get('/get-post-ramdom', 'api\PostController@getPostRandomAll');
    Route::get('/getPostOfCateRanDom/{id}/{number}', 'api\PostController@getPostOfCateRanDom');
    Route::get('/search/{key}', 'api\ProductController@search');
    Route::get('/searchOrder/{key}', 'api\PostController@locSort');


});
Route::group(['prefix' => 'postCate'], function () {
    Route::get('/', 'api\PostCateController@all');
    Route::get('/allClient', 'api\PostCateController@allClient');
    Route::get('/{id}', 'api\PostCateController@show');
    Route::delete('/{id}', 'api\PostCateController@delete');
    Route::post('/', 'api\PostCateController@store');
    Route::put('/{id}', 'api\PostCateController@update');
});

Route::get('/dashboard/total', 'api\OrderController@getTotalDashboard');


