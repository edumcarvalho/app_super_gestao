<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobreNos() //isso pode ser conhecido como uma action
    {
        return view('site.sobre-nos');
    }
}
