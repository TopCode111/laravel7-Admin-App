<?php

namespace App\Http\Middleware;

use Closure;

class RouteNeedsPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission, $needsAll = false)
    {
        // Permission array
        if (strpos($permission, ';') !== false) {
            $permissions = explode(';', $permission);
            $access = access()->allowMultiple($permissions, ($needsAll === 'true' ? true : false));
        } else {
            /**
             * Single permission.
             */
            $access = access()->allow($permission);
        }

        if (! $access) {
            return redirect()
                ->route('frontend.index')
                ->withFlashDanger(trans('auth.general_error'));
        }

        return $next($request);
    }
}
