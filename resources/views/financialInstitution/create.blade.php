<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Instituição Financeira') }}
        </h2>
    </x-slot>
    {{-- 1° Forma - como chamar a Action --}}
    {{-- <x-bankAccount.form action="{{ route('bankAccount.store') }}"> --}}
    {{-- 2° Forma - como chamar a Action --}}
    <x-financialInstitution.form :action="route('financialInstitution.store')"></x-financialInstitution.form>

</x-app-layout>