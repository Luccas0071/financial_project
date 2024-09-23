<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cartões Conta bancaria') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row justify-content-end mt-2 mb-2">
            <div class="col-12 text-end">
                {{-- <button type="button" class="btn btn-primary">Adicionar</button> --}}
                <a href=" {{ route('cardBankAccount.create') }}" class="btn btn-primary">Adicionar</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Identificação</th>
                            <th scope="col">Limite</th>
                            <th scope="col">Dia de vencimento</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($collectionCardBankAccount as $objCardBankAccount)
                        <tr>
                            <th scope="row">{{ $objCardBankAccount->id }}</th>
                            <td>{{ $objCardBankAccount->identification }}</td>
                            <td>{{ $objCardBankAccount->limit }}</td>
                            <td>{{ $objCardBankAccount->credit_card_expiration }}</td>
                            <td class="d-flex">
                                <button type="button" class="btn btn-outline-primary btn-sm">
                                    <span class="material-icons">edit</span>
                                </button>
                                <form action="{{ route('cardBankAccount.destroy', $objCardBankAccount->id) }}" method="post">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-outline-primary btn-sm">
                                        <span class="material-icons">delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>