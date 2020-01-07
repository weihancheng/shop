<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

class PermissionMiddleware
{
//    use PermissionSevice;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, string $guard = 'admin', $resource = null)
    {
        // 站长不需要验证
        if (!$this->isWebMaster()) {
            $permission = $this->getPermission($resource);
            $hasPermisssion = $this->hasPermission($permission, $guard);

            // 权限规则没有定义处理
            if (!$hasPermisssion) {
                return $next($request);
            }

            $auth = auth($guard)->user()->hasAnyPermission($permission);
            if (!$auth) {
                throw new PermissionDoesNotExist('你没有权限访问');
            }
        }
        return $next($request);
    }

    /**
     * 站长检测
     * @param string $guard
     * @return bool
     */
    private function isWebMaster($guard = 'admin'): bool
    {
        $relation = auth()->guard($guard)->user()->roles();
        $has = $relation->where('roles.name', 'webmaster')->first();
        return boolval($has);
    }


    public function hasPermission(string $permission, string $guard): bool
    {
        $where = [
            ['name', '=', $permission],
            ['guard_name', '=', $guard],
        ];
        $has = DB::table('permissions')->where($where)->first();
        return boolval($has);
    }

    public function getPermission($resource): string
    {
        $route = Route::getCurrentRoute();

        if ($resource) {
            // 将添加&更新转化为
            return str_replace(['@store', '@update'], ['@create', '@edit'], $route->action['controller']);
        }

        return $route->action['controller'];
    }
}
