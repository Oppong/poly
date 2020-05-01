<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $member = Member::all();
      return view('admin.member.index', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member.create');
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
          'music_part' => 'required',
      ]);

      $member = new Member;
      $member->name = $request->name;
      $member->description = $request->description;
      $member->music_part = $request->music_part;
      if($request->hasFile('image') && $request->file('image')->isValid()){
          $member->addMediaFromRequest('image')->toMediaCollection('member');
      }
      $member->save();

          return redirect()->route('member.index');
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
      $member = Member::findOrFail($id);
      return view('admin.member.edit', compact('member'));
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
        $member = Member::findOrFail($id);

        $member->name = $request->name;
        $member->description = $request->description;
        $member->music_part = $request->music_part;
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $member->addMediaFromRequest('image')->toMediaCollection('member');
        }
        $member->save();

            return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $member = Member::findOrFail($id);
      $member->delete();

      return redirect()->route('member.index');
    }
}
