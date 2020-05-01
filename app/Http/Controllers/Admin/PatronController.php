<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Patron;

class PatronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $patron = Patron::all();
      return view('admin.patron.index', compact('patron'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patron.create');
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

      $patron = new Patron;
      $patron->name = $request->name;
      $patron->position = $request->position;
      if($request->hasFile('image') && $request->file('image')->isValid()){
          $patron->addMediaFromRequest('image')->toMediaCollection('patron');
      }
      $patron->save();

          return redirect()->route('patron.index');
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
      $patron = Patron::findOrFail($id);
      return view('admin.patron.edit', compact('patron'));
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
      $patron = Patron::findOrFail($id);

      $patron->name = $request->name;
      $patron->position = $request->position;
      if($request->hasFile('image') && $request->file('image')->isValid()){
          $patron->addMediaFromRequest('image')->toMediaCollection('patron');
      }
      $patron->save();

          return redirect()->route('patron.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patron = Patron::findOrFail($id);
        $patron->delete();

        return redirect()->route('patron.index');
    }
}
