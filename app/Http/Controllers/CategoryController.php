<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Exibe uma lista de recursos
    public function index()
    {
        return view('category.list');
    }

    //Exibe o formulário para criar um novo recurso
    public function create()
    {
        return view('category.create');
    }

    //Armazena um novo recurso no banco de dados.
    public function store()
    {

    }

    //Exibe um recurso específico 
    public function show($id)
    {

    }

    //Exibe o formulário para editar um recurso existente
    public function edit($id)
    {

    }

    //Atualiza um recurso existente no banco de dados.
    public function update()
    {

    }

    //Remove um recurso do banco de dados.
    public function destroy()
    {

    }

    //Para buscas ou filtragens.
    public function search()
    {

    }
}
