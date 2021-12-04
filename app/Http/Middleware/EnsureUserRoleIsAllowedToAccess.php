<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class EnsureUserRoleIsAllowedToAccess
{

    // Dashboard and Student

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $userRole = auth()->user()->role;
            $currentRouteName = Route::currentRouteName();

            if (in_array($currentRouteName, $this->userAccessRole()[$userRole])) {
                return $next($request);
            } else {
            abort(403);
            }
        } catch (\Throwable $th) {
            abort(403);
        }
    }

    private function userAccessRole()
    {
        return [
            'user' => [
                'dashboard'
            ],
            'admin' => [
                'dashboard',
                'data-anak-asuh'
            ]
        ];
    }
}
