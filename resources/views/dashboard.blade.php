<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>Resumo</h3><br>
                    <h5>(Total de Ganhos Mensais)Saldo: <span>00,00</span> </h5>
                    <h5>(Total de Gastos Mensais)Total Gasto: <span>00,00</span> </h5>
                    <h5>(Contas a ser pago)Total á pagar : <span>00,00</span> </h5>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
