@extends('admin.adminpage')


@section('content')

<div role="main" class="">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Gallery</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <a href="{{route('gallery.create')}}" type="button" class="btn btn-primary">
            Create gallery
          </a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>NAME</th>
              <th>DESCRIPTION</th>
              <th>CATEGORY</th>
              <th>IMAGE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>

        @foreach($gallery as $gallery)
            <tr>
              <td>{{$gallery->id}}</td>
              <td>{{$gallery->name}}</td>
              <td>{{$gallery->description}}</td>
              <td>{{$gallery->category->name}}</td>
              <td> <img src="{{$gallery->getFirstMediaUrl('gallery')}}" class="img-fluid" width="50" height="50" style="border-radius: 100%;"> </td>
              <td class="d-flex align-items-center">
              <a href="{{ route('gallery.edit', $gallery->id)}}" class=" px-2"> <i class="fas fa-edit"></i> </a>
              {{--<a href="{{ route('gallery.show', $gallery->id)}}" class="text-success px-2">View</a>--}}
              <form action="{{ route('gallery.destroy', $gallery->id)}}" method="post">
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
    </div>


@endsection
