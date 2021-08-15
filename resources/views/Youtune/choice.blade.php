@extends('Youtune.layout')

@section('title','choice')

@section('content')
<div class="content">
  <h2 class="choose">Choose! & Move!</h2>
  <div class="data-area">
    <p class="genre">
    <form action="YoutuneController.search" method="POST">
      @csrf
      </p>
      <div class="tune-color type-1">
        <h3>明るい</h3>
        <input type="hidden" name="slider1" class="single-slider" id="slider1" value="50" />
        <h3>切ない</h3>
      </div>
      <div class="tune-color type-2">
        <h3>朝</h3>
        <input type="hidden" name="slider2" class="single-slider" id="slider2" value="50" />
        <h3>夜</h3>
      </div>
      <div class="tune-color type-3">
        <h3>リラックス</h3>
        <input type="hidden" name="slider3" class="single-slider" id="slider3" value="50" />
        <h3>元気</h3>
      </div>
      <div class="tune-color type-4">
        <h3>邦楽</h3>
        <input type="hidden" name="slider4" class="single-slider" id="slider4" value="50" />
        <h3>洋楽</h3>
      </div>
  </div>

  <input type="submit" id="searchButton" class="searchButton" value="search!">

  </form>

</div>


<script src="{{mix('js/jquery.range.js')}}"></script>
<script>
$('.single-slider').jRange({
  from: 0,
  to: 100,
  step: 10,
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