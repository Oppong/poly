@extends('layouts.app')
@section('title', ' | Patrons Page')

@section('content')
@include('includes.nav')

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/fgf.jpg'); height: 500px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 500px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading animated bounceInDown delay-2s">OUR PATRONS</h1>
      <p class="banner-body animated bounceInUp delay-3s">The Patrons for the Group </p>
    </div>
  </div>
</div>

<div class="mission-section">
    <div class="row">
        <div class="col-sm-12 col-md-6 mb-4">
            <i class="fas fa-feather fa-lg icon"></i>
            <h5 class="text-uppercase mission-title mt-3">MESSAGE FROM OUR PATRONS</h5>
            <p class="text-justify text-muted mt-3 mission-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

            <p class="text-justify text-muted mission-body " >Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-sm-12 col-md-6 mb-4">
            <i class="fas fa-boxes fa-lg icon"></i>
            <h5 class="text-uppercase mission-title mt-3">OUR OBJECTIVES</h5>
            <p class="text-justify text-muted mt-3 mission-body ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

            <p class="text-justify text-muted mission-body" >Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

    </div>

    <div class="row mt-5">
      <div class="col-md-12 text-center mt-5">
        <h3 class="donate-form-heading mb-5">THESE ARE OUR PATRONS</h3>
      </div>
      @foreach($patrons as $patron)
      <div class=" col-sm-12 col-md-4 mb-5 " >
          <div class="zoom" style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url({{$patron->getFirstMediaUrl('patron')}}); height: 500px; background-size: cover; opacity:0.95;">
            <h5 class="text-uppercase text-white gallery-heading">{{ $patron->name}}</h5>
            <p class="text-white gallery-body">{{$patron->position}}</p>
          </div>
      </div>
      @endforeach

    </div>
</div>
  </div>
</div>


@include('includes.footer')
@endsection
