<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Executive;

class ExecutiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $executive = Executive::all();
      return view('admin.executive.index', compact('executive'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.executive.create');
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
          'name' => 'required',
          'position' => 'required',
      ]);

      $executive = new Executive;
      $executive->name = $request->name;
      $executive->position = $request->position;
      if($request->hasFile('image') && $request->file('image')->isValid()){
          $executive->addMediaFromRequest('image')->toMediaCollection('executive');
      }
      $executive->save();

          return redirect()->route('executive.index');
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
      $executive = Executive::findOrFail($id);
      return view('admin.executive.edit', compact('executive'));
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

      $executive = Executive::findOrFail($id);

      $executive->name = $request->name;
      $executive->position = $request->position;
      if($request->hasFile('image') && $request->file('image')->isValid()){
          $executive->addMediaFromRequest('image')->toMediaCollection('executive');
      }
      $executive->save();

          return redirect()->route('executive.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $executive = Executive::findOrFail($id);
      $executive->delete();

      return redirect()->route('executive.index');
    }
}
