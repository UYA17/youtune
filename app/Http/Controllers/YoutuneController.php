<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoutuneController extends Controller
{
    public function index()
    {
        return view('Youtune.top');
    }
    public function choose()
    {
        return view('Youtune.choice');
    }
    public function search()
    {
        return view('Youtune.search');
    }
    public function mypage()
    {
        return view('Youtune.mypage');
    }
}