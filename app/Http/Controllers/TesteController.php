<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function Teste(int $p1, int $p2)
    {
        // $soma = $p1 + $p2;
        // echo "$p1 + $p2 = $soma";

        // return view('site.teste', ['p1' => $p1, 'p2'=>$p2]); -> Array associativo
        return view('site.teste', compact('p1', 'p2')); //-> metedo Compact
    }
}
