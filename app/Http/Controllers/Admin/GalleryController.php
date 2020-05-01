<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;
use App\Category;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('admin.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $category = Category::all();
      return view('admin.gallery.create', compact('category'));
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
          'description' => 'required',
          'category_id' => 'required|integer',
      ]);

      $gallery = new Gallery;
      $gallery->name = $request->name;
      $gallery->description = $request->description;
      $gallery->category_id = $request->category_id;
      if($request->hasFile('image') && $request->file('image')->isValid()){
          $gallery->addMediaFromRequest('image')->toMediaCollection('gallery');
      }

      $gallery->save();

          return redirect()->route('gallery.index');
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
      $category = Category::all();
      $gallery = Gallery::findOrFail($id);
      return view('admin.gallery.edit', compact('gallery','category'));
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
        $gallery = Gallery::findOrFail($id);

        $gallery->name = $request->name;
        $gallery->description = $request->description;
        $gallery->category_id = $request->category_id;
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $gallery->addMediaFromRequest('image')->toMediaCollection('gallery');
        }

        $gallery->save();

        return redirect()->route('gallery.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $gallery = Gallery::findOrFail($id);
      $gallery->delete();

      return redirect()->route('gallery.index');
    }
}
