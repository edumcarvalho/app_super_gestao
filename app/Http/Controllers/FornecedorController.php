<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() //isso pode ser conhecido como uma action
    {
        return view('app.fornecedor.index');
    }
}
