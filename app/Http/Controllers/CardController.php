<?php

namespace App\Http\Controllers;

use \Input;
use App\Card;

class CardController extends Controller
{
    public function __construct(){
        $this->middleware('verified');
    }

    public function getCards(){
        $cards=auth()->user()->cards;
        return view('cards.show', ['cards'=>$cards]);
    }

    public function showCreateCard(){
        return $this->showUpdateCard('/card/new');
    }

    private function showUpdateCard($iban_hash = null,$url){
        $card=$this->findCard();
        if(!$card)
            $card=new Card;
        return view('cards.update',['iban'=>Crypt::decrypt($card->iban),'display_name'=>Crypt::decrypt($card->display_name),'url'=>$url]);
    }

    public function showEditCard($iban_hash){
        return $this->showUpdateCard($iban_hash, '/card/edit/'.$iban_hash);
    }

    public function updateCard($iban_hash = null){
        $card=$this->findCard($iban_hash);
        if(!$card){
            Card::create(['iban'=>$iban,'display_name'=>$display_name,'user_id'=>auth()->user()->id]);
        } else {
            $card->iban=Crypt::encrypt(Input::get('iban'));
            $card->display_name=Crypt::encrypt(Input::get('display_name'));
            $card->save();
        }
        return redirect('/card/select');
    }

    private function findCard($iban_hash){
        if($iban_hash == null)
            return false;

        foreach(auth()->user()->cards as $card){
            if(Hash::check(Crypt::decrypt($card->iban), $iban_hash)){
                return $card;
            }
        }

        return false;
    }
}
