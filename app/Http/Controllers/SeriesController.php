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

        return view('series.index', compact('series'));
    }

    public function create(Request $request)
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nome = $request->get('nome');
        $serie = Serie::create(['nome' => $nome]);

        return redirect('/series');
        //echo "Seria com id {$serie->id} criada: {$serie->nome}";
    }
}
