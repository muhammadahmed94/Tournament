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
Route::get('/users', "adduserinfo@listUser");

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/uploadImage',"adduserinfo@add");
// 'HomeController@index')->name('home');

Route::get('/users', "adduserinfo@listUser");
Route::get('/deleteuser/{id}', "adduserinfo@deleteUser");

Route::get('/admin', "admincontroller@viewDash");
Route::get('/team-rep', "teamrepcontroller@viewDash");

Route::get('/director', "directorcontroller@viewDash");

Route::get('/signout', "signoutController@logout");

Route::get('/editTournament/{id}', "admincontroller@editTournament");

Route::get('/deleteTournament/{id}', "admincontroller@deleteTournament");

Route::get('/ViewTournament/{id}', "admincontroller@viewTournament");

Route::get('/addNewTournament', "admincontroller@addNewTournament");

Route::get('/editCurrentUser', "admincontroller@editCurrentUser");

Route::get('/SendEmail', "admincontroller@sendEmail");


Route::post('editTournament/editTournamentInfo',"admincontroller@editTournamentInfo");

Route::post('/addNewTournamentWithPost', "admincontroller@addNewTournamentWithPost");

Route::post('/editAccountInfo', "admincontroller@editAccountDetails");


Route::get('/editrepteam/{id}', "teamrepcontroller@editeamrepdata");

Route::post('/editrepinfo',"teamrepcontroller@editeamrepinfo");

Route::get('/Event',"teamrepcontroller@Event");

Route::get('/Singleteam',"teamrepcontroller@Singleteam");