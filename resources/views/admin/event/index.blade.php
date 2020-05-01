@extends('admin.adminpage')


@section('content')

<div role="main" class="">

  @if($event->isEmpty())
      <div class="text-center">
        <img src="/images/empty.png" alt="" class="img-fluid" width="50%">
        <br>
        <a href="{{route('event.create')}}" type="button" class="btn btn-primary mt-4">Create Event</a>
      </div>
  @else

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Event</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <a href="{{route('event.create')}}" type="button" class="btn btn-primary">
            Create Event
          </a>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>TITLE</th>
              <th>DESCRIPTION</th>
              <th>EVENT DATE</th>
              <th>EVENT TIME</th>
              <th>IMAGE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
              @foreach($event as $event)

                  <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->title}}</td>
                    <td>{{$event->description}}</td>
                    <td>{{$event->event_date}}</td>
                    <td>{{$event->event_time}}</td>
                    <td><img src="{{$event->getFirstMediaUrl('events')}}" alt="" class="img-fluid" width="50" height="50" style="border-radius: 100%;"></td>
                    <td class="d-flex align-items-center">
                    <a href="{{ route('event.edit', $event->id)}}" class=" px-2"> <i class="fas fa-edit"></i> </a>
                    {{--<a href="{{ route('event.show', $event->id)}}" class="text-success px-2">View</a>--}}
                    <form action="{{ route('event.destroy', $event->id)}}" method="post">
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
