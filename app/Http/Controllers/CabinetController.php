<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CabinetController extends Controller
{

    public function index()
    {
        return view("cabinet.index");
    }
}
