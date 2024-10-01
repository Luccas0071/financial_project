<form action=" {{ $action }}" method="post">
    @csrf
    @isset($identification) 
        @method('PUT')
    @endisset

    <div class="container">
        <div class="row justify-content-end mt-3">
            <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <label for="identification" class="form-label">Identificação:</label>
                <input type="text" class="form-control identification" id="identification" name="identification" @isset($identification)value="{{ $identification }}" @endisset>
            </div>

            <div class="col-md-3">
                <label for="institution" class="form-label">Instituição:</label>
                <select class="form-select institution" id="institution" name="institution">
                    <option selected>Selecione</option>
                    <option value="1">Banco Bradesco S.A</option>
                    <option value="2">Banco Digital Nubank</option>
                    <option value="3">Banco Satander</option>
                  </select>
            </div>

            <div class="col-md-2">
                <label for="balance" class="form-label">Saldo:</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control balance" id="balance" name="balance" @isset($balance) value="{{ $balance }}" @endisset >
                </div>
            </div>

            <div class="col-md-2">
                <label for="type" class="form-label">Tipo:</label>
                <select class="form-select type" id="type" name="type">
                    <option selected>Selecione</option>
                    <option value="1">Poupança</option>
                    <option value="2">Corrente</option>
                    <option value="3">Investimento</option>
                    <option value="3">Salário</option>
                  </select>
            </div>

            <div class="col-12">
                <label for="description" class="form-label">Descrição:</label>
                <textarea class="form-control description" id="description" name="description" rows="4" cols="50">@isset($description) {{ $description }} @endisset</textarea>
            </div>

        </div>
    </div>

</form>