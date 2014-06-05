<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/','IntroController@index');
Route::get('/Home','IndexController@index');
Route::get('/Da_Daily_Dirt/','Da_Daily_DirtController@index');
Route::get('/Topic_of_the_Day/','Topic_of_the_DayController@index');
Route::get('/Diva_Approved/','Diva_ApprovedController@index');
Route::get('/Diva_Wall/','DivasController@index');
Route::get('/Events/','EventsController@index');