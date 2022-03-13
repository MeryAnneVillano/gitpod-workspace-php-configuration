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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get all data from contact table
Route::get('contact', 'App\Http\Controllers\Contact\ContactController@contact' );
//get data by Id from contact table
//Route::get('contact/{contactId}', 'App\Http\Controllers\Contact\ContactController@contactById' );
