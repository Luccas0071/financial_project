<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alterar Conta Bancaria') }}
        </h2>
    </x-slot>

    <x-bankAccount.form :action="route('bankAccount.update', $bankAccount->id)" 
    :institution='$bankAccount->institution' 
    :balance='$bankAccount->balance'
    :totalValue='$bankAccount->total_value'
    :completionDate='$bankAccount->completion_date'
    :description='$bankAccount->description'
    ></x-bankAccount.form>

</x-app-layout>