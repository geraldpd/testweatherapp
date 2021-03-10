<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\GuzzleHelper;

class VenueController extends Controller
{
    public function __invoke(Request $request)
    {
        $url = 'https://api.foursquare.com/v2/venues/search';
        $parameters = [
            'near' => "$request->city ,JP",
            'limit' => '5',
            'categoryId' => '4deefb944765f83613cdba6e',
            'client_id' => env('FOURSQURE_CLIENT_ID'),
            'client_secret' => env('FOURSQURE_CLIENT_SECRET'),
            'v' => '20200310'
        ];

        $result = new GuzzleHelper();
        return  $result->processRequest($url, $parameters);
    }
}
