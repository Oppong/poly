@extends('admin.adminpage')


@section('content')

<div class="mt-5">
  <h3 class="py-3">Edit Category</h3>

      <form class="form-group" action="{{route('category.update', $category->id)}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mt-4">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
              @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="description">Small Description of the Category</label>
              <textarea name="description" rows="8" cols="80" class="form-control" id="description" >{{$category->description}}</textarea>
              @error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Save and Go Back</button>
                <a href="{{route('category.index')}}" class="btn btn-success" type="submit">Go Back</a>
            </div>
      </form>
</div>

@endsection
