<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()
            ->orderBy('nome')
            ->get();

        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series', 'mensagem'));
    }

    public function create(Request $request)
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nome = $request->get('nome');
        $serie = Serie::create(['nome' => $nome]);

        $request->session()
            ->flash(
                'mensagem',
                "Seria com id {$serie->id} criada: {$serie->nome}");

        return redirect('/series');
    }
}
