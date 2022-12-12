<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato() //isso pode ser conhecido como uma action
    {
        return view('site.contato', ['titulo' => 'Contato (teste)']);
    }
}
