<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UrlShortener;

class UrlShortenerController extends Controller
{
    public function getAllUrls()
    {
        $urls = urls::all(); 
        return response()->json($urls);
    }

}