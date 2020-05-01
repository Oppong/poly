@extends('admin.adminpage')


@section('content')

<div class="mt-5">
  <h3 class="py-3">Create New Blog</h3>

      <form class="form-group" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
        @csrf

            <div class="mt-4">
                <label for="name">Tags</label>

              <select class="form-control select2" name="tags[]" multiple="multiple">
                  @foreach($tag as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                  @endforeach
              </select>

              @error('tag_id')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="blog_title">Blog Title</label>
              <input type="text" name="blog_title" id="blog_title" class="form-control">
              @error('blog_title')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="blog_sub_title">Blog Sub Title</label>
              <input type="text" name="blog_sub_title" id="blog_sub_title" class="form-control">
              @error('blog_sub_title')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="blog_author">Blog Author</label>
              <input type="text" name="blog_author" id="blog_author" class="form-control">
              @error('blog_author')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="blog_date">Published Date </label>
              <input type="text" name="blog_date" id="blog_date" class="form-control">
              @error('blog_date')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            {{--<div class="mt-4">
              <label for="blog_date">Blog Content </label>
              @trix(\App\Blog::class, 'content')
            </div>--}}

            <div class="mt-4">
                <label for="image">Image for Blog Post </label>
                <input type="file" name="image" class="form-control">
                @error('image')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>


            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Save and Go Back</button>
                <a href="{{route('blog.index')}}" class="btn btn-success" type="submit">Go Back</a>
            </div>
      </form>
</div>

@endsection
