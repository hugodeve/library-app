<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastro de Pessoas
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
                                <a href="{{ route('pessoas.index') }}" class="font-semibold text-gray-700">
                                    {{ __('Cadastro de Pessoas') }}
                                </a>
                            </li>
                        </ol>
                    </nav>
                    <section>
                        <div class="container">
                            <header>
                                <h2 class="text-lg font-medium text-gray-900">
                                    Cadastro de Pessoas
                                </h2>
                            </header>
                        </div>
                        <section>
                            <form action="{{ route('pessoas.store') }}" method="POST">
                                @csrf
                                <div>
                                    <label class="block text-sm font-semibold leading-6 text-gray-900" for="nome">Nome</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="nome" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  id="nome" placeholder="Nome" required>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold leading-6 text-gray-900" for="cpf">CPF</label>
                                    <div class="mt-2.5">
                                        <input  type="text" name="cpf" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="cpf" placeholder="CPF" required>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold leading-6 text-gray-900" for="rg">RG</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="rg" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="rg" placeholder="RG" required>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold leading-6 text-gray-900" for="endereco">Endereço</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="endereco" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="endereco" placeholder="Endereço" required>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold leading-6 text-gray-900" for="cidade">Cidade</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="cidade" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="cidade" placeholder="Cidade" required>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold leading-6 text-gray-900" for="estado">Estado</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="estado" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="estado" placeholder="Estado" required>
                                    </div>    
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold leading-6 text-gray-900" for="pais">País</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="pais" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="pais" placeholder="País" required>
                                    </div>        
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold leading-6 text-gray-900" for="telefone">Telefone</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="telefone" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="telefone" placeholder="Telefone" required>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold leading-6 text-gray-900" for="email">E-mail</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="email" placeholder="E-mail" required>
                                    </div>        
                                </div>
                                <button type="submit"  class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                    Salvar
                                </button>

                            </form>
                        </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>