<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CoinController extends Controller
{
    public function showCoin($id)
    {
        //Defineer Coin en maak request naar CMC
        $client = new Client();
        $results = $client->get('https://api.coinmarketcap.com/v1/ticker/'.$id.'/')->getBody();
        //$coinObj = json_decode($result);
        return view('layouts.coin')->with('results', json_decode($results, true));;
    }
}
