<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\GroupUser;
use \Crypt;

class GroupController extends Controller
{
    public function __construct(){

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = auth()->user()->groups;
        return view('groups.show', ['groups'=>$groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url=route('groups.store');
        return view('groups.update', ['title'=>null, 'description'=>null, 'url'=>$url]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group=Group::create([
            'title'=>Crypt::encrypt($request->title),
            'description'=>Crypt::encrypt($request->description),
        ]);
        $groupuser = new GroupUser();
        $groupuser->user_id=auth()->user()->id;
        $groupuser->group_id=$group->id;
        $groupuser->is_admin=true;
        $groupuser->save();
        $members=$group->users;
        return redirect()->route('groups.members.index', ['id' => $group->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group=$group::find($id);
        $url=route('groups.update');
        return view('groups.update', ['title'=>Crypt::decrypt($group->title), 'description'=>Crypt::decrypt($group->description), 'url'=>$url]);
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
        $group=$group::find($id);
        $group->title=Crypt::encrypt($request->title);
        $group->description=Crypt::encrypt($request->description);
        $group->save;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group=Group::find($id);
        $group->delete();
    }
}
