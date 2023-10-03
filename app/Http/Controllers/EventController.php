<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Gabriel";
        $idade = 29;
        $profissao = "Desenvolvedor FullStack";

        $arr = [10,20,30,40,50,60,70,80,90,100];

        $nomes = ["Matheus", "Maria", "João", "Saulo"];

        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => $profissao,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }
}
