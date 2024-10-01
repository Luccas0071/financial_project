<?php

namespace App\Services;

use App\Repositories\FinancialAccountRepositoryInterface;

class FinancialAccountService
{
    protected $financialAccountRepository;

    public function __construct(FinancialAccountRepositoryInterface $financialAccountRepository)
    {
        $this->financialAccountRepository = $financialAccountRepository;
    }

    public function getAllFinancialAccount()
    {
        return $this->financialAccountRepository->all();
    }

    public function getFinancialAccountById($id)
    {
        return $this->financialAccountRepository->find($id);
    }

    public function createFinancialAccount(array $data)
    {
        return $this->financialAccountRepository->create($data);
    }

    public function updateFinancialAccount($id, array $data)
    {
        return $this->financialAccountRepository->update($id, $data);
    }

    public function deleteFinancialAccount($id)
    {
        return $this->financialAccountRepository->delete($id);
    }
}
