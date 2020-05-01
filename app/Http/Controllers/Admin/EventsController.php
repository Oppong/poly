<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $event = Event::all();
      return view('admin.event.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'title' => 'required',
          'description' => 'required',
          'event_time' => 'required',
          'event_date' => 'required',

      ]);

      $event = new Event;
      $event->title = $request->title;
      $event->description = $request->description;
      $event->event_time = $request->event_time;
      $event->event_date = $request->event_date;
      if($request->hasFile('image') && $request->file('image')->isValid()){
          $event->addMediaFromRequest('image')->toMediaCollection('events');
      }
      $event->save();

          return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $event = Event::findOrFail($id);
      return view('admin.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $event = Event::findOrFail($id);

      $event->title = $request->title;
      $event->description = $request->description;
      $event->event_time = $request->event_time;
      $event->event_date = $request->event_date;
      if($request->hasFile('image') && $request->file('image')->isValid()){
          $event->addMediaFromRequest('image')->toMediaCollection('events');
      }
      $event->save();

          return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        $event->delete();

        return redirect()->route('event.index');
    }
}
