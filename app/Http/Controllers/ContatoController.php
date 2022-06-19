<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=>"Maria", "tel"=>"2345678"],
            (object)["nome"=>"Joana", "tel"=>"2345679"],
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);


        return view('contato.index',compact('contatos'));
    }
    public function criar(Request $req)
    {
        dd($req->all());
        return "Método criar do ContatoController";
    }
    public function editar()
    {
        return "Método editar do ContatoController";
    }
}
