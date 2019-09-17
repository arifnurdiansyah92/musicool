<?php

Route::post('fatoni/generate/api', array('as' => 'fatoni.generate.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@generateApi'));
Route::post('fatoni/update/api/{id}', array('as' => 'fatoni.update.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@updateApi'));
Route::get('fatoni/delete/api/{id}', array('as' => 'fatoni.delete.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@deleteApi'));

Route::resource('api/banners', 'AhmadFatoni\ApiGenerator\Controllers\API\BannersController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/banners/{id}/delete', ['as' => 'api/banners.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\BannersController@destroy']);
Route::resource('api/info', 'AhmadFatoni\ApiGenerator\Controllers\API\InfoController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/info/{id}/delete', ['as' => 'api/info.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\InfoController@destroy']);
Route::resource('api/features', 'AhmadFatoni\ApiGenerator\Controllers\API\FeatureController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/features/{id}/delete', ['as' => 'api/features.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\FeatureController@destroy']);
Route::resource('api/contacts', 'AhmadFatoni\ApiGenerator\Controllers\API\ContactController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/contacts/{id}/delete', ['as' => 'api/contacts.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\ContactController@destroy']);
Route::resource('api/about', 'AhmadFatoni\ApiGenerator\Controllers\API\AboutController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/about/{id}/delete', ['as' => 'api/about.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\AboutController@destroy']);
Route::resource('api/subscriber', 'AhmadFatoni\ApiGenerator\Controllers\API\SubscriberController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/subscriber/{id}/delete', ['as' => 'api/subsciber.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\SubscriberController@destroy']);
Route::resource('api/category_gallery', 'AhmadFatoni\ApiGenerator\Controllers\API\CategoryGalleryController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/category_gallery/{id}/delete', ['as' => 'api/category_gallery.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\CategoryGalleryController@destroy']);
Route::resource('api/gallery', 'AhmadFatoni\ApiGenerator\Controllers\API\GalleryController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/gallery/{id}/delete', ['as' => 'api/gallery.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\GalleryController@destroy']);
Route::resource('api/location', 'AhmadFatoni\ApiGenerator\Controllers\API\LocationController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/location/{id}/delete', ['as' => 'api/location.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\LocationController@destroy']);
Route::resource('api/phone', 'AhmadFatoni\ApiGenerator\Controllers\API\PhoneController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/phone/{id}/delete', ['as' => 'api/phone.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\PhoneController@destroy']);
Route::resource('api/email', 'AhmadFatoni\ApiGenerator\Controllers\API\EmailController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/email/{id}/delete', ['as' => 'api/email.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\EmailController@destroy']);