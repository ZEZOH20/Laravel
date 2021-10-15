<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
class student
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
       $student=Role::where('name','user')->first();
       if(Auth::check() &&Auth::user()->role_id !==  $student->id){
            return redirect(url('/MiddlewareOnlyStudent'));
       }
        return $next($request);
    }
}
