<?php
namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Http\Requests\PessoaRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PessoasController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();

        return view('forms.person', compact('pessoas'));
    }

    public function create()
    {
        return view('pessoas.create');
    }

    public function store(PessoaRequest $request)
    {
        $pessoa = new Pessoa();
        $pessoa->fill([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'endereco' => $request->endereco,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'telefone' => $request->telefone,
            'email' => $request->email,
        ]);
        dd($pessoa->nome, $pessoa->cpf, $pessoa->rg, $pessoa->endereco, $pessoa->cidade, $pessoa->estado, $pessoa->pais, $pessoa->telefone, $pessoa->email);
        
        $pessoa->save();
    
        return $pessoa;
    
    }

    public function show(Pessoa $pessoa)
    {
        return view('pessoas.show', compact('pessoa'));
    }

    public function edit(Pessoa $pessoa)
    {
        return view('pessoas.edit', compact('pessoa'));
    }

    public function update(PessoaRequest $request, Pessoa $pessoa)
    {
        $pessoa->fill($request->all());
        $pessoa->save();

        return redirect()->route('pessoas.index')->with('success', 'Pessoa atualizada com sucesso!');
    }

    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();

        return redirect()->route('pessoas.index')->with('success', 'Pessoa deletada com sucesso!');
    }
}