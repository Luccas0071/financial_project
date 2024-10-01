<script>
    i = 0;

    function addCard(element)
    {
        // Seleciona o elemento com id "cardList"
        var e = document.getElementById("cardList");

        // Obtém o conteúdo HTML do elemento com id "itemContrato-base"
        var base = document.getElementById("addCard-base").innerHTML;

        // Substitui as ocorrências de "-i-" e "-sequencia-" pelo valor de iItemContrato
        base = base.replace(/\-i\-/g, i);
        base = base.replace(/\-sequencia\-/g, i);

        // Cria um novo elemento div com o conteúdo modificado
        var newElement = document.createElement('div');
        newElement.innerHTML = base;

        // Adiciona o novo conteúdo ao final do elemento com id "cardList"
        e.appendChild(newElement);

        i++;


    }

    function deleteCard(element)
    {
        
    }
</script>

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Conta Bancária') }}
        </h2>
    </x-slot>
    {{-- 1° Forma - como chamar a Action --}}
    {{-- <x-bankAccount.form action="{{ route('bankAccount.store') }}"> --}}
    {{-- 2° Forma - como chamar a Action --}}

    <x-financialAccount.form
    :action="route('financialAccount.store')"
    ></x-financialAccount.form>

    <div class="container">
        {{-- <div class="row justify-content-end mt-3"> --}}
        <div class="row">
            <div class="col-md-11">
                <h3>Cartão</h3>
            </div>
            <div class="col-md-1 text-end">
                <button type="submit" class="btn btn-primary" onclick="addCard(this)">
                    <span class="material-icons">add</span>
                </button>
            </div>
        </div>

        <div id="cardList"></div>


        <x-financialAccount.card.form></x-financialAccount.card.form>
    </div>
    
</x-app-layout>