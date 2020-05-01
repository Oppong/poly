@extends('admin.adminpage')


@section('content')

<div class="mt-5">
  <h3 class="py-3">Create New Slider</h3>

      <form class="form-group" action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mt-4">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control">
              @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="content">Content</label>
              <textarea name="content" rows="8" cols="80" class="form-control"></textarea>
              @error('content')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <label for="image">Image for Slider </label>
                <input type="file" name="image" class="form-control">
                  @error('image')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Save and Go Back</button>
                <a href="{{route('slider.index')}}" class="btn btn-success" type="submit">Go Back</a>
            </div>
      </form>
</div>

@endsection
