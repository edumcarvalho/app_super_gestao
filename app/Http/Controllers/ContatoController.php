<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) //isso pode ser conhecido como uma action
    {
        /* SALVANDO UM CONTAO COM POSSIBILIDADE DE TRATAMENTO DE CADA CAMPO SE PRECISO*/
        // dd($request);
        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');
        // print_r($contato->getAttributes());
        // $contato->save();

        /* SALVANDO UM CONTATO COM TODOS OS CAMPOS SEM TRATAMENTO */        
        // $contato = new SiteContato();
        // $contato->create($request->all());
        // print_r($contato->getAttributes());
        
        $motivo_contatos = [
            '1' => 'Dúvida', 
            '2' => 'Elogio', 
            '3' => 'Reclamação', 
        ];

        return view('site.contato', ['titulo' => 'Contato (teste)'],['motivo_contatos' => $motivo_contatos]);
    }


    public function salvar(Request $request){

        // realizar a validação dos dados do formulario recebidos no request antes de salvar
        //dd($request);

        $request->validate([
            //name do input do formulário
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);
    }
}
