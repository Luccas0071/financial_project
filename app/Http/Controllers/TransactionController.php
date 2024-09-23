<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\CardBankAccount;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //Exibe uma lista de recursos
    public function index()
    {
        return view('transaction.index');
    }

    //Exibe o formulário para criar um novo recurso
    public function create()
    {
        $collectionCardBankAccount = CardBankAccount::query()->orderBy('identification')->get();
        $collectionBankAccount = BankAccount::query()->orderBy('institution')->get();

        return view('transaction.create')
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
