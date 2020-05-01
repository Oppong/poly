@extends('layouts.app')
@section('title', ' | Members Page')

@section('content')
@include('includes.nav')

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/fgf.jpg'); height: 500px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 500px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading animated bounceInDown delay-2s">GROUP</h1>
      <p class="banner-body animated bounceInUp delay-3s">The Wonderful Chorale Group </p>
    </div>
  </div>
</div>

<div class="group">
  <div class="row">

  @foreach($members as $member)
    <div class=" col-sm-12 col-md-4 mb-5 " >
        <div class="zoom" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url({{$member->getFirstMediaUrl('member')}}); height: 500px; background-size: cover; opacity:0.95;">
          <h5 class="text-uppercase text-white gallery-heading">{{$member->name}}</h5>
          <p class="text-white gallery-body">{{$member->description}}</p>
          <p class="text-white gallery-body mt-4 small">{{$member->music_part}}</p>

        </div>
    </div>
    @endforeach

  </div>
</div>


@include('includes.footer')
@endsection
