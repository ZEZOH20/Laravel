<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
class admin
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
        $Admin=Role::where('name','admin')->first();
        if(Auth::check() &&Auth::user()->role_id !==  $Admin->id){
             return redirect(url('/'));
        }
        return $next($request);
    }
}
