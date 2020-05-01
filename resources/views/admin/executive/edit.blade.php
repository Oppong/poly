@extends('admin.adminpage')


@section('content')

<div class="mt-5">
  <h3 class="py-3">Edit executive</h3>

      <form class="form-group" action="{{route('executive.update', $executive->id)}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mt-4">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" value="{{$executive->name}}">
              @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="position">Position of the Executive</label>
              <textarea name="position" rows="8" cols="80" class="form-control" id="position" >{{$executive->position}}</textarea>
              @error('position')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <input type="file" name="image" class="form-control">
                @error('image')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Save and Go Back</button>
                <a href="{{route('executive.index')}}" class="btn btn-success" type="submit">Go Back</a>
            </div>
      </form>
</div>

@endsection
