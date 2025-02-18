<?php

use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    return response()->json(['test' => 'test-value']);
});
