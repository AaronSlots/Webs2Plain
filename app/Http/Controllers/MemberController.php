<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\GroupUser;
use \Auth;

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
        $contacts=Auth::user()->contacts->whereNotIn('id',GroupUser::where('group_id',(int)$group)->get()->pluck('user_id'))->pluck('contact')->pluck('fullname','id');
        $url=route('groups.members.store',['group'=>$group]);
        return view('groups.members.add', ['url'=>$url,'contacts'=>$contacts]);
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
        $groupuser=new GroupUser();
        $groupuser->group_id=$group;
        $groupuser->user_id=$request->member;
        $groupuser->save();
        return redirect()->route('groups.members.index', ['group'=>$group]);
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
        $group=GroupUser::find($id,$group);
        $group->delete();
    }
}
