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
        // スライダーの値を受け取る
        $slider = [
            $request->slider1, $request->slider2, $request->slider3, $request->slider4
        ];

        // スライダー１
        if ($slider[0] < 50) {
            $keyWord1 = "明るい";
        } elseif ($slider[0] > 50) {
            $keyWord1 = "しっとり";
        } else {
            $keyWord1 = "";
        }
        // スライダー２
        if ($slider[1] < 50) {
            $keyWord2 = "シンプル";
        } elseif ($slider[1] > 50) {
            $keyWord2 = "壮大";
        } else {
            $keyWord2 = "";
        }
        // スライダー３
        if ($slider[2] < 50) {
            $keyWord3 = "甘い";
        } elseif ($slider[2] > 50) {
            $keyWord3 = "荒々しい";
        } else {
            $keyWord3 = "";
        }
        // スライダー４
        if ($slider[3] < 50) {
            $keyWord4 = "軽い";
        } elseif ($slider[3] > 50) {
            $keyWord4 = "重い";
        } else {
            $keyWord4 = "";
        }

        $t = new CallYoutubeApi();
        $searchList = $t->searchList($keyWord1, $keyWord2, $keyWord3, $keyWord4);
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