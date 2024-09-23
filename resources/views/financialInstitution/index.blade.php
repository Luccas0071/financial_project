
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista Instituições Financeiras') }}
        </h2>
    </x-slot>

    @isset($messageSuccess)
        <div class="alert alert-success">
            {{ $messageSuccess }}
        </div>
    @endisset

    <div class="container">
        <div class="row justify-content-end mt-2 mb-2">
            <div class="col-12 text-end">
                {{-- <button type="button" class="btn btn-primary">Adicionar</button> --}}
                <a href=" {{ route('financialInstitution.create') }}" class="btn btn-primary">Adicionar</a>
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
                        @foreach($collectionFinancialInstitution as $objFinancialInstitution)
                        <tr>
                            <th scope="row">{{ $objBankAccount->id }}</th>
                            <td>{{ $objFinancialInstitution->institution }}</td>
                            <td>{{ $objFinancialInstitution->balance }}</td>
                            <td>{{ $objFinancialInstitution->total_value }}</td>
                            <td>{{ $objFinancialInstitution->completion_date }}</td>
                            <td class="d-flex">
                                {{-- <form action="{{ route('bankAccount.update', $objBankAccount->id) }}" method="post">
                                    @csrf 
                                    <button type="button" class="btn btn-outline-primary btn-sm">
                                        <span class="material-icons">edit</span>
                                    </button>
                                </form> --}}

                                <a href="{{ route('financialInstitution.edit', $objFinancialInstitution->id) }}" class="btn btn-outline-primary btn-sm">
                                    <span class="material-icons">edit</span>
                                </a>

                                <form action="{{ route('financialInstitution.destroy', $objFinancialInstitution->id) }}" method="post" class="ms-2">
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