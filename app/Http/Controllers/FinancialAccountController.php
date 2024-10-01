<?php

namespace App\Http\Controllers;

use App\Models\FinancialAccount;
use App\Services\FinancialAccountService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FinancialAccountController extends Controller
{
    protected $financialAccountService;

    public function __construct(FinancialAccountService $financialAccountService)
    {
        $this->financialAccountService = $financialAccountService; 
    }

    public function index()
    {
        $collectionFinancialAccount = $this->financialAccountService->getAllFinancialAccount();
        return view('financialAccount.index')
            ->with('collectionFinancialAccount', $collectionFinancialAccount);
    }

    public function show($id)
    {
        $objFinancialAccount = $this->financialAccountService->getFinancialAccountById($id);

        return view('financialAccount.index')
            ->with('objFinancialAccount', $objFinancialAccount);
    }

    public function store(Request $request)
    {
        $data = [
            'identification' => $request->identification,
            'financial_institution_id' => $request->institution,
            'balance' => $request->balance,
            'type' => $request->type,
            'description' => $request->description,
            'user_id' => Auth::id()
        ];

        $this->financialAccountService->createFinancialAccount($data);

        return redirect()
            ->route('financialAccount.index');
    }

    public function update($id, Request $request)
    {
        $data = [
            'identification' => $request->identification,
            'financial_institution_id' => $request->institution,
            'balance' => $request->balance,
            'type' => $request->type,
            'description' => $request->description
        ];

        $this->financialAccountService->updateFinancialAccount($id, $data);

        return redirect()
            ->route('financialAccount.index');
    }

    public function destroy($id)
    {
        $this->financialAccountService->deleteFinancialAccount($id);

        return redirect()
        ->route('financialAccount.index');
    }

    public function create()
    {
        return view('financialAccount.create');
    }

    public function edit(FinancialAccount $financialAccount)
    {
        return view('financialAccount.edit')
            ->with('financialAccount', $financialAccount);
    }




}
