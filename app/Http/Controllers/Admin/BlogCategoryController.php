<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BlogCategory;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blogcategory = BlogCategory::all();
      return view('admin.blogcategory.index', compact('blogcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogcategory.create');
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
      ]);

      $blogcategory = new BlogCategory;
      $blogcategory->name = $request->name;
      $blogcategory->description = $request->description;
      $blogcategory->save();

          return redirect()->route('blogcategory.index');
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
      $blogcategory = BlogCategory::findOrFail($id);
      return view('admin.blogcategory.edit', compact('blogcategory'));
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
        $blogcategory = BlogCategory::findOrFail($id);

        $blogcategory = new BlogCategory;
        $blogcategory->name = $request->name;
        $blogcategory->description = $request->description;
        $blogcategory->save();

            return redirect()->route('blogcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $blogcategory = BlogCategory::findOrFail($id);
      $blogcategory->delete();

      return redirect()->route('blogcategory.index');
    }
}
