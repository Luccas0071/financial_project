<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Categoria') }}
        </h2>
    </x-slot>

    <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control name" id="name" name="name">
            </div>

            <div class="col-12">
                <label for="color" class="form-label">Cor:</label>
                <input type="color" class="form-control form-control-color" name="color" id="color" title="Cor da categoria">
            </div>
        </div>
    </div>

</x-app-layout>