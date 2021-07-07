@extends('Youtune.layout')

@section('title','choice')

@section('content')
<div class="content">
  <h2 class="choose">Choose!</h2>
  <div>
    <input type="hidden" class="single-slider" value="0" />
  </div>
  <a href="" class="start-btn btn">search!</a>

</div>
<script src="{{mix('js/jquery.range.js')}}"></script>
<script>
$(function() { // if document is ready
  alert('jQuery is ready.')
});
</script>
@endsection