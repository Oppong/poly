@extends('admin.adminpage')


@section('content')

<div class="mt-5">
  <h3 class="py-3">Create New Member</h3>

      <form class="form-group" action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mt-4">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control">
              @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="description">Small Description of the Singer</label>
              <textarea name="description" rows="8" cols="80" class="form-control" id="description"></textarea>
              @error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="music_part">Music Part</label>
              <input type="text" name="music_part" id="music_part" class="form-control">
              @error('music_part')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <label for="image">Image for Member </label>
                <input type="file" name="image" class="form-control">
                @error('image')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Save and Go Back</button>
                <a href="{{route('member.index')}}" class="btn btn-success" type="submit">Go Back</a>
            </div>
      </form>
</div>

@endsection
