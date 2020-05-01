@extends('admin.adminpage')


@section('content')

<div role="main" class="">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Member</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <a href="{{route('member.create')}}" type="button" class="btn btn-primary">
            Create Member
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
              <th>MUSIC PART</th>
              <th>IMAGE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>

        @foreach($member as $member)
            <tr>
              <td>{{$member->id}}</td>
              <td>{{$member->name}}</td>
              <td>{{$member->description}}</td>
              <td>{{$member->music_part}}</td>
              <td><img src="{{$member->getFirstMediaUrl('member')}}" alt="" class="img-fluid" width="50" height="50" style="border-radius: 100%;"></td>
              <td class="d-flex align-items-center">
              <a href="{{ route('member.edit', $member->id)}}" class=" px-2"> <i class="fas fa-edit"></i> </a>
              {{--<a href="{{ route('member.show', $member->id)}}" class="text-success px-2">View</a>--}}
              <form action="{{ route('member.destroy', $member->id)}}" method="post">
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
