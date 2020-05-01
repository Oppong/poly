@extends('admin.adminpage')


@section('content')

<div role="main" class="">

  @if($video->isEmpty())
      <div class="text-center">
        <img src="/images/empty.png" alt="" class="img-fluid" width="50%">
        <br>
        <a href="{{route('video.create')}}" type="button" class="btn btn-primary mt-4">Create video</a>
      </div>
  @else

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Video</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <a href="{{route('video.create')}}" type="button" class="btn btn-primary">
            Create Video
          </a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>VIDEO TITLE</th>
              <th>VIDEO DESCRIPTION</th>
              <th>VIDEO FILE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
              @foreach($video as $video)

                  <tr>
                    <td>{{$video->id}}</td>
                    <td>{{$video->video_title}}</td>
                    <td>{{$video->video_description}}</td>
                    <td><img src="{{$video->getFirstMediaUrl('videos')}}" alt="" class="img-fluid" width="50" height="50" style="border-radius: 100%;"></td>
                    <td class="d-flex align-items-center">
                    <a href="{{ route('video.edit', $video->id)}}" class=" px-2"> <i class="fas fa-edit"></i> </a>
                    {{--<a href="{{ route('video.show', $video->id)}}" class="text-success px-2">View</a>--}}
                    <form action="{{ route('video.destroy', $video->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn"> <i class="fas fa-trash-alt text-danger"></i></button>
                    </form>
                    </td>
                  </tr>


              @endforeach



          </tbody>
        </table>
      </div>

  @endif
    </div>




@endsection
