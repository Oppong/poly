@extends('admin.adminpage')


@section('content')

<div class="mt-5">
  <h3 class="py-3">Create New event</h3>

      <form class="form-group" action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
        @csrf

            <div class="mt-4">
              <label for="title">Event Title</label>
              <input type="text" name="title" id="title" class="form-control">
              @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="description">Small Description of the event</label>
              <textarea name="description" rows="8" cols="80" class="form-control" id="description"></textarea>
              @error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="event_date">Event Date</label>
              <input type="text" name="event_date" id="event_date" class="form-control">
              @error('event_date')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
              <label for="event_time">Event Time</label>
              <input type="text" name="event_time" id="event_time" class="form-control">
              @error('event_time')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>

            <div class="mt-4">
                <label for="image">Image for Event </label>
                <input type="file" name="image" class="form-control">
                @error('image')<div class="alert alert-danger">{{ $message }}</div>@enderror
            </div>


            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Save and Go Back</button>
                <a href="{{route('event.index')}}" class="btn btn-success" type="submit">Go Back</a>
            </div>
      </form>
</div>

@endsection
