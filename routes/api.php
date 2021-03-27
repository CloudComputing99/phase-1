<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*---------------------------------------------JWT apis are below-----------------------------------------------------*/

Route::post('login', 'AuthController@login');

Route::get('me', 'AuthController@me');

Route::post('register' , 'AuthController@register');

Route::post('delete-user' , 'AuthController@delete');


/*------------------------------------------visit apis----------------------------------------------------------------*/

Route::middleware('auth:api')->post('store-visit' , 'VisitController@store');

Route::post('delete-visit' , 'VisitController@delete');

Route::get('get-dr-visits' , 'VisitController@get_visits');

/*------------------------------------------filter doctors------------------------------------------------------------*/

Route::get('filter-doctors' , 'DoctorController@filterDoctors');



