@extends('admin.adminpage')


@section('content')

<div role="main" class="">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Slider</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <a href="{{route('slider.create')}}" type="button" class="btn btn-primary">
            Create Slider
          </a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>TITLE</th>
              <th>CONTENT</th>
              <th>IMAGE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>

        @foreach($slider as $slider)
            <tr>
              <td>{{$slider->id}}</td>
              <td>{{$slider->title}}</td>
              <td>{{$slider->content}}</td>
              <td><img src="{{$slider->getFirstMediaUrl('images')}}" alt="" class="img-fluid" width="50" height="50" style="border-radius: 100%;"></td>
              <td class="d-flex align-items-center">
              <a href="{{ route('slider.edit', $slider->id)}}" class=" px-2"> <i class="fas fa-edit"></i> </a>
              {{--<a href="{{ route('slider.show', $slider->id)}}" class="text-success px-2">View</a>--}}
              <form action="{{ route('slider.destroy', $slider->id)}}" method="post">
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
