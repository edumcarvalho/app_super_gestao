<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() //isso pode ser conhecido como uma action
    {
        return view('site.principal');
    }
}
