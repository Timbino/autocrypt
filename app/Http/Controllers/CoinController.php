<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CoinController extends Controller
{

    public function showStratis()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://httpbin.org',
            // You can set any number of default request options.
            'timeout'  => 10.0,
        ]);

        // Create a client with a base URI
        $client = new GuzzleHttp\Client(['base_uri' => 'https://api.coinmarketcap.com/v1/ticker/stratis/']);
        // Send a request to https://foo.com/api/test
        dd($client);
    }
}
