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

Auth::routes();

Route::get('/home', function() {
    return redirect('/dashboard/properties');
})->name('home');


Route::group(['middleware' => ["auth"], 'prefix' => 'dashboard'], function() {
     Route::resource("properties", "PropertyController");

     Route::post("additional_details/{property_id}", "AdditionalDetailController@saveNew")->name("additional_details.new");

     Route::post("upload/featured/{property_id}", "ImageController@featured")->name("image.featured");
     Route::post("upload/gallery/{property_id}", "ImageController@gallery")->name("image.gallery");
});