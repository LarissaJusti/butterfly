<?php

namespace App\Http\Controllers;
use App\Models\Butterfly;
use Illuminate\Http\Request;

class ButterfliesController extends Controller
{
    public function index ()
    {
        $butterflies = Butterfly::all();
        return view('butterflies.index', compact('butterflies'));
    }

    public function create ()
    {
        return view('butterflies.create');
    }

    public function store(Request $requisicao)
    {

        $butterfly = new Butterfly();

        $butterfly->nome = $requisicao->nome;
        $butterfly->especie = $requisicao->especie;
        $butterfly->idade = $requisicao->idade;
        $butterfly->sexo = $requisicao->sexo;
        $butterfly->cor = $requisicao->cor;
        $butterfly->significado = $requisicao->significado;

        $butterfly->save();

        return redirect()->route('butterflies.show', $butterfly->id);
    }

    public function show(Butterfly $butterfly)
    {
        return view('butterflies.view', compact('butterfly'));
    }

    public function edit($butterfly)
    {
        return view('butterlies.edit', compact('butterfly'));
    }

    public function update(Request $requisicao, Butterfly $butterfly)
    {
        $butterfly->update($requisicao->all());

        return redirect()->route('butterflies.show', $butterfly->id);
    }

    public function destroy(Butterfly $butterfly)
    {
        $butterfly->delete();

        return redirect()->route('butterflies.index');
    }
}

