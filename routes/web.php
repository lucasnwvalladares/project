<?php

// Pages routes

Route::get('/', 'PagesController@home');

Route::get('/home', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/register', 'PagesController@registers');


// Students routes

Route::get('/students', 'StudentsController@index');

Route::get('/students/create', 'StudentsController@create');

Route::post('/students/create', 'StudentsController@store');

Route::get('/students/{students}/edit', 'StudentsController@edit');

Route::patch('/students/{students}', 'StudentsController@update');

Route::delete('/students/{students}', 'StudentsController@destroy');


// Teachers routes

Route::get('/teachers', 'TeachersController@index');

Route::get('/teachers/create', 'TeachersController@create');

Route::post('/teachers/create', 'TeachersController@store');

Route::get('/teachers/{teachers}/edit', 'TeachersController@edit');

Route::patch('/teachers/{teachers}', 'TeachersController@update');

Route::delete('/teachers/{teachers}', 'TeachersController@destroy');



// Languages routes

Route::get('/languages', 'LanguagesController@index');

Route::get('/languages/create', 'LanguagesController@create');

Route::post('/languages/create', 'LanguagesController@store');

Route::get('/languages/{languages}/edit', 'LanguagesController@edit');

Route::patch('/languages/{languages}', 'LanguagesController@update');

Route::delete('/languages/{languages}', 'LanguagesController@destroy');
