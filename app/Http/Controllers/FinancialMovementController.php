<?php

namespace App\Http\Controllers;

use App\Models\FinancialMovement;
use App\Models\CardBankAccount;
use Illuminate\Http\Request;

class FinancialMovementController extends Controller
{
    //Exibe uma lista de recursos
    public function index()
    {
        return view('financialMovement.index');
    }

    //Exibe o formulário para criar um novo recurso
    public function create()
    {
        // $collectionCardBankAccount = CardBankAccount::query()->orderBy('identification')->get();
        // $collectionBankAccount = FinancialMovement::query()->orderBy('institution')->get();

        $collectionCardBankAccount = Array();
        $collectionBankAccount = Array();

        return view('financialMovement.create')
            ->with('collectionCardBankAccount', $collectionCardBankAccount)
            ->with('collectionBankAccount', $collectionBankAccount);
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
