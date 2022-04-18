@extends('master')
@section("content")
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="max-height:400px; background-color:#c1ced2">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/350-1.webp')}}" style="max-height:600px">
        <div class="carousel-caption" style="color: #000 !important">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div>
<div class="trending" style="margin: 50px">
    <h2 style="margin-top: 30px">Trending Products</h2>
    @foreach ($data as $item)
    <div style="float:left;width:20%">
        <a href="details/{{$item->id}}">
            <img style="max-height:170px" src="{{$item->gallery}}">
            <div>
                <h4>{{$item->name}}</h4>
            </div>
        </a>
    </div>
    @endforeach
</div>
</div>

@endsection
