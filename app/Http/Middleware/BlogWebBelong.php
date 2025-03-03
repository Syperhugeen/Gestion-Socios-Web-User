<?php

namespace App\Http\Middleware;

use Closure;

class BlogWebBelong
{

    public function handle(
                $request,
        Closure $next,
                $webBelong

    ) {

        $request->merge(['webBelong' => $webBelong]);

        return $next($request);

    }
}
