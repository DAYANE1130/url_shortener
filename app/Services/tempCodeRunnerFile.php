<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;



class UrlShortenerService 
{
    public function shortenerUrl($urlLong)
    {
      $response = Http::get('https://ulvis.net/', [
        'url' => $urlLong,
    ]);;

        if (!$response->successful()) {
            throw new \Exception('Não foi possível encurtar a url informada.');
        }
        
        return $response->body();
        
    }

}

$urlShortenerService = new UrlShortenerService();
$urlLong = "https://www.youtube.com/watch?v=Xcu9bEXmORE"; 
$result = $urlShortenerService->shortenerUrl($urlLong);

dump($result->body());