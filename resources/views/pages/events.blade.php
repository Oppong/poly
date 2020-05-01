@extends('layouts.app')
@section('title', ' | Events Page')

@section('content')
@include('includes.nav')
<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/fgf.jpg'); height: 500px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 500px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading animated bounceInDown delay-2s">EVENTS</h1>
      <p class="banner-body animated bounceInUp delay-3s">Upcoming Events or Programmes </p>
    </div>
  </div>
</div>


<div class="events">
  <div class="row">
@foreach($events as $event)
<div class=" col-sm-12 col-md-4 mb-5 " >
    <div class="card">
        <img src="{{$event->getFirstMediaUrl('events')}}" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$event->title}}</h5>
          <p class="card-text text-muted ">{{Str::limit($event->description, 200)}}</p>
          <a href="#" class="small pr-2 text-dark"> <i class="fas fa-calendar"></i> &nbsp; {{$event->event_date}}</a>
          <a href="#" class="text-dark small"> <i class="fas fa-clock"></i> {{$event->event_time}} </a>
        </div>
    </div>
  </div>
@endforeach
  </div>
</div>


@include('includes.footer')
@endsection
