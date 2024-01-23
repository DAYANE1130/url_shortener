

<?php

use App\Http\Controllers\Api\NotasRemetenteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\UrlShortenerController;

Route::get('/urls', [UrlShortenerController::class, 'index']);

Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});
