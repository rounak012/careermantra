<?php namespace App\Http\Middleware;

use Closure;

class amiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if($request->input('uid'=='madao'))
			{return $next($request);}
			return redirect('/');
		
	}

}
