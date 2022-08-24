<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\UserPermission;

class EnsureUserRoleIsAllowedToAccess
{
    //dashboard, pages, navigation-menus

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try{
            $userRole = auth()->user()->role; //to know what role the user who sign in
            $currentRouteName = Route::currentRouteName(); //to know url path that we access

            if(UserPermission::isRoleHasRightToAccess($userRole, $currentRouteName) || in_array($currentRouteName, $this->defaultUserAccessRole()[$userRole])){ //check if the login user is have access in userAccessRole
                return $next($request); //if yes, then login user can access the page
            }else{
                abort(403, 'Unauthorized Action'); //if no then login user cannot access the page
            }
        }catch(\Throwable $th){
            abort(403, 'Unauthorized Action');
        }
    }

    /**
     * The default user access role
     *
     * @return void
     */
    private function defaultUserAccessRole(){
        return[
            'admin' => [
                'user-permissions',
            ],
        ];
    }
}
