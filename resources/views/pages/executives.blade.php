@extends('layouts.app')
@section('title', ' | Executives Page')

@section('content')
@include('includes.nav')

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/fgf.jpg'); height: 500px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 500px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading animated bounceInDown delay-2s">EXECUTIVES</h1>
      <p class="banner-body animated bounceInUp delay-3s">The Executives for the Group </p>
    </div>
  </div>
</div>

<div class="executives-section">
  <div class="row mt-5">
    <div class="col-md-12 text-center mt-5">
      <h3 class="donate-form-heading mb-5">THESE ARE OUR EXECUTIVES</h3>
    </div>
    @foreach($executives as $executive)
    <div class=" col-sm-12 col-md-4 mb-5 " >
        <div class="zoom" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url({{$executive->getFirstMediaUrl('executive')}}); height: 500px; background-size: cover; opacity:0.95;">
          <h5 class="text-uppercase text-white gallery-heading">{{ $executive->name}}</h5>
          <p class="text-white gallery-body">{{$executive->position}}</p>
        </div>
    </div>
    @endforeach

  </div>
</div>

  </div>
</div>


@include('includes.footer')
@endsection
