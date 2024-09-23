<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Transações') }}
        </h2>
    </x-slot>

    <form action=" {{ route('bankAccount.store') }}" method="post">
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

                <div class="col-md-6">
                    <label for="identification" class="form-label">Identificação:</label>
                    <input type="text" class="form-control identification" id="identification" name="identification">
                </div>
                
                <div class="col-md-2">
                    <label for="value" class="form-label">Valor:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control value" id="value" name="value">
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="date" class="form-label">Data:</label>
                    <input type="date" class="form-control date" id="date" name="date">
                </div>

                <div class="col-md-2">
                    <label for="situation" class="form-label">Situação:</label>
                    <select class="form-select situation" aria-label="Default select example" id="situation" name="situation">
                        <option selected>Selecione</option>
                        <option value="1">Efetiva</option>
                        <option value="2">Pendente</option>
                      </select>
                </div>

                <div class="col-md-2">
                    <label for="typeTransaction" class="form-label">Tipo:</label>
                    <select class="form-select typeTransaction" aria-label="Default select example" id="typeTransaction" name="typeTransaction">
                        <option selected>Selecione</option>
                        <option value="1">Receita</option>
                        <option value="2">Despesa</option>
                        <option value="3">Transferencia</option>
                      </select>
                </div>

                <div class="col-md-2">
                    <label for="period" class="form-label">Periodo:</label>
                    <select class="form-select period" aria-label="Default select example" id="period" name="period">
                        <option selected>Selecione</option>
                        <option value="1">Diario</option>
                        <option value="2">Semanal</option>
                        <option value="3">Mensal</option>
                        <option value="4">Anual</option>
                      </select>
                </div>
    
                <div class="col-md-2">
                    <label for="quantityPeriod" class="form-label">Qtd Periodo:</label>
                    <input type="text" class="form-control quantityPeriod" id="quantityPeriod" name="quantityPeriod">
                </div>

                <div class="col-md-2">
                    <label for="cardBankAccount" class="form-label">Cartão:</label>
                    <select class="form-select cardBankAccount" aria-label="Default select example" id="cardBankAccount" name="cardBankAccount">
                        <option selected>Selecione</option>
                        @foreach($collectionCardBankAccount as $objCardBankAccount)
                            <option value="{{ $objCardBankAccount->id}}">{{ $objCardBankAccount->identification}}</option>
                        @endforeach
                      </select>
                </div>

                <div class="col-md-2">
                    <label for="appellant" class="form-label">Recorrente:</label>
                    <input type="checkbox" class="form-check-input appellant" id="appellant" name="appellant">
                    <label for="fixed" class="form-label">Fixa:</label>
                    <input type="checkbox" class="form-check-input fixed" id="fixed" name="fixed">
                </div>

                
                <div class="col-12">
                    <h5>Categorias</h5>
                </div>

                <div class="col-12 d-flex ">
                    <input type="checkbox" class="btn-check" id="btn-check-outlined-1" autocomplete="off">
                    <label class="btn btn-outline-success" for="btn-check-outlined-1">Casa</label><br>
            
                    <input type="checkbox" class="btn-check" id="btn-check-outlined-2" autocomplete="off">
                    <label class="btn btn-outline-success" for="btn-check-outlined-2">Loja</label><br>
                
                    <input type="checkbox" class="btn-check" id="btn-check-outlined-3" autocomplete="off">
                    <label class="btn btn-outline-success" for="btn-check-outlined-3">Investimento</label><br>
                
                    <input type="checkbox" class="btn-check" id="btn-check-outlined-4" autocomplete="off">
                    <label class="btn btn-outline-success" for="btn-check-outlined-4">Pagamento</label><br>
            
                    <input type="checkbox" class="btn-check" id="btn-check-outlined-5" autocomplete="off">
                    <label class="btn btn-outline-success" for="btn-check-outlined-5">Outros</label><br>
                </div>
                    
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <h5>Contas:</h5>
                        </div>
                        
                        <div class="col-6">
                            <label for="originAccount" class="form-label">Conta Origem:</label>
                            <select class="form-select originAccount" aria-label="Default select example" id="originAccount" name="originAccount">
                                <option selected>Selecione</option>
                                @foreach($collectionBankAccount as $objBankAccount)
                                    <option value="{{ $objBankAccount->id}}">{{ $objBankAccount->institution}}</option>
                                @endforeach
                              </select>
                        </div>
        
                        <div class="col-6">
                            <label for="destinationAccount" class="form-label">Conta Destino:</label>
                            <select class="form-select destinationAccount" aria-label="Default select example" id="destinationAccount" name="destinationAccount">
                                <option selected>Selecione</option>
                                @foreach($collectionBankAccount as $objBankAccount)
                                    <option value="{{ $objBankAccount->id}}">{{ $objBankAccount->institution}}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Descrição:</label>
                    <textarea class="form-control description" id="description" name="description" rows="4" cols="50"></textarea>
                </div>

            </div>
        </div>
    </form>

</x-app-layout>