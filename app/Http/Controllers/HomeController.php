<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // listagem padrão GET
        return view('welcome');
    }
    public function create(){
        // Mostrar um formulário para cadastrar novas informações GET
    }
    public function store(){
        // Cadastrar algo POST
    }
    public function show(){ 
        // Recuperar algo GET
    }
    public function edit(){
        // Mostrar um formuláio para atualizar algo GET
    }
    public function update(){
        // Atualizar algo PUT/PATCH
    }
    public function destroy(){
        // remover algo DELETE
    }
}
