<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastro
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
                                <a href="{{ route('integrations.index') }}" class="font-semibold text-gray-700">
                                    {{ __('Cadastro de Processos') }}
                                </a>
                            </li>
                        </ol>
                    </nav>
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                Cadastro de Integração
                            </h2>
                        </header>
                    </section>
                    <section>
                        <form action="{{ route('integrations.store') }}" method="POST">
                            @csrf
                            <div>
                                <label for="nome_integracao" class="block text-sm font-semibold leading-6 text-gray-900">Nome da integração</label>
                                <div class="mt-2.5">
                                <input type="text" name="nome_integracao"  id="nome_integracao"  placeholder="Nome da integração" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                            </div>
                            </div>

                            <div>
                                <label for="pessoa_id" class="block text-sm font-semibold leading-6 text-gray-900">Pessoas</label>
                                <select id="pessoa_id"  name="pessoa_id" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm" required>
                                    <option value="">Escolha uma Pessoa</option>
                                    @foreach ($pessoas as $pessoa)
                                        <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="unidade_id" class="block text-sm font-semibold leading-6 text-gray-900">Unidades</label>
                                <select class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm" name="unidade_id"  id="unidade_id" required>
                                    <option value="">Escolha uma unidade</option>
                                    @foreach ($unidades as $unidade)
                                        <option value="{{ $unidade->id }}">{{ $unidade->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div >
                                <label for="status"  class="block text-sm font-semibold leading-6 text-gray-900">Status</label>
                                <select class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm" name="status"  id="status" required>
                                    <option value="em_amdamento">Em andamento</option>
                                    <option value="processado">Processado</option>
                                    <option value="cancelado">Cancelado</option>
                                </select>
                            </div>
                            
                            <div class="flex items-center h-8 space-x-2">
                                <button type="submit"  class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                    Criar
                                </button>
                            </div>
                            
                            
                        </form>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
