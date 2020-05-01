@extends('layouts.app')
@section('title', ' | Mission Page')

@section('content')
@include('includes.nav')

<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/fgf.jpg'); height: 500px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 500px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading animated bounceInDown delay-2s">MISSION</h1>
      <p class="banner-body animated bounceInUp delay-3s">The Purpose and Why we Exist </p>
    </div>
  </div>
</div>

<div class="mission-section">
    <div class="row">
        <div class="col-sm-12 col-md-4 mb-4">
            <i class="fas fa-feather fa-lg icon"></i>
            <h5 class="text-uppercase mission-title mt-3">OUR MISSION</h5>
            <p class="text-justify text-muted mt-3 mission-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

            <p class="text-justify text-muted mission-body " >Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-sm-12 col-md-4 mb-4">
            <i class="fas fa-boxes fa-lg icon"></i>
            <h5 class="text-uppercase mission-title mt-3">OUR VISION</h5>
            <p class="text-justify text-muted mt-3 mission-body ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

            <p class="text-justify text-muted mission-body" >Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="col-sm-12 col-md-4 mb-4">
            <i class="fas fa-city fa-lg icon"></i>
            <h5 class="text-uppercase mission-title mt-3">OUR COMMUNITY</h5>
            <p class="text-justify text-muted mt-3 mission-body ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

        </div>
    </div>
</div>

@include('includes.footer')
@endsection
