
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista Transações') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row justify-content-end mt-2 mb-2">
            <div class="col-12 text-end">
                {{-- <button type="button" class="btn btn-primary">Adicionar</button> --}}
                <a href=" {{ route('transaction.create') }}" class="btn btn-primary">Adicionar</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Instituição</th>
                            <th scope="col">Saldo</th>
                            <th scope="col">Valor Total</th>
                            <th scope="col">Data Conclusão</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($collectionBankAccount as $objBankAccount)
                        <tr>
                            <th scope="row">{{ $objBankAccount->id }}</th>
                            <td>{{ $objBankAccount->institution }}</td>
                            <td>{{ $objBankAccount->balance }}</td>
                            <td>{{ $objBankAccount->total_value }}</td>
                            <td>{{ $objBankAccount->completion_date }}</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-sm">
                                    <span class="material-icons">edit</span>
                                </button>
                                <form action="{{ route('bankAccount.destroy', $objBankAccount->id) }}" method="post">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-outline-primary btn-sm">
                                        <span class="material-icons">delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>