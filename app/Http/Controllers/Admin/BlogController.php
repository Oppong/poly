<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blog = Blog::all();
      return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tag = Tag::all();
      return view('admin.blog.create', compact('tag'));
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
          'blog_title' => 'required',
          'blog_author' => 'required',
          'blog_sub_title' => 'required',
          'blog_date' => 'required',
      ]);

      $blog = new Blog;
      $blog->blog_title = $request->blog_title;
      $blog->blog_author = $request->blog_author;
      $blog->blog_sub_title = $request->blog_sub_title;
      $blog->blog_date = $request->blog_date;

      if($request->hasFile('image') && $request->file('image')->isValid()){
          $blog->addMediaFromRequest('image')->toMediaCollection('blog');
      }

      $blog->save();
      $blog->tags()->sync($request->tags, false);

      return redirect()->route('blog.index');
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
        $blog = Blog::findOrFail($id);

        return view('admin.blog.edit', compact('blog'));
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
        //
        $blog = Blog::findOrFail($id);

        $blog->blog_title = $request->blog_title;
        $blog->blog_author = $request->blog_author;
        $blog->blog_sub_title = $request->blog_sub_title;
        $blog->blog_date = $request->blog_date;

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $blog->addMediaFromRequest('image')->toMediaCollection('blog');
        }

        $blog->save();
        $blog->tags()->sync($request->tags, false);

        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blog.index');
    }
}
