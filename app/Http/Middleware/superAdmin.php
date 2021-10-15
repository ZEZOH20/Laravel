<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
class superAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $superAdmin=Role::where('name','superAdmin')->first();
        if(Auth::check() &&Auth::user()->role_id !==  $superAdmin->id){
             return redirect(url('/'));
        }
        return $next($request);
    }
}
