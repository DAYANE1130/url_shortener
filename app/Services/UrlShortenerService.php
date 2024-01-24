<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;



class UrlShortenerService 
{
    public function shortenerUrl($urlLong)
    {
      $response = Http::get('https://ulvis.net/API/write/get?', [
        'url' => $urlLong,
    ]);;

        if (!$response->successful()) {
            throw new \Exception('Não foi possível encurtar a url informada.');
        }
        
        $responseData = $response->json();

        $shortenedUrl = $responseData['data']['url'];

        return  $shortenedUrl;
        
    }

}


