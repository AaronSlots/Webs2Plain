<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

class CardController extends Controller
{
    public function __construct(){
        $this->middleware('card:'.$this->card(), ['except' => ['getCards','showCreateCard','showUpdateCard','updateCard','createCard','selectCard']]);
        $this->middleware('auth', ['only' => ['getCards','showCreateCard','showUpdateCard','updateCard','createCard','selectCard']]);
    }

    public function getCards(){
        return view('cards.show', ['cards'=>auth()->user()->cards()]);
    }

    public function selectCard(){
        $card = Input::get('card');
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
        if(Input::has('card_id')){
            $this->editCard();
        } else {
            $this->createCard();
        }
    }

    private function createCard(){

    }

    private function editCard(){

    }
}
