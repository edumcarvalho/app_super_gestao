<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MotivoContato;
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
        
        $motivo_contato = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato (teste)'],['motivo_contatos' => $motivo_contato]);
    }


    public function salvar(Request $request){

        // realizar a validação dos dados do formulario recebidos no request antes de salvar
        //dd($request);

        $regras = [
            //name do input do formulário
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required'
        ];
        $feedback = [
            // 'nome.required'=> 'O nome é campo obrigatório.',
            'nome.min'=> 'O nome deve conter pelo menos 3 caracteres.',
            'nome.max'=> 'O nome deve ter no máximo 40 caracteres.',
            // 'telefone.required'=> 'O telefone é campo obrigatório.',
            'email.email'=> 'O email é inválido.',
            // 'motivo_contatos_id.required'=> 'O motivo é campo obrigatório.',
            // 'mensagem.required'=> 'A mensagem é campo obrigatório.',

            'required' => 'O campo :attribute deve ser preenchido'
            
        ];

        $request->validate($regras,$feedback);

        SiteContato::create($request->all());

        return redirect()->route('site.index');

    }
}
