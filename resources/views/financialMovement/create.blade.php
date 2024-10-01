<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Transações') }}
        </h2>
    </x-slot>

    <form action=" {{ route('financialMovement.store') }}" method="post">
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

                <div class="col-md-2">
                    <label for="type" class="form-label">Tipo:</label>
                    <select class="form-select type" id="type" name="type">
                        <option selected>Selecione</option>
                        <option value="1">Receita</option>
                        <option value="2">Despesa</option>
                        <option value="3">Transferencia</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="identification" class="form-label">Identificação:</label>
                    <input type="text" class="form-control identification" id="identification" name="identification">
                </div>

                <div class="col-md-2">
                    <label for="date" class="form-label">Data:</label>
                    <input type="date" class="form-control date" id="date" name="date">
                </div>
                
                <div class="col-md-2">
                    <label for="value" class="form-label">Valor:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control value" id="value" name="value">
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="metod" class="form-label">Metodo:</label>
                    <select class="form-select metod" id="metod" name="metod">
                        <option selected>Selecione</option>
                        <option value="1">Dinheiro</option>
                        <option value="2">Cartão Credito</option>
                        <option value="3">Cartão Debito</option>
                        <option value="4">Pix</option>
                        <option value="5">Ted</option>
                        <option value="6">Doc</option>
                      </select>
                </div>

                <div class="col-md-2">
                    <label for="card" class="form-label">Cartão:</label>
                    <select class="form-select card" id="card" name="card">
                        <option selected>Selecione</option>
                        <option value="1">Nubank</option>
                        {{-- @foreach($collectionCardBankAccount as $objCardBankAccount)
                            <option value="{{ $objCardBankAccount->id}}">{{ $objCardBankAccount->identification}}</option>
                        @endforeach --}}
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="periodQty" class="form-label">Qtd Parcelas:</label>
                    <input type="text" class="form-control periodQty" id="periodQty" name="periodQty">
                </div>

                <div class="col-md-2">
                    <label for="period" class="form-label">Periodo:</label>
                    <select class="form-select period" id="period" name="period">
                        <option selected>Selecione</option>
                        <option value="1">Diário</option>
                        <option value="2">Semanal</option>
                        <option value="3">Mensal</option>
                        <option value="4">Anual</option>
                      </select>
                </div>

            
                <div class="col-md-2">
                    <label for="situation" class="form-label">Situação:</label>
                    <select class="form-select situation" id="situation" name="situation">
                        <option selected>Selecione</option>
                        <option value="1">Efetiva</option>
                        <option value="2">Pendente</option>
                      </select>
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Descrição:</label>
                    <textarea class="form-control description" id="description" name="description" rows="4" cols="50"></textarea>
                </div>

                
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <h5>Contas:</h5>
                        </div>
                        
                        <div class="col-6">
                            <label for="sourceAccount" class="form-label">Conta Origem:</label>
                            <select class="form-select sourceAccount" id="sourceAccount" name="sourceAccount">
                                <option selected>Selecione</option>
                                <option value="1">Nubank</option>
                                <option value="2">Bradesco</option>
                                {{-- @foreach($collectionBankAccount as $objBankAccount)
                                    <option value="{{ $objBankAccount->id}}">{{ $objBankAccount->institution}}</option>
                                @endforeach --}}
                              </select>
                        </div>
        
                        <div class="col-6">
                            <label for="destinationAccount" class="form-label">Conta Destino:</label>
                            <select class="form-select destinationAccount" aria-label="Default select example" id="destinationAccount" name="destinationAccount">
                                <option selected>Selecione</option>
                                <option value="1">Nubank</option>
                                <option value="2">Bradesco</option>
                                {{-- @foreach($collectionBankAccount as $objBankAccount)
                                    <option value="{{ $objBankAccount->id}}">{{ $objBankAccount->institution}}</option>
                                @endforeach --}}
                              </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>

</x-app-layout>