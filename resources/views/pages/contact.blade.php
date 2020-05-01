@extends('layouts.app')
@section('title', ' | Contact Page')

@section('content')
@include('includes.nav')
<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/fgf.jpg'); height: 500px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 500px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading animated bounceInDown delay-2s">CONTACT US</h1>
      <p class="banner-body animated bounceInUp delay-3s">Get in Touch with us for any concert or programmes </p>
    </div>
  </div>
</div>


<div class="contact">
  <div class="row">
      <div class="col-sm-12 col-md-4 text-center mb-4">
        <i class="fas fa-phone fa-lg icon"></i>
        <h5 class="text-uppercase contact-title mt-3">Phone Number</h5>
        <p class="text-muted mt-3"> Tel: +233 020 000 1111 <br> +233 050 000 1111</p>
      </div>

      <div class="col-sm-12 col-md-4 text-center mb-4">
        <i class="fas fa-envelope fa-lg icon"></i>
        <h5 class="text-uppercase contact-title mt-3">Email Address </h5>
        <p class="text-muted mt-3"> polyphonialschoraleghana22@gmail.com</p>
      </div>

      <div class="col-sm-12 col-md-4 text-center mb-4">
        <i class="fas fa-location-arrow fa-lg icon"></i>
        <h5 class="text-uppercase contact-title mt-3">Location </h5>
        <p class="text-muted mt-3"> Sunyani us for any concert </p>
      </div>
  </div>
</div>

<div class="contact-form">
  <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="contact-form-heading">CONTACT US</h1>
        <p class="">Have any Questions Let Us Know </p>
      </div>
  </div>

  <form class="text-center" action="" method="post">

    <div class="form-group py-2">
      <input type="text" name="name" placeholder="Your Name" class="form-control">
    </div>

    <div class="form-group py-2">
      <input type="text" name="email" placeholder="Your Email" class="form-control">
    </div>

    <div class="form-group py-2">
      <input type="text" name="subject" placeholder="Write a Subject" class="form-control">
    </div>
    <div class="form-group py-2">
      <textarea name="name" rows="8" cols="80" placeholder="Your message " class="form-control"></textarea>
    </div>

    <div class="">
        <button type="button" class="btn btn-danger font-weight-bold">SUBMIT MESSAGE</button>
    </div>
  </form>
</div>


@include('includes.footer')
@endsection
