<?php

namespace App\Http\Middleware;

use Closure;
use App\GroupUser;

class GroupAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $group)
    {
        if(GroupUser::find([auth()->user()->id,$group])->is_admin)
            return $next($request);
        return redirect()->back();
    }
}
