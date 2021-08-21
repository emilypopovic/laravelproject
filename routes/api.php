<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('students', 'App\Http\Controllers\ApiController@getAllStudents');
Route::get('students/{id}', 'App\Http\Controllers\ApiController@getStudent');
Route::post('students', 'App\Http\Controllers\ApiController@createStudent');
Route::put('students/{id}', 'App\Http\Controllers\ApiController@updateStudent');
Route::delete('students/{id}','App\Http\Controllers\ApiController@deleteStudent');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
