<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHILED',
            'Supernatural'
        ];

        return view('series.index', compact('series'));
    }

    public function create(Request $request)
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nome = $request->get('nome');
        $serie = new Serie();
        $serie->nome = $nome;
        var_dump($serie->save());
    }
}
