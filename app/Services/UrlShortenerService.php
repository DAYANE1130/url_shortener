<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;
use App\Models\Url;


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
       
        // salvando url curta e longa no banco de dados
        $url = new Url;
        $url-> long_url = $urlLong;
        $url-> short_url = $shortenedUrl;
        $url-> save();

        return  $shortenedUrl;
        
    }

}


