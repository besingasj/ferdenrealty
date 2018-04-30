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

Route::get('/', 'PageController@index')->name('page.index');
Route::get('/properties/{city?}', 'PageController@properties')->name('page.properties');
Route::get('/properties/details/{property_id}', 'PageController@propertyDetails')->name('page.property.details');

Route::get('/agents', 'PageController@agents')->name('page.agents');
Route::get('/agents/profile/{agent_id}', "PageController@agentProfile")->name('page.agent.profile');

Route::post('/property/search', 'PropertyController@advanceSearch')->name('page.property.advance_search');

Route::post('contact-agents/submit', 'AgentController@contactAgentSubmit')->name('contact.agents');

Auth::routes();

Route::get('/home', function() {
    return redirect('/dashboard/properties');
})->name('home');


Route::group(['middleware' => ["auth"], 'prefix' => 'dashboard'], function() {
    Route::get('/', function() {
        return redirect()->route('properties.index');
    });

    Route::get("properties/search", "PropertyController@searchProperty")->name('properties.search');
    Route::resource("properties", "PropertyController");
    Route::get('property/{property_id}/toggleFeatured', "PropertyController@toggleFeatured")->name('properties.toggleFeatured');

    //     Route::get('agents', "HomeController@agents")->name('agents.index');
    //     Route::get('agents/create', "")
    //     Route::resource('agents', 'AgentController');

    Route::post('amenities/{property_id}', 'AmenityController@attachDetach')->name('properties.amenities');

    Route::get('amenities', 'AmenityController@index')->name('properties.amenites.index');
    Route::post('amenities', 'AmenityController@store')->name('properties.amenites.new');
    Route::get('amenities/{id}', 'AmenityController@delete')->name('properties.amenities.delete');

    Route::post("additional_details/{property_id}", "AdditionalDetailController@saveNew")->name("additional_details.new");

    Route::post("upload/featured/{property_id}", "ImageController@featured")->name("image.featured");
    Route::post("upload/gallery/{property_id}", "ImageController@gallery")->name("image.gallery");
    Route::get('image/{image_id}/delete', "ImageController@delete")->name('images.delete');
});