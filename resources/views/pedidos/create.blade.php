<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastrar Pedido') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto">

                        @if(session('success'))
                            <div class="bg-green-500 text-white p-3 rounded mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('pedidos.store') }}" method="POST" class="bg-gray-800 p-6 rounded-lg">
                            @csrf

                            <div class="mb-4">
                                <label for="dt_pedido" class="block text-white">Data do Pedido</label>
                                <input type="date" name="dt_pedido" id="dt_pedido" class="mt-1 block w-full p-2 bg-gray-700 text-white border border-gray-600 rounded" required>
                            </div>

                            <div class="mb-4">
                                <label for="valor_total" class="block text-white">Valor Total</label>
                                <input type="number" step="0.01" name="valor_total" id="valor_total" class="mt-1 block w-full p-2 bg-gray-700 text-white border border-gray-600 rounded" required>
                            </div>

                            <div class="mb-4">
                                <label for="status_pdd" class="block text-white">Status do Pedido</label>
                                <input type="text" name="status_pdd" id="status_pdd" class="mt-1 block w-full p-2 bg-gray-700 text-white border border-gray-600 rounded" required>
                            </div>

                            <div class="mb-4">
                                <label for="id_cliente" class="block text-white">Cliente</label>
                                <select name="id_cliente" id="id_cliente" class="mt-1 block w-full p-2 bg-gray-700 text-white border border-gray-600 rounded" required>
                                    <option value="">Selecione um cliente</option>
                                    @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="id_garcom" class="block text-white">Garçom</label>
                                <select name="id_garcom" id="id_garcom " class="mt-1 block w-full p-2 bg-gray-700 text-white border border-gray-600 rounded" required>
                                    <option value="">Selecione um garçom</option>
                                    @foreach($garcons as $garcom)
                                        <option value="{{ $garcom->id }}">{{ $garcom->nome }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Cadastrar Pedido</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
