<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

/*Main*/
Route::get('/home', 'HomeController@index')->name('home');

/*User*/
Route::get('/user/verify/{token}', 'UsersController@verifyUser');
Route::get('add-prof', 'UsersController@create')->name('add-prof');
Route::post('/users', 'UsersController@store')->name('accountProf');
Route::get('/set-password', 'UsersController@setPassword');

/*Students*/
Route::get('liste-eleves', 'StudentsController@index')->name('liste-eleves');
Route::get('add-eleve', 'StudentsController@create')->name('add-eleve');
Route::post('/students', 'StudentsController@store')->name('accountStudent');
Route::get('/students/{student}/edit', 'StudentsController@edit');
Route::get('/students/{student}/delete', 'StudentsController@destroy');
Route::put('/students/{student}', 'StudentsController@update');

/*Exams*/
Route::get('liste-matieres', 'ExamsController@index')->name('liste-matieres');
Route::get('add-matiere', 'ExamsController@create')->name('add-matiere');
Route::post('/matieres', 'ExamsController@store')->name('matiere');
Route::get('/matieres/{matiere}/edit', 'ExamsController@edit');
Route::get('/matieres/{matiere}/delete', 'ExamsController@destroy');
Route::put('/matieres/{matiere}', 'ExamsController@update');

/*Companies*/
Route::get('liste-entreprises', 'CompaniesController@index')->name('liste-entreprises');
Route::get('add-entreprise', 'CompaniesController@create')->name('add-entreprise');
Route::post('/entreprise', 'CompaniesController@store')->name('entreprise');
Route::get('/companies/{company}/edit', 'CompaniesController@edit');
Route::get('/companies/{company}/delete', 'CompaniesController@destroy');
Route::put('/companies/{company}', 'CompaniesController@update');

/*Stages */
Route::get('liste-stages', 'InternshipsController@index')->name('liste-stages');
Route::post('/stages', 'InternshipsController@store')->name('stage');
Route::get('/stages/{stage}/edit', 'InternShipsController@edit');
Route::get('/stages/{stage}/delete', 'InternshipsController@destroy');
