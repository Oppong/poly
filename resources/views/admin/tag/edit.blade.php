@extends('admin.adminpage')


@section('content')

<div class="mt-5">
  <h3 class="py-3">Edit Tag</h3>

      <form class="form-group" action="{{route('tag.update', $tag->id)}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mt-4">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" value="{{$tag->name}}">
              @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>


            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Save and Go Back</button>
                <a href="{{route('tag.index')}}" class="btn btn-success" type="submit">Go Back</a>
            </div>
      </form>
</div>

@endsection
