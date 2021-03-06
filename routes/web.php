<?php


use Illuminate\Support\Facades\Route;



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


Route::resource('contact', "Contact\Email" , [
    'only' => ['index', 'create', 'store']
]);
Route::resource('setting', "SettingController", [
    'only' => ['index', 'update']
])->middleware('auth');


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
