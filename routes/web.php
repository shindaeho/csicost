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

//Route::pattern('foo', '[0-9a-zA-z]{3}');


Route::get('/', function()
{
  $items = ['apple', 'banana', 'tomato'];
  return view('welcome', ['items' => $items ]);
});

Route::get('/home', function()
{
  return 'Hello World home ';

});
