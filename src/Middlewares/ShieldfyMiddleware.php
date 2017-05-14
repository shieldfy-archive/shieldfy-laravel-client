<?php

namespace Shieldfy\ShieldfyLaravelClient\Middlewares;

use DB;
use Closure;
use Shieldfy\Guard;

class ShieldfyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $guard = Guard::init([
                'app_key'        => config('shieldfy.keys.app_key'),
                'app_secret'     => config('shieldfy.keys.app_secret'),
                'debug'          => config('shieldfy.debug'),
                'action'         => config('shieldfy.action'),
                'headers'=> config('shieldfy.headers'),
                'disable'=> config('shieldfy.disable'),
        ]);
       
        //
        DB::listen(function($query) use($guard){
            $guard->attachQuery($query);
        });

        return $next($request);
    }
}
