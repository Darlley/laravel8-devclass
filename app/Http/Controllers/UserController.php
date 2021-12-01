<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // listagem padrão GET
        // return view('welcome');

        dd('user');
    }
    public function create(){
        // Mostrar um formulário para cadastrar novas informações GET
    }
    public function store(){
        // Cadastrar algo POST
    }
    public function show($id){ 
        dd('User id ' . $id);
    }
    public function edit($id){
        // Mostrar um formuláio para atualizar algo GET

        dd("user id: {$id} /edit");
    }
    public function update(){
        // Atualizar algo PUT/PATCH
    }
    public function destroy(){
        // remover algo DELETE
    }
}
