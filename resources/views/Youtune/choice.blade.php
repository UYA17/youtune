@extends('Youtune.layout')

@section('title','choice')

@section('content')
<div class="content">
  <h2 class="choose">Choose! & Move!</h2>
  <div class="data-area">
    <p class="genre">
      <input type="radio" class="genre" name="genre" value="rock" checked> ROCK
      <input type="radio" class="genre" name="genre" value="pop"> POP
    </p>
    <div class="tune-color type-1">
      <h3>明るい</h3>
      <input type="hidden" class="single-slider" id="slider1" value="50" />
      <h3>しっとり</h3>
    </div>
    <div class="tune-color type-2">
      <h3>シンプル</h3>
      <input type="hidden" class="single-slider" id="slider2" value="50" />
      <h3>壮大</h3>
    </div>
    <div class="tune-color type-3">
      <h3>甘い</h3>
      <input type="hidden" class="single-slider" id="slider3" value="50" />
      <h3>荒々しい</h3>
    </div>
    <div class="tune-color type-4">
      <h3>軽い</h3>
      <input type="hidden" class="single-slider" id="slider4" value="50" />
      <h3>重い</h3>
    </div>
  </div>
  <!-- <a href="" class="start-btn btn"> -->
  <input type="button" id="searchButton">
  search!</a>

</div>


<script src="{{mix('js/jquery.range.js')}}"></script>
<script>
$('.single-slider').jRange({
  from: 0,
  to: 100,
  step: 15,
  scale: [0, 50, 100],
  format: '%s',
  width: '40%',
  theme: "theme-blue",
  showLabels: false,
  onstatechange: function() {
    $(".single-slider").trigger('change');
  }
});
let searchButton = document.getElementById('searchButton');
searchButton.addEventListener('click', buttonClick);

function buttonClick() {
  console.log('スライダー１=' + slider1.value + 'スライダー2= ' + slider2.value + 'スライダー3= ' + slider3.value + 'スライダー4= ' +
    slider4.value);
}

// $('.single-slider').change(function(e) {
//   console.log(this.value);
// });
</script>
@endsection