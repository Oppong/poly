<!doctype html>
<html lang="en">
  <head>
    <title>Admin Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    @livewireStyles
    @trixassets
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-dark">

    <a class="navbar-brand text-white" href="">
        Home
    </a>

    <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
    </ul>
  </nav>

<div class="row">

    <div class="col-md-2 bg-light">
         {{--<a href="{{route('slider.index')}}" class="nav-link text-muted"> <i class="fas fa-users"></i> &nbsp; User Management</a> --}}
         <a href="{{route('slider.index')}}" class="nav-link text-muted"> <i class="fas fa-file-image"></i> &nbsp; Slider</a>
         <a href="{{route('member.index')}}" class="nav-link text-muted"> <i class="fas fa-image"></i> &nbsp; Add Member</a>
         <a href="{{route('manage.index')}}" class="nav-link text-muted"> <i class="fas fa-align-justify"></i> &nbsp; Management</a>
         <a href="{{route('category.index')}}" class="nav-link text-muted"> <i class="fas fa-briefcase"></i> &nbsp; Gallery Category</a>
         <a href="{{route('gallery.index')}}" class="nav-link text-muted"> <i class="fas fa-camera"></i> &nbsp; Gallery</a>
         <a href="{{route('event.index')}}" class="nav-link text-muted"> <i class="fas fa-icons"></i> &nbsp; Events</a>
         <a href="{{route('patron.index')}}" class="nav-link text-muted"> <i class="fas fa-user-tag"></i> &nbsp; Patron</a>
         <a href="{{route('executive.index')}}" class="nav-link text-muted"> <i class="fas fa-grip-vertical"></i> &nbsp; Executives</a>
         <a href="{{route('video.index')}}" class="nav-link text-muted"> <i class="fas fa-video"></i> &nbsp; Add Videos</a>
         <a href="{{route('tag.index')}}" class="nav-link text-muted"> <i class="fas fa-align-center"></i> &nbsp;Tags</a>
         <a href="{{route('blog.index')}}" class="nav-link text-muted"> <i class="fas fa-align-right"></i> &nbsp; Blog Post</a>
    </div>

    <div class="col-md-10">
      <div class="container">
         @yield('content')
      </div>
    </div>
</div>



    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/select2.full.min.js') }}"></script>
    @livewireScripts
    @stack('scripts')

    <script type="text/javascript">
    $(document).ready(function() {
$('.select2').select2();
});
    </script>
  </body>
</html>
