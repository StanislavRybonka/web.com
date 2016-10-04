<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Closure;
use Illuminate\Support\Facades\Auth;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public static function check($request, Closure $next, $guard = null){
        $auth = Auth::guard($guard);
        if (!$auth->user()->role) {
            return response('Access denied.', 401);
        }else{
            return response('user, not admin', 401);
        }
    }

}
