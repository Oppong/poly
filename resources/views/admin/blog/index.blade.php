@extends('admin.adminpage')


@section('content')

<div role="main" class="">

  @if($blog->isEmpty())
      <div class="text-center">
        <img src="/images/empty.png" alt="" class="img-fluid" width="50%">
        <br>
        <a href="{{route('blog.create')}}" type="button" class="btn btn-primary mt-4">Create Blog Post</a>
      </div>
  @else

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> blog</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <a href="{{route('blog.create')}}" type="button" class="btn btn-primary">
            Create blog
          </a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>TITLE</th>
              <th>SUB TITLE</th>
              <th>AUTHOR</th>
              <th>DATE</th>
              <th>IMAGE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>

        @foreach($blog->tags as $blog)
            <tr>
              <td>{{$blog->id}}</td>
              <td>{{$blog->blog_title}}</td>
              <td>{{$blog->blog_sub_title}}</td>
              <td>{{$blog->blog_author}}</td>
              <td>{{$blog->blog_date}}</td>
            
              <td> <img src="{{$blog->getFirstMediaUrl('blog')}}" class="img-fluid" width="50" height="50" style="border-radius: 100%;"> </td>
              <td class="d-flex align-items-center">
              <a href="{{ route('blog.edit', $blog->id)}}" class=" px-2"> <i class="fas fa-edit"></i> </a>
              {{--<a href="{{ route('blog.show', $blog->id)}}" class="text-success px-2">View</a>--}}
              <form action="{{ route('blog.destroy', $blog->id)}}" method="post">
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
