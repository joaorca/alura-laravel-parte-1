<?php
declare(strict_types=1);

namespace App\Http\Controllers;

class SeriesController extends Controller
{
    public function listarSeries()
    {
        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHILED',
            'Supernatural'
        ];

        $html = "<ul>";
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";

        return $html;
    }
}