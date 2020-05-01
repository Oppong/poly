<div id="carouselExampleIndicators " class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach($sliders as $item)
          <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : ''}}"></li>
      @endforeach
    </ol>
    <div class="carousel-inner hero-image">

      @foreach($sliders as $key => $slider)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
            <div style="background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.8)), url({{$slider->getFirstMediaUrl('images')}}); height: 750px; background-size: cover; ">
                <div style="background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.8)), url('images/night.png'); height: 750px; background-size: cover; opacity:0.95;">
                    <div class="intro">
                        <h1 class="intro-heading animated bounceInDown delay-2s">{{$slider->title}}</h1>
                        <p class="intro-body animated bounceInUp delay-3s">{{$slider->content}}</p>
                        <a type="button" class="btn btn-danger btn-lg mt-4 animated bounceInUp delay-3s" href="contact"> CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>

      @endforeach

      </div>
</div>
