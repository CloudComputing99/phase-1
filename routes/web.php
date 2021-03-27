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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('hi' , function (){
    $doctor = new \App\Doctor();
    $doctor->code = 567891209;
    $doctor->name = 'حسین آمری';
    $doctor->city = 'تهران';
    $doctor->specialty = 'تخصص مغز و اعصاب';
    $doctor->degree = 'فوق تخصص';
    $doctor->save();
});