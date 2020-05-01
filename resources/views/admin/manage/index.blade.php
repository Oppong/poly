@extends('admin.adminpage')


@section('content')

<div role="main" class="">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">manage</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <a href="{{route('manage.create')}}" type="button" class="btn btn-primary">
            Create Manage
          </a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>NAME</th>
              <th>POSITION</th>
              <th>IMAGE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>

        @foreach($manage as $manage)
            <tr>
              <td>{{$manage->id}}</td>
              <td>{{$manage->name}}</td>
              <td>{{$manage->position}}</td>
              <td><img src="{{$manage->getFirstMediaUrl('manage')}}" alt="" class="img-fluid" width="50" height="50" style="border-radius: 100%;"></td>
              <td class="d-flex align-items-center">
              <a href="{{ route('manage.edit', $manage->id)}}" class=" px-2"> <i class="fas fa-edit"></i> </a>
              {{--<a href="{{ route('manage.show', $manage->id)}}" class="text-success px-2">View</a>--}}
              <form action="{{ route('manage.destroy', $manage->id)}}" method="post">
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
