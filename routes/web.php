
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UrlShortenerController;

Route::get('/urls', [UrlShortenerController::class, 'index']);
Route::post('/shorten-url', [UrlShortenerController::class, 'shortenUrl']);
Route::get('/{urlCurta}', [UrlShortenerController::class, 'redirectToLongUrl']);




Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});
