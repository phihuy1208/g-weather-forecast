<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\WeatherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/weather', [WeatherController::class, 'getWeather'])->name('get-weather');
Route::get('/history/{city?}', [HistoryController::class, 'showHistory']);
