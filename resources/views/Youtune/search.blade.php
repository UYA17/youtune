@extends('Youtune.layout')

@section('title','search')

@section('content')
@if (count($youtube) > 0)
<table class="table table-striped">
  <thead>
    <tr class="category_table">
      <th class="title_table">title</th>
      <th>viewCount</th>
      <th>likeCount</th>
      <th>dislikeCount</th>
    </tr>
  </thead>
  <tbody>


    @foreach ($youtube as $youtube)
    <tr class="list">
      <td>{{ $youtube[1]['title'] }}</td>
      <td>{{ $youtube[2]['viewCount'] }}</td>
      <td>{{ $youtube[2]['likeCount'] }}</td>
      <td>{{ $youtube[2]['dislikeCount'] }}</td>
      <td>
        <form action="YoutuneController/search" method="POST">
          @csrf
          <input type="hidden" name="videoURL" value="{{ $youtube[0] }}">
          <input type="submit" class="access" value="Listen!">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
<div class="again-btn">
  <a href="{{url('/choice')}}" class="btn">choose again!</a>
</div>
@endsection