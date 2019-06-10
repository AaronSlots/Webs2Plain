<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $group
     * @return \Illuminate\Http\Response
     */
    public function index($group)
    {
        return view('groups.members.show',['group'=>$group, 'members'=>Group::find($group)->users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $group
     * @return \Illuminate\Http\Response
     */
    public function create($group)
    {
        $contacts=Auth::user()->contacts;
        return view('groups.members.add', ['group'=>$group,'contacts'=>$contacts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $group
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($group, Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $group
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($group, $id)
    {
        //
    }
}
