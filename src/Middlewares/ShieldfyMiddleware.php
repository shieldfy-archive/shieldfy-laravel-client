<?php
namespace Shieldfy\ShieldfyLaravelClient\Middlewares;

use Shieldfy\Guard;
use Closure;

class ShieldfyMiddleware
{
	/**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
	public function handle($request , Closure $next)
	{
		Guard::init([
		        'app_key'=>config('shieldfy.keys.app_key'),
		        'app_secret'=>config('shieldfy.keys.app_secret'),
		        'debug'=>config('shieldfy.debug'),
		        'action'=>config('shieldfy.action'),
		        'disabledHeaders'=>config('shieldfy.disabledHeaders')
		])->catchCallbacks();

		return $next($request);
	}
}