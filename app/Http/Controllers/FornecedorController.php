<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = ['Fornecedor 1', 'Fornecedor 1', 'Fornecedor 1', 'Fornecedor 1', 'Fornecedor 1'];
        $fornecedores2 = [
            0 => ['nome' => 'Fornecedores', 'status' => 'N'],
            1 => ['nome' => 'Fornecedores 1', 'Status' => 'S', 'cnpj' => '0', 'ddd' => '11', 'tel' => '987654'],
            2 => ['nome' => 'Fornecedores 2', 'Status' => 'S', 'cnpj' => '0', 'ddd' => '85', 'tel' => '123456']
        ];

        // Operador Ternario
        $msg = isset($fornecedor[1]['cnpj']) ? 'CNPJ Informado' : 'CNPJ não informado';
        echo $msg;
        return view('app.fornecedor.index', compact('fornecedores', 'fornecedores2'));
        // return view('app.fornecedor.index', compact('fornecedor'));
    }
}
