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
        $client = new Client();
        $results = $client->get('https://api.coinmarketcap.com/v1/ticker/'.$id.'/')->getBody();
        $coinObj = json_decode($results, true);
        $name = $coinObj[0]['rank'];
        #dd( $coinObj[0]['24h_volume_usd']);
        DB::table('coin_'.$id)->insert(
            ['name' => $id, 'symbol' => $coinObj[0]['symbol'], 'ranking' => $coinObj[0]['rank'], 'price_btc' => $coinObj[0]['price_btc'],
                'price_usd' => $coinObj[0]['price_usd'], 'volume' => $coinObj[0]['24h_volume_usd'], 'percent_one_hour' => $coinObj[0]['percent_change_1h'],
                'percent_twentyfour_hours' => $coinObj[0]['percent_change_24h'], 'created_at' => NOW()]
        );
        #return view('layouts.coin')->with('results', json_decode($results, true));
    }

    public function getCoin()
    {
        return view('layouts.coin')->with('results', json_decode($results, true));
    }
}
