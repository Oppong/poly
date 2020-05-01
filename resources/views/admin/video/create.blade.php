@extends('admin.adminpage')


@section('content')

<div class="mt-5">
  <h3 class="py-3">Create New video</h3>

      <form class="form-group" action="{{route('video.store')}}" method="post" enctype="multipart/form-data">
        @csrf

            <div class="mt-4">
              <label for="video_title">Video Title</label>
              <input type="text" name="video_title" id="video_title" class="form-control">
              @error('video_title')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="video_description">Small Description of the video</label>
              <textarea name="video_description" rows="8" cols="80" class="form-control" id="video_description"></textarea>
              @error('video_description')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="video_url">Video Date</label>
              <input type="text" name="video_url" id="video_url" class="form-control">
              @error('video_url')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <label for="video">Video </label>
                <input type="file" name="video" class="form-control">
                @error('video')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <label for="video_poster">Video Poster </label>
                <input type="file" name="poster" class="form-control" id="video_poster">
                @error('poster')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>


            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Save and Go Back</button>
                <a href="{{route('video.index')}}" class="btn btn-success" type="submit">Go Back</a>
            </div>
      </form>
</div>

@endsection
