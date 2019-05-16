<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

class CardController extends Controller
{
    public function __construct(){
        $this->middleware('card:'.$this->card(), ['except' => ['getCards','showCreateCard','showUpdateCard','updateCard','selectCard']]);
        $this->middleware('verified', ['only' => ['getCards','showCreateCard','showUpdateCard','updateCard','selectCard']]);
    }

    public function getCards(){
        $cards=auth()->user()->cards;
        return view('cards.show', ['cards'=>$cards]);
    }

    public function selectCard(){
        $card = Card::find(\Input::get('card_id'));
        session(['card'=>$card]);
    }

    public function showCreateCard(){
        $card = new Card();
        return $this->showUpdateCard($card,'/card/new');
    }

    private function card(){
        return session('card');
    }

    private function showUpdateCard($card,$url){

        return view('cards.update',['iban'=>$card->iban,'display_name'=>$card->display_name,'card_id'=>$card->id,'url'=>$url]);
    }

    public function showEditCard(){
        $card = $this->card();
        return $this->showUpdateCard($card,'/card/edit');
    }

    public function updateCard(){
        $iban = \Input::get('iban');
        $display_name = \Input::get('display_name');
        if(\Input::has('card_id')){
            $card=Card::find(\Input::get('card_id'));
            $card->iban=$iban;
            $card->display_name=$display_name;
            $card->save();
        } else {
            Card::create(['iban'=>$iban,'display_name'=>$display_name,'user_id'=>auth()->user()->id]);
        }
        return redirect('/card/payments');
    }
}
