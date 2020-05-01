@extends('layouts.app')
@section('title', ' | Donation Page')

@section('content')
@include('includes.nav')
<div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url('images/fgf.jpg'); height: 500px; background-size: cover; " >
  <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png');  height: 500px; background-size: cover; opacity:0.95;">
    <div class="banner">
      <h1 class="banner-heading animated bounceInDown delay-2s">DONATE</h1>
      <p class="banner-body animated bounceInUp delay-3s">Gospel Music is the food for you soul and long life</p>
    </div>
  </div>
</div>

<div class="donate-form">
  <div class="row">
      <div class="col-md-12 text-center">
        <h3 class="donate-form-heading">HELP US SHARE THE GOSPEL</h3>
        <p class="">Gospel Music is the food for you soul and long life </p>
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
      <input type="text" name="subject" placeholder="Your Phone Number" class="form-control">
    </div>

    <div class="form-group py-2">
      <input type="number" name="subject" placeholder="Amount (Please do not add the GHC)" class="form-control">
    </div>


    <div class="">
        <button type="button" class="btn btn-danger font-weight-bold">DONATE NOW</button>
    </div>
  </form>
</div>


@include('includes.footer')
@endsection
