<?php 

use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok 12345',
        'message' => 'Laravel API works'
    ]);
});
