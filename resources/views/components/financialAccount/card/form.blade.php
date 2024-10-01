<div id="addCard-base" style="display: none;">
    <div class="addCard-i" id="addCard-sequencia-">

        <div class="row">

            <div class="col-md-2">
                <label for="type-i-" class="form-label">Tipo:</label>
                <select class="form-select type-i-" id="type-i-" name="type-i-">
                    <option selected>Selecione</option>
                    <option value="1">Credito</option>
                    <option value="2">Debito</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="identification-i-" class="form-label">Identificação:</label>
                <input type="text" class="form-control identification-i-" id="identification-i-" name="identification-i-">
            </div>

            <div class="col-md-2">
                <label for="balance-i-" class="form-label">Valor a pagar:</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control balance-i-" id="balance-i-" name="balance-i-">
                </div>
            </div>

            <div class="col-md-2">
                <label for="limit-i-" class="form-label">Limite:</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control limit-i-" id="limit-i-" name="limit-i-">
                </div>
            </div>

            <div class="col-md-1">
                <label for="due_date-i-" class="form-label">Dia Venc.:</label>
                <input type="number" class="form-control due_date-i-" id="due_date-i-" name="due_date-i-" min="1" max="31">
            </div>

            <div class="col-md-1 text-end" style="margin-top:32px">
                <button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteCard(this)">
                    <span class="material-icons">close</span>
                </button>
            </div>

          


        </div>

    </div>
</div>