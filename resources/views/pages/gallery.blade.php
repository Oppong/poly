@extends('layouts.app')
@section('title', ' | Gallery Page')

@section('content')
@include('includes.nav')
<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/fgf.jpg'); height: 500px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 500px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading animated bounceInDown delay-2s">GALLERY</h1>
      <p class="banner-body animated bounceInUp delay-3s">Our Nice Gallery with our Images from Events </p>
    </div>
  </div>
</div>


<div class="gallery">
  <div class="row">

@foreach($gallery as $gallery)
    <div class=" col-sm-12 col-md-3 mb-5 " >
        <div class="zoom">
          <img src="{{$gallery->getFirstMediaUrl('gallery')}}" alt="" class="img-fluid">
        </div>
    </div>
@endforeach

  </div>
</div>


@include('includes.footer')
@endsection
