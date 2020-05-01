<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $video = Video::all();
      return view('admin.video.index', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
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
          'video_title' => 'required',
          'video_description' => 'required',
          'video_url' => 'nullable',
      ]);

      $video = new video;
      $video->video_title = $request->video_title;
      $video->video_description = $request->video_description;
      $video->video_url = $request->video_url;
      if($request->hasFile('video') && $request->file('video')->isValid()){
          $video->addMediaFromRequest('video')->toMediaCollection('video');
      }
      $video->save();

          return redirect()->route('video.index');
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
      $video = Video::findOrFail($id);
      return view('admin.video.edit', compact('video'));
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

      $video = Video::findOrFail($id);

      $video->video_title = $request->video_title;
      $video->video_description = $request->video_description;
      $video->video_url = $request->video_url;
      if($request->hasFile('video') && $request->file('video')->isValid()){
          $video->addMediaFromRequest('video')->toMediaCollection('video');
      }

      if($request->hasFile('poster') && $request->file('poster')->isValid()){
          $video->addMediaFromRequest('poster')->toMediaCollection('poster');
      }
      $video->save();

          return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
        return redirect()->route('video.index');
    }
}
