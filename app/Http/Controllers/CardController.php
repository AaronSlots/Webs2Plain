<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use \Crypt;
use \Cache;

class CardController extends Controller
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
        $cards=auth()->user()->cards??[];
        return view('cards.show', ['cards'=>$cards]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url=route('cards.store');
        return view('cards.update', ['iban'=>null, 'description'=>null, 'url'=>$url]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $card = new Card();
        $card->iban = Crypt::encrypt($request->iban);
        $card->description = Crypt::encrypt($request->description);
        $card->user_id=auth()->user()->id;
        $card->save();
        return redirect(route('cards.show', ['card'=>$card]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Cache::forever('card_id', Crypt::encrypt($id));
        return redirect('/payments');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card = auth()->user()->cards->find($id);
        $url=route('cards.update');
        return view('cards.update', ['iban'=>Crypt::decrypt($card->iban),'description'=>Crypt::decrypt($card->description),'url'=>$url]);
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
        $card = auth()->user()->cards->find($id);
        $card->iban = Crypt::encrypt($request->iban);
        $card->description = Crypt::encrypt($request->description);
        $card->save();
        return redirect(route('cards.show', ['card'=>$card]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card = auth()->user()->cards->find($id);
        $card->delete();
    }
}
