<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ContactUser;
use App\Mail\ConfirmContactMail;
use \Cache;
use \Str;
use \Crypt;
use \Mail;

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
        $url=route('contacts.store');
        return view('contacts.add',['url'=>$url]);
    }

    public function confirm($confirmation)
    {
        $user=Cache::get($confirmation, null);
        Cache::forget($confirmation);
        $user->save();
        return redirect()->route('contacts.index');
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
        if($request->contact==auth()->user()->id||User::find($request->contact)==null||Crypt::decrypt(User::find($request->contact)->invite_number)==$request->confirm_contact){
            return redirect()->back();
        }
        $confirmation_number = Str::random(20);
        while(Cache::has($confirmation_number)){
            $confirmation_number = Str::random(20);
        }
        $contact=User::find($request->contact);
        $contact_user=new ContactUser();
        $contact_user->user_id=auth()->user()->id;
        $contact_user->contact_id=$contact->id;
        Cache::put($confirmation_number, $contact_user, now()->addMinutes(15));
        Mail::to($contact)->send(new ConfirmContactMail($confirmation_number));
        return redirect()->route('contacts.index');
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
