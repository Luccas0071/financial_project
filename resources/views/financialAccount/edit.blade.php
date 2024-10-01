<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alterar Conta Bancária') }}
        </h2>
    </x-slot>

    <x-financialAccount.form
    :action="route('financialAccount.update', $financialAccount->id)" 
    :id='$financialAccount->id' 
    :identification='$financialAccount->identification' 
    :institution='$financialAccount->institution'
    :balance='$financialAccount->balance'
    :type='$financialAccount->type'
    :description='$financialAccount->description'
    ></x-financialAccount.form>

</x-app-layout>