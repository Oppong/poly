@extends('admin.adminpage')


@section('content')

<div role="main" class="">

  @if($tag->isEmpty())

  <div class="text-center">
    <img src="/images/empty.png" alt="" class="img-fluid" width="50%">
    <br>
    <a href="{{route('tag.create')}}" type="button" class="btn btn-primary mt-4">Create Tag for Blog</a>
  </div>

  @else
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tags for Blog</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <a href="{{route('tag.create')}}" type="button" class="btn btn-primary">
            Create Tag for Blog
          </a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>NAME</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>

        @foreach($tag as $tag)
            <tr>
              <td>{{$tag->id}}</td>
              <td>{{$tag->name}}</td>
              <td class="d-flex align-items-center">
              <a href="{{ route('tag.edit', $tag->id)}}" class=" px-2"> <i class="fas fa-edit"></i> </a>
              {{--<a href="{{ route('tag.show', $tag->id)}}" class="text-success px-2">View</a>--}}
              <form action="{{ route('tag.destroy', $tag->id)}}" method="post">
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
