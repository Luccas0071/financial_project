<?php

namespace App\Repositories;

use App\Models\FinancialAccount;

class FinancialAccountRepository implements FinancialAccountRepositoryInterface
{
    public function all()
    {
        return FinancialAccount::all();
    }

    public function find($id)
    {
        return FinancialAccount::findOrFail($id);
    }

    public function create(array $data)
    {
        return FinancialAccount::create($data);
    }

    public function update($id, array $data)
    {
        $financialAccount = FinancialAccount::findOrFail($id);
        $financialAccount->update($data);
        return $financialAccount;
    }

    public function delete($id)
    {
        $financialAccount = FinancialAccount::findOrFail($id);
        return $financialAccount->delete();
    }
}

