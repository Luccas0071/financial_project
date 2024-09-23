<?php

namespace App\Http\Controllers;

use App\Models\FinancialInstitution;
use App\Models\User;
use Dotenv\Parser\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FinancialInstitutionController extends Controller
{
    public function index(Request $request)
    {
        // 1° Busca os registros e retorna em collection é necessario tem a model
        // $collectionBankAccount = BankAccount::all();
        
        // 2° Busca os registros e retorna um array
        // $collectionBankAccount = DB::select('SELECT * FROM bank_account');

        $messageSuccess = session('message.success');
        
        // 3° Criar uma query, para aplicar mais opções
        $collectionFinancialInstitution = array();
        // $collectionFinancialInstitution = FinancialInstitution::query()->orderBy('institution')->get();
        
        
        return view('financialInstitution.index')
            ->with('collectionFinancialInstitution', $collectionFinancialInstitution);
            // ->with('messageSuccess', $messageSuccess);
    }

    public function create()
    {
        return view('financialInstitution.create');
    }

    public function store(Request $request)
    {
        // $userId             = Auth::id();
        // $institution        = $request->input('institution');
        // $balance            = $request->input('balance');
        // $totalValue        = $request->input('totalValue');
        // $description        = $request->input('descriptionComplete');
        // $completionDate    = $request->input('completionDate');

        //INCLUSÃO SIMPLIFICADA
        // $objBankAccount = new BankAccount();
        // $objBankAccount->institution = $request->input('institution');
        // $objBankAccount->balance = $request->input('balance');
        // $objBankAccount->total_value = $request->input('totalValue');
        // $objBankAccount->description = $request->input('descriptionComplete');
        // $objBankAccount->completion_date = $request->input('completionDate');
        // $objBankAccount->user_id = Auth::id();
        // $objBankAccount->save();

        // INCLUSÃO MASS ASSIGNMENT (iNCLUSÃO EM MASSA)
        // $objBankAccount = new BankAccount();
        // $objBankAccount->create($request->all());

        // INCLUSÃO EM MASSA MAS ESPECIFICANDO OS CAMPOS PELO FILLABLE DA MODEL
        $objBankAccount = new FinancialInstitution();
        $objBankAccountDb = $objBankAccount->create([
            'institution' => $request->institution,
            'balance' => $request->balance,
            'total_value' => $request->totalValue,
            'description' => $request->description,
            'completion_date' => $request->completionDate,
            'user_id' => Auth::id()
        ]);

        //Adicionar a sessão que dura apenas 1 request
        $request->session()->flash('message.success', "Conta bancaria {$objBankAccountDb->institution} adicionada com sucesso!");
  
        // $return = DB::insert('INSERT INTO bank_account (institution, balance, total_value, description, completion_date, user_id)values (? ,? ,? ,? ,? ,?)', 
        //     [$institution, $balance, $totalValue, $description, $completionDate, $userId]);

        // if($return == true){
            return redirect()
            ->route('financialInstitution.index')
            ->with('message.success', "Conta bancaria {$objBankAccountDb->institution} adicionada com sucesso!");
        // }else{
        //     echo "Erro ao incluir";
        // }
    }

    public function show($id)
    {
        
    }

    public function edit(FinancialInstitution $bankAccount)
    {
        return view('financialInstitution.edit')->with('financialInstitution', $bankAccount);;
    }

    public function update(FinancialInstitution $bankAccount, Request $request)
    {
        $bankAccount->fill([
            'institution' => $request->institution,
            'balance' => $request->balance,
            'total_value' => $request->totalValue,
            'description' => $request->description,
            'completion_date' => $request->completionDate
        ]);
        $bankAccount->save();

        return redirect()->route('financialInstitution.index')->with('message.success', 'Conta bancaria atualizada com sucesso!');;
    }

    public function destroy(FinancialInstitution $bankAccount)
    {
        // $objBankAccount = BankAccount::find($request->idBankAccount);
        // BankAccount::destroy($request->idBankAccount);

        $bankAccount->delete();

        return redirect()->route('financialInstitution.index')->with('message.success', 'Conta bancaria removida com sucesso!');
    }
}
