@extends('Youtune.layout')

@section('title','home')

@section('content')
<div class="content">

  <h1 class="top-ttl">YouTune</h1>
  <p class="concept">今のあなたにおすすめのBGMを見つけます。<br><br>登録せずに始める！</p>

  <a href="{{url('/choice')}}" class="start-btn btn">start!</a>
</div>
@endsection