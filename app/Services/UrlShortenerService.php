<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Models\Url;


class UrlShortenerService 
{
    public function validateUrl($url)

    {
        $validator = Validator::make(['url' => $url], [
            'url' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!preg_match('/^https?:\/\/[\w\-]+(\.[\w\-]+)+.*$/', $value)) {
                        $fail($attribute.' is not a valid URL.');
                    } 
                },
            ],
        ]);
    
        if ($validator->fails()) {
            return $validator->errors()->first('url');
        }
    
        return true;
    }

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

   public function getLongUrl($urlCurta)
   {
    $urlCurta = urlencode($urlCurta);

    $urlComplete = "https://ulvis.net/" . $urlCurta;

    $url = Url::where('short_url', $urlComplete)->first();

    if (!$url) {
        throw new \Exception('Url not found');
    }
   

    return $url->long_url;
  }

}


