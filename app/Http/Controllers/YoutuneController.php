<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\config_example;
use App\Http\Vender\CallYoutubeApi;
use Google_Client;
use Google_Service_YouTube;


class YoutuneController extends Controller
{
    public function index()
    {
        return view('Youtune.top');
    }
    public function choose()
    {
        // config/example.textから






        return view('Youtune.choice');
    }
    public function search(Request $request)
    {
        $t = new CallYoutubeApi();
        $searchList = $t->searchList("スピッツ");
        foreach ($searchList as $result) {
            $videosList = $t->videosList($result->id->videoId);
            $embed = "https//www.youtube.com/embed/" . $videosList[0]['id'];
            $array[] = array($embed, $videosList[0]['snippet'], $videosList[0]['statistics']);
        }

        return view('Youtune.search', ['youtube' => $array]);
    }
    public function mypage()
    {
        return view('Youtune.mypage');
    }
}