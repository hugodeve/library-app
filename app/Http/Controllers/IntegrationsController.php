<?php

namespace App\Http\Controllers;

use App\Models\Integration;
use App\Models\Pessoa;
use App\Models\Unidade;
use Illuminate\Http\Request;

class IntegrationsController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();
        $unidades = Unidade::all();
        return view('forms.register', compact('pessoas', 'unidades'));
    }
    public function store(Request $request)
    {
        $integration = new Integration;
        $integration->nome_integracao = $request->nome_integracao;
        $integration->pessoa_id = $request->pessoa_id;
        $integration->unidade_id = $request->unidade_id;
        $integration->status = $request->status;
        $integration->save();

        return redirect()->route('integrations.index');
    }

    public function list()
    {
        $integrations = Integration::all();
        foreach ($integrations as $integration) {
            $pessoaName=$integration->pessoa->nome;
            $unidadeName=$integration->unidade->nome;
        }
        
        $pessoaName;
        $unidadeName;

        return view('pages.queue-processes', compact('integrations', 'pessoaName', 'unidadeName'));
    }

    public function edit(Integration $integration)
    {
        $integration = Integration::first();
        
        $nome_integracao = $integration->nome_integracao;
        
        $pessoas = Pessoa::first();
        $unidades = Unidade::first();
    
        // Get the IDs of the selected Pessoa and Unidade
      
        $selectedPessoaId = $integration->pessoa_id;
        $selectedUnidadeId = $integration->unidade_id;
    
        return view('forms.edit', compact('integration', 'pessoas', 'unidades', 'selectedPessoaId', 'selectedUnidadeId'));
    }
    
    public function update(Request $request, Integration $integration)
    {
        $integration->status = $request->status;
        $integration->save();
    
        return redirect()->route('integrations.list');
    }
}
