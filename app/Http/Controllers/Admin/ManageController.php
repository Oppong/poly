<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Manage;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $manage = Manage::all();
      return view('admin.manage.index', compact('manage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manage.create');
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

      $manage = new Manage;
      $manage->name = $request->name;
      $manage->position = $request->position;
      if($request->hasFile('image') && $request->file('image')->isValid()){
          $manage->addMediaFromRequest('image')->toMediaCollection('manage');
      }
      $manage->save();

          return redirect()->route('manage.index');
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
      $manage = Manage::findOrFail($id);
      return view('admin.manage.edit', compact('manage'));
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
        $manage = Manage::findOrFail($id);

        $manage->name = $request->name;
        $manage->position = $request->position;
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $manage->addMediaFromRequest('image')->toMediaCollection('manage');
        }
        $manage->save();

            return redirect()->route('manage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $manage = Manage::findOrFail($id);
      $manage->delete();

      return redirect()->route('manage.index');
    }
}
