@extends('layouts.app')
@section('title', ' | Management Page')

@section('content')
@include('includes.nav')

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/fgf.jpg'); height: 500px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 500px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading animated bounceInDown delay-2s">MANAGEMENT</h1>
      <p class="banner-body animated bounceInUp delay-3s">The Brains Behind Our Group </p>
    </div>
  </div>
</div>

<div class="management-section">
  <div class="row">
    @foreach($manage as $manage)
    <div class=" col-sm-12 col-md-4 mb-5 " >
        <div class="zoom" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url({{$manage->getFirstMediaUrl('manage')}}); height: 500px; background-size: cover; opacity:0.95;">
          <h5 class="text-uppercase text-white gallery-heading">{{ $manage->name}}</h5>
          <p class="text-white gallery-body">{{$manage->position}}</p>
        </div>
    </div>
    @endforeach

  </div>
</div>

@include('includes.footer')
@endsection
