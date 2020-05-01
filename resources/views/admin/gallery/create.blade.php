@extends('admin.adminpage')


@section('content')

<div class="mt-5">
  <h3 class="py-3">Create New gallery</h3>

      <form class="form-group" action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
        @csrf

            <div class="mt-4">
              <label for="name">Category</label>

              <select class="form-control" name="category_id">
                  @foreach($category as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
              </select>

              @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control">
              @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="description">Small Description of the gallery</label>
              <textarea name="description" rows="8" cols="80" class="form-control" id="description"></textarea>
              @error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <label for="image">Image for Gallery </label>
                <input type="file" name="image" class="form-control">
                @error('image')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>


            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Save and Go Back</button>
                <a href="{{route('gallery.index')}}" class="btn btn-success" type="submit">Go Back</a>
            </div>
      </form>
</div>

@endsection
