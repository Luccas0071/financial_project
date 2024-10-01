<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Planejamento') }}
        </h2>
    </x-slot>

    <form action=" {{ route('financialPlanning.store') }}" method="post">
        @csrf
        <div class="container">
            <div class="row justify-content-end mt-3">
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-4">
                    <label for="identification" class="form-label">Identificação:</label>
                    <input type="text" class="form-control identification" id="identification" name="identification">
                </div>
    
                <div class="col-md-2">
                    <label for="limit" class="form-label">Limite:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control limit" id="limit" name="limit" aria-label="Amount (to the nearest dollar)">
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="creditCardExpiration" class="form-label">Data Vencimento:</label>
                    <input type="date" class="form-control creditCardExpiration" id="creditCardExpiration" name="creditCardExpiration">
                </div>

                <div class="col-md-3">
                    <label for="bankAccount" class="form-label">Conta Bancaria:</label>
                    <select class="form-select bankAccount" aria-label="Default select example" id="bankAccount" name="bankAccount">
                        <option selected>Selecione</option>
                        <option value="1">Bradesco</option>
                        <option value="2">Nubank</option>
                        {{-- @foreach($collectionBankAccount as $objBankAccount)
                            <option value="{{ $objBankAccount->id}}">{{ $objBankAccount->institution}}</option>
                        @endforeach --}}
                      </select>
                </div>
    
            </div>
        </div>
    </form>

</x-app-layout>