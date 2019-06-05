<?php

namespace App\Http\Middleware;

use Closure;
use \Cache;
use \Crypt;

class Card
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
        $id_crypt = Cache::get('card_id', null);
        if($id_crypt != null && auth()->user()->cards->find(Crypt::decrypt($id_crypt)) != null)
            return $next($request);
        else
            return '/cards';
    }
}
