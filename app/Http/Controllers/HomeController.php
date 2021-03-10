<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\GuzzleHelper;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $venue_url = 'https://api.foursquare.com/v2/venues/search';
        $venue_parameters = [
            'near' => "$request->city ,JP",
            'limit' => '5',
            'categoryId' => '4deefb944765f83613cdba6e',
            'client_id' => env('FOURSQURE_CLIENT_ID'),
            'client_secret' => env('FOURSQURE_CLIENT_SECRET'),
            'v' => '20200310'
        ];

        $forecast_url = 'https://api.openweathermap.org/data/2.5/forecast';
        $forecast_parameters = [
            'q' => "$request->city",
            'appid' => env('OPENWEATHER_APPID')
        ];

        $guzzle = new GuzzleHelper();

        return [
            'venue' => $guzzle->processRequest($venue_url, $venue_parameters),
            'forecast' => $guzzle->processRequest($forecast_url, $forecast_parameters)
        ];

    }
}
