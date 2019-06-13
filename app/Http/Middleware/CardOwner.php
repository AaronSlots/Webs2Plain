<?php

namespace App\Http\Middleware;

use Closure;
use App\Card;

class CardOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $card_id=$request->route()->parameter('card');
        $card=Card::find($card_id);
        if(auth()->user()->cards->contains($card))
            return $next($request);
        return redirect()->back();
    }
}
