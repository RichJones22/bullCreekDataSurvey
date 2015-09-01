<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.survey');
});

//
//Route::get('/admin', function () {
//    return view('pages.admin');
//});


Route::get('/admin'  , ['as' => 'admin.show',  'uses' => 'AdminController@show']);
Route::post('survey/store', ['as' => 'survey.store', 'uses' => 'SurveyController@store']);
