<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
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
        $data = [
            ['name'=>'Taro','mail'=>'taro@mail.com'],
            ['name'=>'Hanako','mail'=>'hanako@mail.com'],
            ['name'=>'sachiko','mail'=>'sachiko@mail.com']
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
