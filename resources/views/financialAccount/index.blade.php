
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Conta Bancaria') }}
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
                <a href=" {{ route('financialAccount.create') }}" class="btn btn-primary">Adicionar</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th >Instituição</th>
                                <th>Saldo</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($collectionFinancialAccount as $objFinancialAccount)
                            <tr>
                                <th>{{ $objFinancialAccount->id }}</th>
                                <td>{{ $objFinancialAccount->identification }}</td>
                                <td>$ {{ $objFinancialAccount->balance }}</td>
                                <td class="d-flex gap-1">
                                    {{-- <form action="{{ route('bankAccount.update', $objBankAccount->id) }}" method="post">
                                        @csrf 
                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                            <span class="material-icons">edit</span>
                                        </button>
                                    </form> --}}

                                    <a href="{{ route('financialAccount.edit', $objFinancialAccount->id) }}" class="btn btn-outline-primary btn-sm">
                                        <span class="material-icons">edit</span>
                                    </a>

                                    <form action="{{ route('financialAccount.destroy', $objFinancialAccount->id) }}" method="post">
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
    </div>
</x-app-layout>