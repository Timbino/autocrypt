<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use App\User;
use App\Coin;
use DB;

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

    public function getCoin()
    {
        $coin = User::find(1)->coins();
        dd($coin);
        /* $coins = DB::table('coins')->get();

        return view('layouts.home')->with('coins', $coins);*/
    }
}
