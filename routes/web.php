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

use App\Task;
use Illuminate\Routing\Route;
use function foo\func;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/delete/{id}', function($id){

    $task= Task::find($id);
    $task->delete();

   return redirect("home");

});


Route::get('/create','TaskController@create');
Route::post('/create','TaskController@create');

Route::get('/edit/{id}','TaskController@update');
Route::post('/edit/{id}','TaskController@update');


