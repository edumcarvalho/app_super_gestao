<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() //isso pode ser conhecido como uma action
    {
        $motivo_contato = MotivoContato::all();
        return view('site.principal',['motivo_contatos' => $motivo_contato]);
    }
}
