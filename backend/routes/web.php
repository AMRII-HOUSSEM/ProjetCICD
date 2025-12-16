<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    dd('hello');
});

// Route::get('/health', function () {
//     return response()->json([
//         'status' => 'ok',
//         'message' => 'Laravel API is running'
//     ]);
// });