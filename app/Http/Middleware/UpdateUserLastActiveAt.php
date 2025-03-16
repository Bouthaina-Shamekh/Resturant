<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserLastActiveAt
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next) : Response
    {
        $admin = Auth::guard('admin')->user(); 

        if ($admin) {
            $admin->forceFill([
                'last_active_at' => Carbon::now(),
            ])->save();
        }

        
        // $user = $request->user();

        // if ($user instanceof User) {
        //     $user->forceFill([
        //         'last_active_at' => Carbon::now(),
        //     ])
        //     ->save();
        // }
        return $next($request);
    }
}
