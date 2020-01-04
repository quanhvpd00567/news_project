<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as Auth;

class isAdmin
{
    protected $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {

        if (!$this->auth->check()){
            return redirect()->route('admin_login');
        }
        return $next($request);
    }
}
