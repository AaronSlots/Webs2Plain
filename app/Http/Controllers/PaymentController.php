<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Payment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  int  $card
     * @return \Illuminate\Http\Response
     */
    public function index($card)
    {
        $payments=$this->card($card)->payments;
        return view('cards.payments.show', ['payments'=>$payments,'card'=>$card]);
    }

    /**
     * Show the form for creating a new resource.
     * @param  int  $card
     * @return \Illuminate\Http\Response
     */
    public function create($card)
    {
        $url=route('cards.payments.store',['card'=>$card]);
        return view('cards.payments.create', ['card'=>$card,'url'=>$url]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  int  $card
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($card, Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param  int  $card
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_interval($card, Request $request, $id)
    {
        //
    }

    private function card($card_id){
        return Card::find($card_id);
    }

    private function prepare($id){
        $payment = new \AlternativePayments\Model\Payment();
        $payment->setpaymentOption(Payment::find($id)->option->name);

        $customer = new \AlternativePayments\Model\Customer();
    }
}
