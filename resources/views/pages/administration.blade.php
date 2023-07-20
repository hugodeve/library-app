<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administração') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Administração') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("MOdulo Aprendizagem.") }}
                            </p>
                        </header>
                    </section>
                    <section>
                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="flex justify-center space-x-4 gap-6">
                                    <!-- Card 1 -->
                                    <div class="bg-white overflow-hidden shadow rounded-lg">
                                    <a href="{{ route('integrations.list') }}" class="block">
                                        <div class="p-6">
                                            <div class="flex items-center">
                                                <div class="mr-4">
                                                    <svg class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-7-7v14" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="text-lg font-medium text-gray-900">Fila de Processos</h3>
                                                    <p class="mt-2 text-sm text-gray-600">Consulta de fila de processos.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="bg-white overflow-hidden shadow rounded-lg">
                                        <a href="{{ route('integrations.index') }}" class="block">
                                            <div class="p-6">
                                                <div class="flex items-center">
                                                    <div class="mr-4">
                                                        <svg class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h3 class="text-lg font-medium text-gray-900">Procesos</h3>
                                                        <p class="mt-2 text-sm text-gray-600">Cadastro de Processos</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="bg-white overflow-hidden shadow rounded-lg">
                                        <a href="{{ route('pessoas.index') }}" class="block">
                                            <div class="p-6">
                                                <div class="flex items-center">
                                                    <div class="mr-4">
                                                        <svg class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9a6 6 0 00-6 6h2a4 4 0 004-4v-2z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h3 class="text-lg font-medium text-gray-900">Pessoas</h3>
                                                        <p class="mt-2 text-sm text-gray-600">Cadastro de Pessoas.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>    
                                    </div>

                                    <!-- Card 4 -->
                                    <div class="bg-white overflow-hidden shadow rounded-lg">
                                        <div class="p-6">
                                            <div class="flex items-center">
                                                <div class="mr-4">
                                                    <svg class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9l-2 2-2-2m2-2v12" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="text-lg font-medium text-gray-900">Card 4</h3>
                                                    <p class="mt-2 text-sm text-gray-600">Description for Card 4.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

   
</x-app-layout>
En este código, he agregado la clase space-x-4 al contenedor principal de los cards (flex justify-center space-x-4) para establecer un espacio horizontal de 4 unidades de espacio entre los cards.

Recuerda que puedes ajustar los estilos y las clases según tus necesidades y preferencias utilizando las utilidades de tailwind CSS.






