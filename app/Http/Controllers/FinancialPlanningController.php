<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\CardBankAccount;
use Illuminate\Http\Request;

class FinancialPlanningController extends Controller
{
    public function index()
    {
        // $collectionCardBankAccount = CardBankAccount::query()->orderBy('identification')->get();
        $collectionCardBankAccount = array();

        return view('financialPlanning.index')
        ->with('collectionCardBankAccount', $collectionCardBankAccount);
    }

    //Exibe o formulário para criar um novo recurso
    public function create()
    {
        //Contas Bancarias
        // $collectionBankAccount = BankAccount::query()->orderBy('institution')->get();
        $collectionBankAccount = array();

        return view('financialPlanning.create')->with('collectionBankAccount', $collectionBankAccount);
    }

    //Armazena um novo recurso no banco de dados.
    public function store(Request $request)
    {

        // $objCardBankAccount = new CardBankAccount();
        // $objCardBankAccount->create([
        //     'identification' => $request->identification,
        //     'limit' => $request->limit,
        //     'credit_card_expiration' => $request->creditCardExpiration,
        //     'bank_account_id' => $request->bankAccount
        // ]);

        return redirect()->route('financialPlanning.index');

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
