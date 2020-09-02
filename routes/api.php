<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::namespace('Api')->group(function(){
	Route::namespace('Users')->group(function(){
		Route::post('create-account', 'RegisterController@register');
	});
});