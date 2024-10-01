<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Categoria') }}
        </h2>
    </x-slot>

    <div class="container p-5">
        <div class="row align-items-center">
            <div class="col-md-1 text-center">
                <label for="identification" class="form-label">1.</label>
            </div>

            <div class="col-md-7">
                <label for="identification" class="form-label">Identificação</label>
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
                <label for="color" class="form-label">Cor:</label>
                <input type="color" class="form-control form-control-color" name="color" id="color" title="Cor da categoria">
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-1 text-center">
                <label for="identification" class="form-label">2.</label>
            </div>
            <div class="col-md-7">
                <label for="identification" class="form-label">Identificação</label>
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
                <label for="color" class="form-label">Cor:</label>
                <input type="color" class="form-control form-control-color" name="color" id="color" title="Cor da categoria">
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-1 text-center">
                <label for="identification" class="form-label">3.</label>
            </div>
            <div class="col-md-7">
                <label for="identification" class="form-label">Identificação</label>
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
                <label for="color" class="form-label">Cor:</label>
                <input type="color" class="form-control form-control-color" name="color" id="color" title="Cor da categoria">
            </div>

            <div class="col-12">
                <div class="row align-items-center" style="margin-left: 50px">
                    <div class="col-md-1 text-center">
                        <label for="identification" class="form-label">3.1.</label>
                    </div>
                    <div class="col-md-7">
                        <label for="identification" class="form-label">Identificação</label>
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
                        <label for="color" class="form-label">Cor:</label>
                        <input type="color" class="form-control form-control-color" name="color" id="color" title="Cor da categoria">
                    </div>
                </div>

                <div class="row align-items-center" style="margin-left: 50px">
                    <div class="col-md-1 text-center">
                        <label for="identification" class="form-label">3.2.</label>
                    </div>
                    <div class="col-md-7">
                        <label for="identification" class="form-label">Identificação</label>
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
                        <label for="color" class="form-label">Cor:</label>
                        <input type="color" class="form-control form-control-color" name="color" id="color" title="Cor da categoria">
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-1 text-center">
                <label for="identification" class="form-label">4.</label>
            </div>
            <div class="col-md-7">
                <label for="identification" class="form-label">Identificação</label>
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
                <label for="color" class="form-label">Cor:</label>
                <input type="color" class="form-control form-control-color" name="color" id="color" title="Cor da categoria">
            </div>
        </div>
        </div>
    </div>

</x-app-layout>