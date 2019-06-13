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
    public function handle($request, Closure $next)
    {
        $group=$request->route()->parameter('group');
        $groupuser=GroupUser::find(auth()->user()->id,$group);
        if($groupuser->is_admin)
            return $next($request);
        return redirect()->back();
    }
}
