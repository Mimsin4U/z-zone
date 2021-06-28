<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    'as'   => '/',
    'uses' => 'App\Http\Controllers\AdminLoginController@index',
]);

Route::get('/dashboard', [
    'as'   => 'admin.dashboard',
    'uses' => 'App\Http\Controllers\DashboardController@index',
    // 'middleware' => ['auth:sanctum', 'verified']
]);


