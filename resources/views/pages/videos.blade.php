@extends('layouts.app')
@section('title', ' | Executives Page')

@section('content')
@include('includes.nav')

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/fgf.jpg'); height: 500px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 500px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading animated bounceInDown delay-2s">VIDEOS</h1>
      <p class="banner-body animated bounceInUp delay-3s">Videos From our Programmes and Concert </p>
    </div>
  </div>
</div>


<div class="videos-section">
    <div class="row">

      @foreach($videos as $video)

        <div class="col-sm-12 col-md-6 px-4 mb-5">
          <video src="{{$video->getFirstMediaUrl('video')}}" style="max-width: 100%; height: auto;" controls ></video>
          <div class="d-flex align-items-center ">
            <a href="{{$video->getFirstMediaUrl('video')}}" class="mt-3 text-muted"> <i class="fas fa-download text-muted"></i> &nbsp; Download</a>
          </div>
        </div>
      @endforeach


    </div>
</div>

  </div>
</div>


@include('includes.footer')
@endsection
