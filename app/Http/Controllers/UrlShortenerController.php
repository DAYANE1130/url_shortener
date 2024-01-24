<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Url;
use App\Services\UrlShortenerService;

class UrlShortenerController extends Controller
{
    public function index()
    {
        $urls = Url::select('id','long_url', 'short_url')->get();; 
        return response()->json($urls);
    }

    protected $urlShortenerService;

    public function __construct(UrlShortenerService $urlShortenerService)
    
    {
        $this->urlShortenerService = $urlShortenerService;
    }

    public function shortenUrl(Request $request)

    {
        $urlLong = $request->input('url');

        $validationUrl = $this-> urlShortenerService-> validateUrl($urlLong);

         if($validationUrl !== true) {
         return response()->json(['error' => $validationUrl],400); 
         }

        $urlShort = $this->urlShortenerService->shortenerUrl($urlLong);

        return  $urlShort;
    }

    public function redirectToLongUrl($urlCurta)

  

   {
      
    try {

        $longUrl = $this->urlShortenerService->getLongUrl($urlCurta);

        return redirect($longUrl);

    } catch (\Exception $e) {
        abort(404);
    }
  }

}
