<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fila de processos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <nav class="text-sm" aria-label="Breadcrumb">
                        <ol class="list-none p-0 inline-flex">
                            <li class="flex items-center">
                                <a href="{{ route('administration') }}" class="text-gray-500 hover:text-gray-700">
                                    {{ __('Administração') }}
                                </a>
                                <svg class="h-5 w-auto text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <a href="{{ route('integrations.list') }}" class="font-semibold text-gray-700">
                                    {{ __('Fila de Processos') }}
                                </a>
                            </li>
                        </ol>
                    </nav>

                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Fila de Processos ') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Módulo Administração.") }}
                            </p>
                        </header>
                    </section>

                    <!-- Text Box de Filtro -->
                    <div class="mt-6">
                        <input type="text" class="border border-gray-300 rounded-md px-4 py-2 w-full" placeholder="Buscar...">
                    </div>

                    <!-- Tabla -->
                    <div class="mt-6">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Código
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nome
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pessoa
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Unidade
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Data Criação
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Data Modificação
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Opções
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($integrations as $integration)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $integration->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $integration->nome_integracao }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $pessoaName }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $unidadeName }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $integration->status }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $integration->created_at }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $integration->updated_at }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <svg class="h-5 w-5 text-gray-500 hover:text-gray-700 mr-2 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9a6 6 0 00-6 6h2a4 4 0 004-4v-2z" />
                                                </svg>
                                                <a href="{{ route('integrations.edit', $integration) }}" class="text-sm text-gray-500 hover:text-gray-700 cursor-pointer">Editar</a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <svg class="h-5 w-5 text-gray-500 hover:text-gray-700 mr-2 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                                <span class="text-sm text-gray-500 hover:text-gray-700 cursor-pointer">Eliminar</span>
                                            </div>
                                        </td>   
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>