<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Url;

class UrlShortenerController extends Controller
{
    public function index()
    {
        $urls = Url::select('id','long_url', 'short_url')->get();; 
        return response()->json($urls);
    }

}
