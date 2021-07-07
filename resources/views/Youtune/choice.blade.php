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
$('.single-slider').jRange({
  from: -180,
  to: 180,
  step: 15,
  scale: [-180, -150, -120, -90, -60, -30, 0, 30, 60, 90, 120, 150, 180],
  format: '%s',
  width: '100%',
  theme: "theme-blue",
  showLabels: false,
  onstatechange: function() {
    $(".single-slider").trigger('change');
  }
});

$('.single-slider').change(function(e) {
  console.log("スライダーが動かされました");
});
</script>
@endsection