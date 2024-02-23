<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getList', 'App\Http\Controllers\MemberController@getMemberList');

Route::post('/delete', 'App\Http\Controllers\MemberController@Delete');

Route::post('/delete', 'App\Http\Controllers\MemberController@addMember');