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

Route::get('/weather', function () {

    $apiKey = config('services.darksky.key');
    $cityName = request('cityName');

    $response = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=$cityName&appid=$apiKey&units=metric");
    return $response;
});