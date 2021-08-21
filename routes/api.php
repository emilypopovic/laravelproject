<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('students', 'ApiController@getAllStudents');
Route::get('students/{id}', 'ApiController@getStudent');
Route::post('students', 'ApiController@createStudent');
Route::put('students/{id}', 'ApiController@updateStudent');
Route::delete('students/{id}','ApiController@deleteStudent');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
