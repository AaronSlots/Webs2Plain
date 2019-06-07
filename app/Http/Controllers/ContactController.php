<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ContactUser;
use App\Mail\ConfirmContactMail;
use \Cache;
use \Str;

class ContactController extends Controller
{
    public function __construct(){
        $this->middleware('verified');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=auth()->user()->contacts;
        return view('contacts.show',['contacts'=>$contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.add');
    }

    public function confirm($confirmation)
    {
        $user=Cache::get($confirmation, null);
        Cache::forget($confirmation);
        if(auth()->user()->id==$user->id){
            $user->save();
        }
    }

    public function switchFavourite($id){
        $contact=auth()->user()->contacts->find($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->user==auth()->user()->id){
            return redirect()->back();
        }
        $confirmation_number = Str::random(20);
        while(Cache::has($confirmation_number)){
            $confirmation_number = Str::random(20);
        }
        $contact=User::find($request->user);
        $contact_user=new ContactUser();
        $contact_user->user_id=auth()->user()->id;
        $contact_user->contact_id=$contact->id;
        Cache::add($confirmation_number, $contact_user, 15);
        Mail::to($contact)->send(new ConfirmContactMail());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = auth()->user()->contacts->find($id);
        $contact->delete();
    }
}
