<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;

class CabinetController extends Controller
{

    public function index()
    {
        return view("cabinet/index");
    }

}
