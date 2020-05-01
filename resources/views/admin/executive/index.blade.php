@extends('admin.adminpage')


@section('content')

<div role="main" class="">

  @if($executive->isEmpty())

  <div class="text-center">
    <img src="/images/empty.png" alt="" class="img-fluid" width="50%">
    <br>
    <a href="{{route('executive.create')}}" type="button" class="btn btn-primary mt-4">Create Executive</a>
  </div>

  @else
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Executive</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <a href="{{route('executive.create')}}" type="button" class="btn btn-primary">
            Create executive
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

        @foreach($executive as $executive)
            <tr>
              <td>{{$executive->id}}</td>
              <td>{{$executive->name}}</td>
              <td>{{$executive->position}}</td>
              <td><img src="{{$executive->getFirstMediaUrl('executive')}}" alt="" class="img-fluid" width="50" height="50" style="border-radius: 100%;"></td>
              <td class="d-flex align-items-center">
              <a href="{{ route('executive.edit', $executive->id)}}" class=" px-2"> <i class="fas fa-edit"></i> </a>
              {{--<a href="{{ route('executive.show', $executive->id)}}" class="text-success px-2">View</a>--}}
              <form action="{{ route('executive.destroy', $executive->id)}}" method="post">
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
