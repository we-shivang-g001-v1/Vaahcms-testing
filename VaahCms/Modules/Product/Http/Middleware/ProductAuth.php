<?php  namespace VaahCms\Modules\Product\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProductAuth
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
        if (! \ProductAuth::user()->hasPermission('can-manage-roles'))
        {
            return response()->json(['You dont have the permission to access to this page']);

        }
        return $next($request);
    }
}
