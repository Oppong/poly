@extends('admin.adminpage')


@section('content')

<div role="main" class="">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Category For Gallery</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <a href="{{route('category.create')}}" type="button" class="btn btn-primary">
            Create category
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
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>

        @foreach($category as $category)
            <tr>
              <td>{{$category->id}}</td>
              <td>{{$category->name}}</td>
              <td>{{$category->description}}</td>
              <td class="d-flex align-items-center">
              <a href="{{ route('category.edit', $category->id)}}" class=" px-2"> <i class="fas fa-edit"></i> </a>
              {{--<a href="{{ route('category.show', $category->id)}}" class="text-success px-2">View</a>--}}
              <form action="{{ route('category.destroy', $category->id)}}" method="post">
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
