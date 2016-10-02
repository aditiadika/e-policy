<?php


Route::resource('home','HomeController');

Route::get('login', function(){
	return view('auth.login');
});