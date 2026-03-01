<?php

use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\City;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

## Settings Module
Route::get('/settings', SettingController::class);

## Cities Module
Route::get('cities', CityController::class);
