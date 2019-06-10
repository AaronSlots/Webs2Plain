<?php

namespace App\Http\Middleware;

use Closure;
use App\GroupUser;
use \Auth;

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
        dd([$group->id,Auth::user()->id]);
        $groupuser=GroupUser::where([['user_id',Auth::user()->id],['group_id',$group]])->first();
        if($groupuser->is_admin)
            return $next($request);
        return redirect()->back();
    }
}
