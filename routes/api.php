<?php

use App\Http\Controllers\Api\AdController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\SettingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\City;
use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\DomainController;
use App\Http\Controllers\Api\AuthController;

## Auth Module
Route::controller(AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('logout', 'logout')->middleware('auth:sanctum');

});

## Settings Module
Route::get('/settings', SettingController::class);

## Cities Module
Route::get('/cities', CityController::class);

## Districts Module
Route::get('/districts', DistrictController::class);

## Messages Module
Route::post('/message', MessageController::class);

## Domains Module
Route::get('/domains', DomainController::class);

## Ads Module
Route::prefix('ads')->controller(AdController::class)->group(function(){
    // Basic
    Route::get('/', 'index'); 
    
});