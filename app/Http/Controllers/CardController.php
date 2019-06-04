<?php

namespace App\Http\Controllers;

use \Input;
use App\Card;
use Illuminate\Support\Str;
use \Crypt;

class CardController extends Controller
{
    public function __construct(){
        $this->middleware('verified');
    }

    public function showCards(){
        $cards=auth()->user()->cards??[];
        return view('cards.show', ['cards'=>$cards,'rndm'=>Crypt::encrypt(Str::random())]);
    }

    public function showCreateCard(){
        return $this->showUpdateCard();
    }

    private function showUpdateCard($id_crypt = null, $iban_hash = null){
        $card=$this->findCard($id_crypt,$iban_hash);
        if(!$card)
            $card=new Card;
        return view('cards.update',['id'=>$card->id,'iban'=>Crypt::decrypt($card->iban),'description'=>Crypt::decrypt($card->description),'url'=>$url]);
    }

    public function showEditCard($id_crypt,$iban_hash){
        return $this->showUpdateCard($iban_hash, '/card/'.$id_crypt.'/'.$iban_hash.'/update');
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

    private function findCard($id_crypt,$iban_hash){
        if($id_crypt == null)
            return false;
        $card=auth()->user()->cards->find(Crypt::decrypt($id_crypt));
        return Hash::check(Crypt::decrypt($card->iban), $iban_hash)?$card:false;
    }
}
